{{--
  Template Name: News Archive Template
--}}

@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="mt-[80px] xl:mt-[120px]">
      <h1 class="text-[1.75rem]/[2rem] tracking-[-0.0125rem] md:text-[2.75rem]/[3rem] md:tracking-[-0.0375rem] xl:text-[3.25rem]/[3.5rem] xl:tracking-[-0.8px]">{!! get_the_title() !!}</h1>
    </div>
  </div>

  <?
    wp_reset_query();
    $posts_per_page = 50;
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => $posts_per_page,
      'paged' => $paged,
    );
    $the_query = new WP_Query($args);

  ?>

  <div class="text-center mt-[32px] xl:mt-[40px] mb-[64px] xl:mb-[80px]">
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
      $pagination_string = '<br><div class="pagination-string font-medium mt-[16px]">nieuwsberichten ' .  $post_min  . '-' . $post_max . ' van in totaal ' . $the_query->found_posts . '</div>';
      echo $pagination_string;
    ?>
  </div>

  <div class="px-[16px]">
  @if ($the_query->have_posts())
    @while ($the_query->have_posts())
      <? $the_query->the_post() ?>
        @include('partials.news-archive-post')
    @endwhile
  @endif
  </div>

  <div class="text-center mt-[64px] mb-[100px] xl:mt-[80px] xl:mb-[120px]">
    <?
      echo $paginated_links;
      echo $pagination_string;
    ?>
  </div>

  <? wp_reset_query(); ?>
@endsection
