<?php

/**
 * Theme filters.
 */

namespace App;

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
