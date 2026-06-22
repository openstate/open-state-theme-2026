<?php

use function Roots\view;

add_action('init', function () {
  add_shortcode('button', function ($atts) {
    $atts = shortcode_atts([
      'variant' => '',
      'text' => '',
      'class' => '',
      'type' => '',
      'icon' => '',
      'onclick' => '',
      'arialabel' => '',
    ], $atts, 'button');

    return view('components.button', $atts)->render();
  });

  add_shortcode('popup', function ($atts, $content = null) {
    $atts = shortcode_atts([
      'title' => '',
      'id' => '',
      'class' => '',
    ], $atts, 'button');

    return view('components.popup', array_merge($atts, [
      'content' => do_shortcode($content),
    ]))->render();
  });
});
