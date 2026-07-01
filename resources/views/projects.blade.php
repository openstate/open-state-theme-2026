{{--
  Template Name: Projects, Tools & Data Template
--}}

@extends('layouts.app')

@section('content')
  <?
    wp_reset_query();

    // Get the selected parents from query parameter, default to all parents
    $selected_parents = isset($_GET['parents']) ? array_map('intval', (array)$_GET['parents']) : array();
    $parent_ids = Array(9113, 9116, 9118, 9120, 9122);

    // If specific parents are selected, filter by those, otherwise show all
    $filter_parents = !empty($selected_parents) ? array_intersect($selected_parents, $parent_ids) : $parent_ids;
    if (empty($filter_parents)) {
      $filter_parents = $parent_ids;
    }

    $args = array(
      'numberposts' => -1,
      'post_type' => 'page',
      'posts_per_page' => -1,
      'post_parent__in' => $filter_parents,
      'meta_key' => 'project_afgerond',
      'orderby' => array(
        'meta_value' => 'asc',
        'modified' => 'desc'
      )
    );
    $the_query = new WP_Query($args);
  ?>

  <div class="px-[16px] md:px-[24px]">
    <div class="mx-auto w-full max-w-[1920px] grid grid-cols-12 gap-y-[16px] mt-[88px] xl:mt-[124px] mb-[64px] md:mb-[84px] xl:mb-[152px]">
      <div class="col-span-12 md:col-span-6">
        <h1 class="text-[1.75rem]/[2rem] tracking-[-0.0125rem] md:text-[2.75rem]/[3rem] md:tracking-[-0.0375rem] xl:text-[3.25rem]/[3.5rem] xl:tracking-[-0.8px]">{!! get_the_title() !!}</h1>
      </div>
      <div class="col-span-12 md:col-span-6">
        <p class="mb-0 md:text-[1rem]/[1.5rem] xl:text-[1.125rem]/[1.75rem] tracking-[-0.00625rem]">Elk Open State project ontsluit overheidsinformatie als open data en zorgt voor meer transparantie in sectoren zoals lobby, financiën en verkiezingen.</p>
      </div>
    </div>

    {{-- Parent project filter with checkboxes --}}
    <div class="mx-auto w-full max-w-[1920px] mb-[44px]">
      <form method="get" class="space-y-[12px]">
        <p class="block font-mono font-medium text-pink text-[0.8125rem]/[1.125rem]">Filter op dossier:</p>
        <div class="flex flex-wrap gap-[8px]">
          @php
            $parents = get_pages(['include' => Array(9113, 9116, 9118, 9120, 9122)]);
            foreach ($parents as $parent) {
              $is_checked = in_array($parent->ID, $selected_parents);
              $checkbox_id = 'parent-' . $parent->ID;
          @endphp
              <label class="bg-off-white-100 font-mono text-[0.875rem]/[1.375rem] text-off-white-400 flex items-center gap-[8px] px-[12px] py-[8px] rounded-lg cursor-pointer hover:!bg-purple-400 hover:text-white has-checked:bg-purple-600 has-checked:text-white transition-colors">
                <input
                  type="checkbox"
                  id="{{ $checkbox_id }}"
                  name="parents[]"
                  value="{{ $parent->ID }}"
                  {{ $is_checked ? 'checked' : '' }}
                  class="sr-only"
                  onchange="this.form.submit()"
                >
                <span>{{ $parent->post_title }}</span>
              </label>
          @php
            }
          @endphp
          @if (!empty($selected_parents))
            <a href="<?php echo remove_query_arg('parents'); ?>" class="self-center font-mono text-[0.875rem]/[1.375rem]">
              Filters wissen
            </a>
          @endif
        </div>
      </form>
    </div>

    {{-- show completed projects beneath the 'completed projects' line --}}
    <? $completed_projects = false ?>
    <h2 class="sr-only">Actieve projecten</h2>

    <div class="mx-auto w-full max-w-[1920px] grid grid-cols-12 gap-x-[16px] gap-y-[12px] md:gap-y-[48px] xl:gap-y-[100px] mb-[120px]">
      @if ($the_query->have_posts())
        <? $i = 0; ?>
        @while ($the_query->have_posts())
          @php
            # On each row the cards have different col-spans so use modulo 2
            # for md and modulo 3 for xl to account for this
            $mod_md = $i % 2;
            $mod_xl = $i % 3;

            # On md the col-span order also alters every row
            $cols = match($mod_md) {
              // md: modulo 2
              0 => $row % 2 === 0 ? 'md:col-span-7' : 'md:col-span-5',
              1 => $row % 2 === 1 ? 'md:col-span-5' : 'md:col-span-7',
            };

            $cols_xl = match($mod_xl) {
              0 => 'xl:col-span-5',
              1 => 'xl:col-span-3',
              2 => 'xl:col-span-4',
            };
          @endphp

          <? $the_query->the_post() ?>
          @if (get_field('project_afgerond', get_the_id()) == true && $completed_projects == false)
            <? $completed_projects = true ?>
            </div>
            <hr class="mx-auto w-full max-w-[1920px] border-purple-800/10">
            <h2 class="mx-auto w-full max-w-[1920px] text-[1.625rem]/[1.875rem] md:text-[1.75rem]/[2.125rem] xl:text-[2.125rem]/[2.625rem] mb-[32px] md:mb-[40px] xl:mb-[48px]">Afgeronde projecten</h2>
            <div class="mx-auto w-full max-w-[1920px] grid grid-cols-12 gap-x-[16px] gap-y-[12px] md:gap-y-[48px] xl:gap-y-[100px] mb-[120px]">
          @endif

          <div class="col-span-12 {{ $cols }} {{ $cols_xl }}">
            @include('partials.content-projects')
          </div>
          <? $i++; ?>
          <? $row = ceil($i / 2); ?>
        @endwhile
      @endif
      <? wp_reset_query() ?>
    </div>
  </div>

<script>
document.getElementById('parent-filter').addEventListener('change', function() {
  const parentId = this.value;
  if (parentId) {
    window.location.href = get_page_link(parentId);
  } else {
    // Reset to show all
    window.location.href = window.location.pathname;
  }
});
</script>
@endsection
