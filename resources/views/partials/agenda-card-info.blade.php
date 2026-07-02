<?
  $timestamp = get_field('agenda_tijdstip', get_the_id());
  if ($timestamp) {
    $unixtimestamp = strtotime($timestamp);
    $formatted_date = date_i18n('l j F Y, H:i', $unixtimestamp);
  }
?>
@if ($timestamp)
<time class="text-[0.875rem]/[1.375rem] font-medium" datetime="{{ str_replace(' ', 'T', get_field('agenda_tijdstip', get_the_id())) }}">
  {{ $formatted_date }}
</time>
@endif

<p class="mb-0 text-[0.875rem]/[1.375rem] font-medium"><? echo get_field('agenda_locatie', get_the_id()) ?></p>
