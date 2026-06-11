@extends('layouts.app')

@section('content')
  <div class="bg-off-white-50 pt-[52px] md:pt-[84px] pb-[100px]">
    <div class="mx-auto text-center max-w-[336px] md:max-w-[560px] xl:max-w-[640px]">
      <h1 class="font-serif text-[2.25rem] leading-[40px] tracking-[-0.4px] mb-[16px] md:text-[3.25rem] md:leading-[56px] md:tracking-[-0.8px] md:mb-[16px] xl:text-[4rem] xl:leading-[68px] xl:tracking-[-1px] xl:mb-[24px]">Zonder transparantie geen democratie</h1>
      <p>In a strong democracy, the government has no secrets. We believe in an open government where citizens, journalists, and civil servants have access to information they can trust and build upon.</p>
    </div>

    <div class="grid grid-cols-12">
      <?=
        wp_reset_query();
        $args = array(
          'numberposts' => -1,
          'post_type' => array('post', 'page'),
          'posts_per_page' => 3,
          'meta_query' => array(
            array(
              'key' => 'uitgelicht',
              'compare' => '=',
              'value' => '1'
            )
          ),
          'meta_key' => 'uitgelicht_volgorde',
          'orderby' => 'meta_value',
          'order' => 'asc'
        );
        $the_query = new WP_Query($args);

          if($the_query->have_posts()):
            while($the_query->have_posts()) : $the_query->the_post(); ?>
              <? if($the_query->current_post == 0): ?>
                <div class="col-span-2 col-start-3 bg-blue-200 w-[186px] min-h-[186px] h-fit rounded-[8px] p-[16px]">
                  <x-tag text="{{ get_post_type() === 'post' ? 'Nieuws' : 'test' }}"/>
                  <div class=" text-white font-serif text-[24px] mt-[1rem]">
                    <a class="!no-underline" href="<? the_permalink(); ?>"><? the_title(); ?></a>
                  </div>
                </div>
              <? elseif($the_query->current_post == 1): ?>
                <div class="col-span-4">
                  <a href="<? the_permalink(); ?>">
                    <div class="overlay-container">
                      <? the_post_thumbnail('col-4-thumbnail', array('class' => 'img-fluid image-cover')); ?>
                      <div class="overlay overlay-paars d-flex"></div>
                    </div>
                  </a>
                  <div class="bg-grijs-15 uitgelicht-item">
                    <a class="!no-underline" href="<? the_permalink(); ?>"><? the_title(); ?></a>
                    <p class="mb-0"><? echo get_field('project_samenvatting', get_the_id()) ?></p>
                  </div>
                </div>
              <? elseif($the_query->current_post == 2): ?>
                <div class="col-span-2">
                  <div class="bg-grijs-15 uitgelicht-item">
                    <a class="!no-underline" href="<? the_permalink(); ?>"><? the_title(); ?></a>
                    <p class="mb-0"><? echo get_field('project_samenvatting', get_the_id()) ?></p>
                  </div>
                </div>
              <? endif; ?>
            <? endwhile;
          endif;
          wp_reset_query();
        ?>
    </div>
  </div>

  @if (! have_posts())
    <x-alert type="warning">
      Sorry, geen resultaten gevonden.
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
