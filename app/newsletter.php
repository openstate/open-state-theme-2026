<?php

/**
 * Newsletter signup endpoint, protected by Cap (https://trycap.dev).
 *
 * The newsletter form used to POST straight to Mailchimp's list-manage embed
 * URL, which meant there was nowhere to verify a CAPTCHA token. It now POSTs
 * here instead: we verify the Cap token server-side, and only then hand the
 * address to the Mailchimp API.
 *
 * Required configuration (wp-config.php constants, or environment variables
 * of the same name):
 *
 *   OPEN_STATE_CAP_INSTANCE_URL   https://cap.example.org   (your Cap Standalone instance)
 *   OPEN_STATE_CAP_SITE_KEY       10 hex chars, public, ends up in the browser
 *   OPEN_STATE_CAP_SECRET_KEY     sk-...  SERVER ONLY, never expose this
 *   OPEN_STATE_MAILCHIMP_API_KEY  ...-us4 SERVER ONLY
 *   OPEN_STATE_MAILCHIMP_LIST_ID  a9619e4f3e
 */

namespace App;

const CAP_TOKEN_FIELD = 'cap-token';
const NEWSLETTER_HONEYPOT = 'b_03355fd4f1a7935cae63b21aa_a9619e4f3e';
const NEWSLETTER_ROUTE = 'open-state/v1';

/**
 * Read a setting from a constant, falling back to the environment.
 */
function open_state_setting($name)
{
    if (defined($name) && constant($name)) {
        return (string) constant($name);
    }

    $env = getenv($name);

    return $env ? (string) $env : '';
}

/**
 * Public endpoint the widget talks to. Always has a trailing slash.
 */
function cap_widget_endpoint()
{
    $instance = open_state_setting('OPEN_STATE_CAP_INSTANCE_URL');
    $site_key = open_state_setting('OPEN_STATE_CAP_SITE_KEY');

    if (!$instance || !$site_key) {
        return '';
    }

    return trailingslashit(untrailingslashit($instance) . '/' . $site_key);
}

function cap_is_configured()
{
    return (bool) cap_widget_endpoint() && (bool) open_state_setting('OPEN_STATE_CAP_SECRET_KEY');
}

/**
 * Load the Cap widget. Version is pinned deliberately — an unpinned CDN
 * reference lets an upstream release change behaviour without warning.
 */
add_action('wp_enqueue_scripts', function () {
    if (!cap_is_configured()) {
        return;
    }

    wp_enqueue_script(
        'cap-widget',
        'https://cdn.jsdelivr.net/npm/cap-widget@0.1.56',
        [],
        '0.1.56',
        true
    );
}, 100);

add_filter('script_loader_tag', function ($tag, $handle) {
    if ($handle !== 'cap-widget') {
        return $tag;
    }

    return str_replace('<script ', '<script type="module" ', $tag);
}, 10, 2);

/**
 * Nudge an administrator if the keys are missing, rather than failing silently
 * on the front end.
 */
add_action('admin_notices', function () {
    if (cap_is_configured() || !current_user_can('manage_options')) {
        return;
    }

    echo '<div class="notice notice-error"><p><strong>Newsletter form disabled.</strong> ' .
        'Set OPEN_STATE_CAP_INSTANCE_URL, OPEN_STATE_CAP_SITE_KEY and OPEN_STATE_CAP_SECRET_KEY to enable ' .
        'CAPTCHA-protected newsletter signups.</p></div>';
});

add_action('rest_api_init', function () {
    register_rest_route(NEWSLETTER_ROUTE, '/newsletter', [
        'methods'             => 'POST',
        'permission_callback' => '__return_true',
        'callback'            => __NAMESPACE__ . '\\handle_newsletter_signup',
    ]);
});

function newsletter_error($message, $status = 400)
{
    return new \WP_REST_Response(['success' => false, 'message' => $message], $status);
}

function newsletter_log($message)
{
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('[newsletter] ' . $message);
    }
}

function client_ip()
{
    $ip = isset($_SERVER['REMOTE_ADDR']) ? wp_unslash($_SERVER['REMOTE_ADDR']) : '';

    return filter_var($ip, FILTER_VALIDATE_IP) ? $ip : 'unknown';
}

/**
 * Coarse per-IP ceiling. Cap stops the bots; this stops one determined person
 * from solving repeatedly in a loop.
 */
