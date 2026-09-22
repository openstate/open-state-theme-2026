@php
  $badge = '';
  $post_or_page = get_post_type();
  if ($post_or_page == 'post') {
    $categories = wp_get_post_categories(get_the_ID(), ['fields' => 'all']);
    $badge = $categories ? apply_filters('single_cat_title', $categories[0]->name) : '';
  } else {
    $parent_id = wp_get_post_parent_id(get_the_id());
    if ($parent_id) {
      $parent = get_post($parent_id);
      $badge = $parent->post_title;
    }
  }
@endphp
@if ($badge)
  <x-badge text="{!! $badge !!}" variant="quarternary" class="self-start" />
@endif
