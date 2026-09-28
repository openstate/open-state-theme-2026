<?php

/**
 * Cap verification for the donation form.
 *
 * The donate form POSTs to itself and is processed by the "Doneren met Mollie"
 * plugin, which the theme does not control. So instead of verifying inline, we
 * intercept the request early, check the Cap token, and abort before the
 * plugin's handler ever sees the submission.
 *
 * Shares its configuration and helpers with app/newsletter.php.
 */

namespace App;

const DONATE_SUBMIT_FIELD = 'dmm_submitted';

/**
 * Is this request a donation form submission from the front end?
 */
function is_donate_submission()
{
    if (!isset($_SERVER['REQUEST_METHOD']) || strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') {
        return false;
    }

    // Never touch the admin, AJAX, cron, or the Mollie payment webhook — the
    // webhook is a server-to-server POST and carries no dmm_submitted field.
    if (is_admin() || wp_doing_ajax() || wp_doing_cron()) {
        return false;
    }

    return isset($_POST[DONATE_SUBMIT_FIELD]);
}

function donate_rate_limited()
{
    $key   = 'open_state_donate_' . md5(client_ip());
    $count = (int) get_transient($key);

    if ($count >= 15) {
        return true;
    }

    set_transient($key, $count + 1, HOUR_IN_SECONDS);

    return false;
}

/**
 * Send the visitor back to the form with an error code, without letting the
 * plugin process the submission.
 */
function donate_reject($code)
{
    newsletter_log('Donation rejected: ' . $code);

    $referer = wp_get_referer();

    if (!$referer) {
        $referer = home_url('/');
    }

    wp_safe_redirect(add_query_arg('donate_error', $code, $referer), 302);
    exit;
}

/**
 * Priority 0 on `init` puts this ahead of anything the plugin registers at the
 * default priority, and ahead of `template_redirect` and `wp` entirely.
 */
add_action('init', function () {
    if (!is_donate_submission()) {
        return;
    }

    if (!cap_is_configured()) {
        // Fail closed: no verification available means no donations processed.
        donate_reject('unavailable');
    }

    if (donate_rate_limited()) {
        donate_reject('ratelimit');
    }

    $token = isset($_POST[CAP_TOKEN_FIELD]) ? sanitize_text_field(wp_unslash($_POST[CAP_TOKEN_FIELD])) : '';

    if (!cap_verify_token($token)) {
        donate_reject('captcha');
    }

    // Verified. Drop the token so the plugin doesn't store or forward it, then
    // let the request continue to the Mollie handler untouched.
    unset($_POST[CAP_TOKEN_FIELD]);
}, 0);

/**
 * Human-readable message for the error codes above.
 */
function donate_error_message()
{
    $code = isset($_GET['donate_error']) ? sanitize_key(wp_unslash($_GET['donate_error'])) : '';

    switch ($code) {
        case 'captcha':
            return __('Verificatie mislukt. Probeer het opnieuw.', 'sage');
        case 'ratelimit':
            return __('Te veel pogingen. Probeer het later opnieuw.', 'sage');
        case 'unavailable':
            return __('Doneren is tijdelijk niet beschikbaar.', 'sage');
        default:
            return '';
    }
}
