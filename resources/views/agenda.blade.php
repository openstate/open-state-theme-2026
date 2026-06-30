{{--
  Template Name: Agenda Template
--}}

@extends('layouts.app')

@section('content')
  <div class="text-center mt-[100px] xl:mt-[120px] mb-[148px] xl:mb-[168px]">
    <h1 class="text-[2.25rem]/[2.5rem] tracking-[-0.025rem] md:text-[3.25rem]/[3.5rem] md:tracking-[-0.05rem] xl:text-[4rem]/[4.25rem] xl:tracking-[-0.0625rem]">{!! get_the_title() !!}</h1>
  </div>

  <?
    wp_reset_query();
    $posts_per_page = 50;
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => $posts_per_page,
      'paged' => $paged,
      'meta_query' => array(
        array(
          'key' => 'agenda_evenement',
          'compare' => '=',
          'value' => '1'
        )
      ),
      'order' => 'desc'
    );
    $the_query = new WP_Query($args);
  ?>

  @if ($the_query->found_posts > $posts_per_page)
  <div class="text-center mb-[40px]">
    <?
      $big = 999999999; // need an unlikely integer
      $paginate_args = array(
          'base' => str_replace($big, '%#%', esc_url(get_pagenum_link( $big))),
          'format' => '?paged=%#%',
          'current' => max(1, get_query_var('paged')),
          'total' => $the_query->max_num_pages,
          'show_all' => true,
      );
      $paginated_links = paginate_links($paginate_args);
      echo $paginated_links;

      $post_min = $posts_per_page * ($paged - 1) + 1;
      $post_max = $posts_per_page * ($paged - 1) + $the_query->post_count;
      $pagination_string = '<div class="pagination-string font-medium">evenementen ' .  $post_min  . '-' . $post_max . ' van in totaal ' . $the_query->found_posts . '</div>';
      echo $pagination_string;
    ?>
  </div >
  @endif

  <div class="px-[16px]">
  @if ($the_query->have_posts())
    @php $new_separator_shown = false; @endphp
    @php $old_separator_shown = false; @endphp
    @while ($the_query->have_posts())
      <? $the_query->the_post() ?>
        @php
          $tijdstip = get_field('agenda_tijdstip', get_the_id());
          $tijdstip_ts = $tijdstip ? strtotime($tijdstip) : false;
          $is_past = $tijdstip_ts && $tijdstip_ts < current_time('timestamp');
        @endphp

        @if (!$is_past && !$new_separator_shown)
          <div class="sr-only md:w-[688px] mx-auto">
            <h2>Aankomende evenementen</h2>
          </div>
          @php $new_separator_shown = true; @endphp
        @endif

        @if ($is_past && !$old_separator_shown)
          <div class="md:w-[688px] mx-auto">
            <hr class="mx-auto mt-[40px] w-full max-w-[1920px] border-purple-800/10">
            <h2>Oude evenementen</h2>
          </div>
          @php $old_separator_shown = true; @endphp
        @endif

        @include('partials.agenda-archive-post')
    @endwhile
  @endif
  </div>

  <div class="text-center mt-[40px] mb-[100px] xl:mb-[120px]">
    <?
      echo $paginated_links;
      echo $pagination_string;
    ?>
  </div>

  <? wp_reset_query(); ?>
@endsection
