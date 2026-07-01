@extends('layouts.app')

@section('content')
  <?php // Hero: Tagline and uitgelicht ?>
  <div class="bg-off-white-50 pt-[52px] md:pt-[84px] pb-[100px]">
    <div class="mx-auto w-full max-w-[1920px]">
      <div class="mx-auto text-center max-w-[336px] md:max-w-[560px] xl:max-w-[640px]">
        <h1 class="font-serif text-[2.25rem] leading-[40px] tracking-[-0.4px] mb-[16px] md:text-[3.25rem] md:leading-[56px] md:tracking-[-0.8px] md:mb-[16px] xl:text-[4rem] xl:leading-[68px] xl:tracking-[-1px] xl:mb-[24px]">Zonder transparantie geen democratie</h1>
        <p class="mb-[40px] md:mb-[56px] xl:mb-[64px]">In een sterke democratie heeft de overheid geen geheimen. Wij geloven in een open overheid waarbij burgers, journalisten en ambtenaren toegang hebben tot informatie om op te kunnen vertrouwen en op te kunnen bouwen.</p>
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
                    <a class="snap-start w-full shrink-0 self-start md:col-span-3 xl:col-span-2 xl:col-start-3 no-underline" href="<? the_permalink(); ?>">
                      <div class="bg-blue-200 hover:bg-purple-700 text-white hover:text-pink transition-colors min-h-[186px] h-fit rounded-lg p-[16px]">
                        <p class="font-serif text-[1.5rem]/[1.75rem]"><? the_title(); ?></p>
                      </div>
                    </a>
                  <? elseif($the_query->current_post == 1): ?>
                    <a class="snap-start w-full shrink-0 md:col-span-6 xl:col-span-4 bg-purple-800 hover:bg-purple-700 text-white hover:text-pink transition-colors rounded-lg overflow-hidden no-underline" href="<? the_permalink(); ?>">
                      <? the_post_thumbnail('col-7-thumbnail', array('class' => '')); ?>
                      <div class="px-[28px] pt-[20px] pb-[28px]">
                        <p class="font-serif text-[1.5rem]/[1.75rem] mb-[4px]"><? the_title(); ?></p>
                        <p class="mb-0 text-[0.875rem]/[1.375rem]"><? echo get_field('project_samenvatting', get_the_id()) ?></p>
                      </div>
                    </a>
                  <? elseif($the_query->current_post == 2): ?>
                    <a class="snap-start w-full shrink-0 md:col-span-3 xl:col-span-2 self-end no-underline" href="<? the_permalink(); ?>">
                      <div class="flex bg-off-white-400 hover:bg-purple-700 text-white hover:text-pink transition-colors min-h-[186px] h-fit rounded-lg p-[16px]">
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
  </div>

  <?php // Nieuws ?>
  <div class="px-[16px] md:px-[24px] mb-[96px] xl:mb-[128px]">
    <div class="mx-auto w-full max-w-[1920px]">
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

      <x-button class="mt-[40px] md:mt-[56px] xl:mt-[24px] mx-auto xl:mx-0 xl:ml-auto" href="/nieuwsarchief/" text="Nieuwsarchief" />
    </div>
  </div>

  <?php // Onze projecten ?>
  <div class="px-[16px] md:px-[24px] mb-[64px] md:mb-[80px] xl:mb-[128px]">
    <div class="mx-auto w-full max-w-[1920px]">
      <h2 class="mb-[24px] md:mb-[32px]">Onze projecten</h2>

      <?
        wp_reset_query();
        $args = array(
          'post_type' => 'page',
          'posts_per_page' => 4,
          'meta_query' => array(
            array(
              'key' => 'toon_in_onze_projecten',
              'compare' => '=',
              'value' => '1'
            )
          ),
          'meta_key' => 'toon_in_onze_projecten_volgorde',
          'orderby' => 'meta_value',
          'order' => 'asc'
        );
        $the_query = new WP_Query($args);
      ?>
      @if ($the_query->have_posts())
        <div class="mx-auto w-full max-w-[1920px] grid grid-cols-12 gap-x-[16px] gap-y-[12px] md:gap-y-[56px] xl:gap-y-[64px] mb-[40px] md:mb-[56px] xl:mb-[24px]">
          <? $i = 0; ?>
          @while ($the_query->have_posts())
            <?
              # On each row the cards have different col-spans so use modulo 2
              # for md+
              $mod_md = $i % 2;

              # On md the col-span order also alters every row
              $cols = match($mod_md) {
                // md: modulo 2
                0 => $row % 2 === 0 ? 'md:col-span-4' : 'md:col-span-8',
                1 => $row % 2 === 1 ? 'md:col-span-8' : 'md:col-span-4',
              };
            ?>

            <? $the_query->the_post() ?>

            <div class="col-span-12 {{ $cols }}">
              @include('partials.content-projects')
            </div>
            <? $i++; ?>
            <? $row = ceil($i / 2); ?>
          @endwhile
        </div>
        <x-button class="mx-auto xl:mx-0 xl:ml-auto" href="/projecten-tools-data/" text="Bekijk alle projecten" />
      @endif
      <? wp_reset_query() ?>

    </div>
  </div>

  <?php // Doneer ?>
  <div class="md:grid md:grid-cols-12 bg-cover bg-center bg-no-repeat h-[574px] md:h-[608px] xl:h-[664px] px-[16px] md:px-[24px]" style="background-image: url('{{ Vite::asset('resources/images/pixel_stretch.webp')}}')">
    <div class="md:col-span-8 md:col-start-3 relative z-10 flex flex-col items-center">
      <h2 class="mt-[48px] md:mt-[80px] mb-[16px] md:mb-[24px] xl:mt-[120px] text-[1.75rem]/[2rem] md:text-[2.75rem]/[3rem] xl:text-[3.25rem]/[3.5rem] tracking-[-0.0125rem] md:tracking-[-0.0375rem] xl:tracking-[-0.05rem]">Ja, ik wil een sterke democratie!</h2>
      <p class="mb-[40px]">Wij zetten ons in voor een sterke democratie door transparantie. Dit kunnen we niet zonder jouw hulp.</p>
      <x-button href="/doneren/" text="Doneer" />
    </div>
  </div>

  <?php // Nieuwsbrief ?>
  @include('partials.newsletter')
@endsection
