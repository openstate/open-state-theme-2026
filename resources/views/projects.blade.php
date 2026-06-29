{{--
  Template Name: Projects, Tools & Data Template
--}}

@extends('layouts.app')

@section('content')
  <?
    wp_reset_query();
    $args = array(
      'numberposts' => -1,
      'post_type' => 'page',
      'posts_per_page' => -1,
      'post_parent__in' => Array(9113, 9116, 9118, 9120, 9122),
      'meta_key' => 'project_afgerond',
      'orderby' => array(
        'meta_value' => 'asc',
        'modified' => 'desc'
      )
    );
    $total_count_query = new WP_Query($args);
    $args['facetwp'] = true;
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

    <!-- div class="bg-grijsblauw projects-filter d-inline-block">
      <span class="text-white"><b>Filter</b></span>
      <i class="fas fa-filter text-white float-right filter-icon"></i>
      <div id="remove-filters">
        <a class="float-right" href="#" onclick="FWP.reset(); event.preventDefault();">
          <? _e("
            <!--:nl-->
              filters wissen
            <!--:--><!--:en-->
              remove filters
            <!--:-->
          ") ?>
        </a>
      </div>
      <? echo facetwp_display('facet', 'projects_search'); ?>
      <? echo facetwp_display('facet', 'projects'); ?>
    </div --!>

    {{-- show completed projects beneath the 'completed projects' line --}}
    <? $completed_projects = false ?>
    <h2 class="sr-only">Actieve projecten</h2>

    <div class="mx-auto w-full max-w-[1920px] grid grid-cols-12 gap-x-[16px] gap-y-[12px] md:gap-y-[48px] xl:gap-y-[100px] mb-[120px]">
      <!--div id="no-results" class="col-12 col-sm-6 col-md-4 offset-md-4 offset-sm-6">
        Er zijn geen projecten gevonden. Verwijder één of meerdere filters/zoektermen of <a href='#' onclick='FWP.reset(); event.preventDefault();'>wis alle filters</a>.
      </div--!>

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
@endsection
