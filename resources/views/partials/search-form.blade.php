@php($id = wp_unique_id('search-form-'))

<form role="search" method="get" class="flex items-center gap-2" action="{{ home_url('/') }}">
  <label for="{{ $id }}" class="sr-only">
    {{ $args['aria_label'] ?? __('Zoek naar:', 'sage') }}
  </label>

  <input
    id="{{ $id }}"
    type="search"
    name="s"
    value="{{ get_search_query() }}"
    placeholder="{{ __('Zoeken…', 'sage') }}"
    class="w-full bg-off-white-200 rounded-lg p-[12px] mr-[8px]"
    required
  >

  <x-button-small variant="secondary" type="submit" class="align-top" />
</form>
