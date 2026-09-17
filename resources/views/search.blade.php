@extends('layouts.app')

@section('content')
  <div class="flex justify-center mt-[80px] xl:mt-[120px] px-[16px]">
    {!! get_search_form(false) !!}
  </div>

  <div class="flex justify-center px-[16px]">
    <h1 class="mt-[48px] text-[1.75rem]/[2rem] tracking-[-0.0125rem] md:text-[2.75rem]/[3rem] md:tracking-[-0.0375rem] xl:text-[3.25rem]/[3.5rem] xl:tracking-[-0.05rem]">Zoekresultaten</h1>
  </div>

  @if (! have_posts())
    <div class="flex mt-[32px] mb-[100px] xl:mb-[120px] px-[16px]">
      <p class="mx-auto">Geen zoekresultaten gevonden.</p>
    </div>
  @endif

  @php
    global $wp_query;

    $big     = 999999999;
    $paged   = max(1, (int) get_query_var('paged'));
    $perPage = (int) get_query_var('posts_per_page');
    $postMin = $perPage * ($paged - 1) + 1;
    $postMax = $perPage * ($paged - 1) + $wp_query->post_count;

    $links = paginate_links([
      'base'     => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      'format'   => '',
      'current'  => $paged,
      'total'    => $wp_query->max_num_pages,
      'show_all' => true,
      'add_args' => false,
    ]);
  @endphp

  @if ($wp_query->found_posts)
    <div class="text-center mt-[32px] xl:mt-[40px] mb-[64px] xl:mb-[80px] px-[16px]">
      @if ($links)
        {!! $links !!}
      @endif

      <div class="pagination-string font-medium mt-[16px]">
        zoekresultaten {{ $postMin }}-{{ $postMax }} van in totaal {{ $wp_query->found_posts }}
      </div>
    </div>
  @endif

  <div class="px-[16px]">
    @while(have_posts()) @php(the_post())
      @include('partials.content-search')
    @endwhile
  </div>

  @if ($wp_query->found_posts)
    <div class="text-center mt-[64px] mb-[100px] xl:mt-[80px] xl:mb-[120px] px-[16px]">
      @if ($links)
        {!! $links !!}
      @endif

      <div class="pagination-string font-medium mt-[16px]">
        zoekresultaten {{ $postMin }}-{{ $postMax }} van in totaal {{ $wp_query->found_posts }}
      </div>
    </div>
  @endif
@endsection
