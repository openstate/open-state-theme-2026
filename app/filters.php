<?php

/**
 * Theme filters.
 */

namespace App;

// Retrieve ACF action box fields
function get_action_box_data($data) {
  $data['action_box_vraagteken'] = get_field('action_box_vraagteken');
  $data['action_box_download'] = get_field('action_box_download');

  return $data;
}

// Retrieve ACF agenda fields
function get_agenda_data($data) {
  $data['agenda_evenement'] = get_field('agenda_evenement');
  $data['agenda_tijdstip'] = get_field('agenda_tijdstip');
  $data['agenda_locatie'] = get_field('agenda_locatie');
  $data['agenda_inschrijfformulier_url'] = get_field('agenda_inschrijfformulier_url');

  return $data;
}

// Retrieve ACF project fields
function get_project_data($data) {
  $data['project_afgerond'] = get_field('project_afgerond');
  $project_websites = get_field('project_websites');

  if (is_array($project_websites)) {
    $data['project_url'] = $project_websites[0]['project_url'];
  }

  return $data;
}

add_filter('sage/template/single/data', function ($data) {
  $data = get_action_box_data($data);
  return get_agenda_data($data);
});

add_filter('sage/template/template-custom/data', function ($data) {
  return get_action_box_data($data);
});

add_filter('sage/template/page/data', function ($data) {
  $data = get_action_box_data($data);
  return get_project_data($data);
});

// Custom Contact Form 7 tag to include our button component
add_action('wpcf7_init', function () {
  wpcf7_add_form_tag(
    'sage_button',
    function () {
      // Render the Blade component to a string
      $html = view('components.button', [
        'text' => 'Verstuur',
        'type' => 'submit',
        'class' => 'wpcf7-form-control wpcf7-submit',
      ])->render();

      return $html;
    },
    true
  );
});

// Allow videos and SVG to be uploaded
add_filter('upload_mimes', function( $existing_mimes=array() ) {
  // Add webm, mp4, OGG and SVG to the list of mime types;
  // Some mime types can/must also be set via
  // My Sites -> Network Admin -> Settings
  $existing_mimes['webm'] = 'video/webm';
  $existing_mimes['mp4']  = 'video/mp4';
  $existing_mimes['ogg']  = 'video/ogg';
  $existing_mimes['svg']  = 'image/svg+xml';

  // Return an array now including our added mime types
  return $existing_mimes;
});

// Catch Mollie donation webhook, request payment details from their API and send an email to us
add_action('do_parse_request', function($do_parse, $wp) {
    $current_path = esc_url_raw(add_query_arg([]));

    if (strpos($current_path, 'dmm-webhook')) {
        $apikey = get_option('dmm_mollie_apikey');

        $args = array(
            'headers' => array(
                'Authorization' => 'Bearer ' . $apikey
            )
        );
        $payment_response = wp_remote_get('https://api.mollie.com/v2/payments/' . $_POST['id'], $args);
        $payment_json = json_decode(wp_remote_retrieve_body($payment_response));

        $customer_response = wp_remote_get('https://api.mollie.com/v2/customers/' . $payment_json->customerId, $args);        $customer_json = json_decode(wp_remote_retrieve_body($customer_response));

        wp_mail(get_option('admin_email'), 'Donatie aan Open State Foundation', "Donatie aan Open State Foundation\n\nStatus: $payment_json->status\nEenmalig/periodiek: $payment_json->sequenceType\nBedrag (€): " . $payment_json->amount->value . "\nBericht: $payment_json->description\nNaam: " . $customer_json->name . "\nE-mail: " . $customer_json->email . "\nPayment ID: $payment_json->id");
    }

    return $do_parse;
}, 30, 2);
