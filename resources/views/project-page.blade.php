{{--
  Template Name: Project Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="bg-purple-800 text-white px-[16px] md:px-[24px] pt-[98px] md:pt-[110px]">
      <div class="mx-auto w-full max-w-[1920px] md:grid md:grid-cols-12 gap-x-[50px] ">
        <div class="md:col-span-9 md:col-start-4 pb-[80px] xl:pb-[120px]">
          <div class="mb-[16px] md:mb-[24px] xl:mb-[40px]">
            <h1 class="text-[1.75rem]/[2rem] tracking-[-0.0125rem] md:text-[2.75rem]/[3rem] md:tracking-[-0.0375rem] xl:text-[3.25rem]/[3.5rem] xl:tracking-[-0.8px]">{!! get_the_title() !!}</h1>
          </div>
          <div class="grid">
            {!! the_post_thumbnail('full', array('class' => 'md:order-3 rounded-lg')) !!}
            <p class="md:order-1 max-md:mt-[16px]">
              <? echo get_field('project_samenvatting', get_the_id()) ?>
            </p>
            @if ($project_url)
            <x-button class="md:order-2 md:mb-[40px] xl:mb-[64px]" variant="secondary" text="Bezoek {{ preg_replace('#^https?://(.*)/?$#', '$1', rtrim($project_url, '/')) }}" href="{{ $project_url }}" />
            @endif
          </div>
        </div>
      </div>
    </div>

    <div class="px-[16px] md:px-[24px] mt-[40px] mb-[80px] md:mt-[48px] xl:mt-[64px] xl:mb-[128px]">
      <div class="mx-auto w-full max-w-[1920px] md:grid md:grid-cols-12 gap-x-[32px]">
        <?
          wp_reset_query();

          $categories = get_the_category();
          if (!empty( $categories)) {
            $cat = esc_html($categories[0]->term_id);
          }

          $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'cat' => $cat,
          );

          $the_query = new WP_Query($args);
        ?>
        @if ($the_query->have_posts())
        <?php // xl: sidebar ?>
        <aside aria-labelledby="nieuwsberichten" class="max-xl:hidden xl:col-span-3 mr-[70px]">
          <h2 id="nieuwsberichten" class="font-mono font-medium text-[0.75rem]/[1rem] mt-0">Nieuwsberichten</h2>
          @include('partials.project-page-news')
        </aside>

        <?php // up till xl: floating button + dialog/popup ?>
        <x-button type="button" icon="plus" text="Nieuwsberichten" class="xl:hidden fixed bottom-[32px] left-1/2 -translate-x-1/2 z-30" onclick="document.getElementById('nieuwsberichten-dialog').showModal()" arialabel="dialog" />

        <x-popup title="Nieuwsberichten" id="nieuwsberichten-dialog">
          @include('partials.project-page-news')
        </x-popup>
        @endif

        <article class="md:col-span-8 md:col-start-4 xl:col-span-6 xl:col-start-4">
          @includeFirst(['partials.content-page', 'partials.content'])

          @if ($project_url)
          <x-button class="mt-[48px]" text="Bezoek {{ preg_replace('#^https?://#', '', rtrim($project_url, '/')) }}" href="{{ $project_url }}" />
          @endif
        </article>
      </div>
    </div>
  @endwhile
@endsection
