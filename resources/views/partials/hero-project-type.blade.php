@php
  $type = '';
  $post_or_page = get_post_type();
  if ($post_or_page == 'post') {
    $type = 'nieuwsbericht';
    if (get_field('agenda_evenement')) {
      $type = 'evenement';
    }
  } else {
    $type = 'project';
  }
@endphp
@if ($type)
  <p class='mb-0 font-medium text-[0.875rem]/[1.375rem]'>Bekijk {{ $type }}</p>
@endif