function newsletter_rate_limited()
{
    $key   = 'open_state_nl_' . md5(client_ip());
    $count = (int) get_transient($key);

    if ($count >= 10) {
        return true;
    }

    set_transient($key, $count + 1, HOUR_IN_SECONDS);

    return false;
}

/**
 * Verify a Cap token against the Standalone instance.
 *
 * Tokens are single-use: the Cap server deletes the token on verification, so
 * this must be called exactly once per submission. Fails closed on any
 * transport error.
 */
function cap_verify_token($token)
{
    if (!is_string($token) || $token === '') {
        return false;
    }

    $endpoint = cap_widget_endpoint() . 'siteverify';

    $response = wp_remote_post($endpoint, [
        'timeout' => 10,
        'headers' => ['Content-Type' => 'application/json'],
        'body'    => wp_json_encode([
            'secret'   => open_state_setting('OPEN_STATE_CAP_SECRET_KEY'),
            'response' => $token,
        ]),
    ]);

    if (is_wp_error($response)) {
        newsletter_log('Cap unreachable: ' . $response->get_error_message());

        return false;
    }

    $body = json_decode(wp_remote_retrieve_body($response), true);

    if (empty($body['success'])) {
        newsletter_log('Cap rejected token: ' . wp_remote_retrieve_body($response));

        return false;
    }

    return true;
}

/**
 * Add the address to Mailchimp with status "pending", which preserves the
 * double opt-in confirmation email the embedded form used to send.
 */
function mailchimp_subscribe($email)
{
    $api_key = open_state_setting('OPEN_STATE_MAILCHIMP_API_KEY');
    $list_id = open_state_setting('OPEN_STATE_MAILCHIMP_LIST_ID');

    if (!$api_key || !$list_id) {
        newsletter_log('Mailchimp credentials missing.');

        return new \WP_Error('config', 'Newsletter is not configured.');
    }

    $parts = explode('-', $api_key);
    $dc    = end($parts);

    $url = sprintf(
        'https://%s.api.mailchimp.com/3.0/lists/%s/members',
        rawurlencode($dc),
        rawurlencode($list_id)
    );

    $response = wp_remote_post($url, [
        'timeout' => 15,
        'headers' => [
            'Content-Type'  => 'application/json',
            'Authorization' => 'Basic ' . base64_encode('key:' . $api_key),
        ],
        'body' => wp_json_encode([
            'email_address' => $email,
            'status'        => 'pending',
        ]),
    ]);

    if (is_wp_error($response)) {
        newsletter_log('Mailchimp unreachable: ' . $response->get_error_message());

        return new \WP_Error('transport', 'Could not reach the newsletter service.');
    }

    $code = wp_remote_retrieve_response_code($response);
    $body = json_decode(wp_remote_retrieve_body($response), true);

    if ($code >= 200 && $code < 300) {
        return true;
    }

    // An address already on the list is not an error worth surfacing.
    if (isset($body['title']) && $body['title'] === 'Member Exists') {
        return true;
    }

    newsletter_log('Mailchimp error ' . $code . ': ' . wp_remote_retrieve_body($response));

    return new \WP_Error('mailchimp', 'Could not complete the subscription.');
}

function handle_newsletter_signup(\WP_REST_Request $request)
{
    if (!cap_is_configured()) {
        return newsletter_error('Aanmelden voor de nieuwsbrief is tijdelijk niet beschikbaar.', 503);
    }

    // Honeypot, carried over from the original embed form.
    if ($request->get_param(NEWSLETTER_HONEYPOT)) {
        return newsletter_error('Ongeldige aanvraag.');
    }

    if (newsletter_rate_limited()) {
        return newsletter_error('Te veel pogingen. Probeer het later opnieuw.', 429);
    }

    $email = sanitize_email((string) $request->get_param('EMAIL'));

    if (!is_email($email)) {
        return newsletter_error(__('Dit is een ongeldig e-mailadres.', 'sage'));
    }

    // Verify before any side effect.
    if (!cap_verify_token($request->get_param(CAP_TOKEN_FIELD))) {
        return newsletter_error(__('Verificatie mislukt. Probeer het opnieuw.', 'sage'), 403);
    }

    $result = mailchimp_subscribe($email);

    if (is_wp_error($result)) {
        return newsletter_error($result->get_error_message(), 502);
    }

    return new \WP_REST_Response([
        'success' => true,
        'message' => __('Bijna klaar — bevestig je aanmelding via de e-mail die we net stuurden.', 'sage'),
    ], 200);
}
