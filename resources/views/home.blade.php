@extends('layouts.app')

@section('content')
  <?php // Hero: Tagline and uitgelicht ?>
  <div class="bg-off-white-50 pt-[52px] md:pt-[84px] pb-[100px]">
    <div class="mx-auto text-center max-w-[336px] md:max-w-[560px] xl:max-w-[640px]">
      <h1 class="font-serif text-[2.25rem] leading-[40px] tracking-[-0.4px] mb-[16px] md:text-[3.25rem] md:leading-[56px] md:tracking-[-0.8px] md:mb-[16px] xl:text-[4rem] xl:leading-[68px] xl:tracking-[-1px] xl:mb-[24px]">Zonder transparantie geen democratie</h1>
      <p class="mb-[40px] md:mb-[56px] xl:mb-[64px]">In a strong democracy, the government has no secrets. We believe in an open government where citizens, journalists, and civil servants have access to information they can trust and build upon.</p>
    </div>

    <div class="px-[16px]">
      <div class="flex md:grid md:grid-cols-12 gap-[16px] px-[24px] snap-x snap-mandatory items-stretch overflow-x-scroll">
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
                  <a class="snap-start w-full shrink-0 md:col-span-3 xl:col-span-2 xl:col-start-3 no-underline" href="<? the_permalink(); ?>">
                    <div class="bg-blue-200 hover:bg-purple-700 text-white hover:text-pink transition-colors min-h-[186px] h-fit rounded-[8px] p-[16px]">
                        <p class="font-serif text-[1.5rem]/[1.75rem]"><? the_title(); ?></p>
                    </div>
                  </a>
                <? elseif($the_query->current_post == 1): ?>
                  <a class="snap-start w-full shrink-0 md:col-span-6 xl:col-span-4 bg-purple-800 hover:bg-purple-700 text-white hover:text-pink transition-colors rounded-[8px] overflow-hidden no-underline" href="<? the_permalink(); ?>">
                    <? the_post_thumbnail('col-7-thumbnail', array('class' => 'img-fluid image-cover')); ?>
                    <div class="px-[28px] pt-[20px] pb-[28px]">
                      <p class="font-serif text-[1.5rem]/[1.75rem] mb-[4px]"><? the_title(); ?></p>
                      <p class="mb-0 text-[0.875rem]/[1.375rem]"><? echo get_field('project_samenvatting', get_the_id()) ?></p>
                    </div>
                  </a>
                <? elseif($the_query->current_post == 2): ?>
                  <a class="snap-start w-full shrink-0 md:col-span-3 xl:col-span-2 self-end no-underline" href="<? the_permalink(); ?>">
                    <div class="flex bg-off-white-400 hover:bg-purple-700 text-white hover:text-pink transition-colors min-h-[186px] h-fit rounded-[8px] p-[16px]">
                        <p class="mb-0 mt-auto font-serif text-[1.5rem]/[1.75rem]"><? the_title(); ?></p>
                    </div>
                  </a>
                <? endif; ?>
              <? endwhile;
            endif;
            wp_reset_query();
          ?>
      </div>
    </div>
  </div>

  <?php // Nieuws ?>
  <div class="px-[16px] md:px-[24px] mb-[64px] md:mb-[100px] xl:mb-[120px]">
    <h2 class="mb-[24px] md:mb-[32px]">Nieuws</h2>
    @if (! have_posts())
      <x-alert type="warning">
        Sorry, geen resultaten gevonden.
      </x-alert>

      {!! get_search_form(false) !!}
    @endif

    <div class="flex xl:grid xl:grid-cols-12 gap-x-[16px] snap-x snap-mandatory items-stretch overflow-x-scroll max-xl:px-[24px]">
      @while(have_posts()) @php(the_post())
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
      @endwhile
    </div>

    <x-button class="mt-[24px] ml-auto" href="/nl/nieuwsarchief/" text="Nieuwsarchief" />
  </div>

  @include('partials.newsletter')
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
