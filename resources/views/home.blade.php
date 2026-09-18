@extends('layouts.app')

@section('content')
  <?php // Hero: Tagline and uitgelicht ?>
  <div class="bg-off-white-50 pt-[52px] md:pt-[84px] pb-[100px]">
    <div class="mx-auto w-full max-w-[1920px]">
      <div class="mx-auto text-center max-w-[336px] md:max-w-[560px] xl:max-w-[640px]">
        <h1 class="font-serif text-[2.25rem]/[2.5rem] tracking-[-0.025rem] mb-[16px] md:text-[3.25rem]/[3.5rem] md:tracking-[-0.05rem] md:mb-[16px] xl:text-[4rem]/[4.25rem] xl:tracking-[-0.0625rem] xl:mb-[24px]">Zonder transparantie geen democratie</h1>
        <p class="mb-[40px] md:mb-[56px] xl:mb-[64px]">In een sterke democratie heeft de overheid geen geheimen. Wij geloven in een open overheid waarbij burgers, journalisten en ambtenaren toegang hebben tot informatie om op te kunnen vertrouwen en op te kunnen bouwen.</p>
      </div>

      <div class="px-[16px]">
      <?=
        wp_reset_query();
        $args = array(
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

        if($the_query->have_posts()): ?>
        <?php // Hero: uitgelicht for xl+ ?>
        <div class="hidden xl:flex xl:justify-center gap-[16px] px-[24px] max-md:snap-x max-md:snap-mandatory max-md:items-stretch max-md:overflow-x-scroll">
          <? while($the_query->have_posts()) : $the_query->the_post(); ?>
            <? if($the_query->current_post == 0): ?>
              <a class="group max-md:w-full shrink-0 snap-start self-start rounded-lg" href="<? the_permalink(); ?>">
                <div class="flex flex-col max-md:h-[180px] xl:size-[218px] bg-blue-200 group-hocus:bg-purple-700 text-white group-hocus:text-pink transition-colors rounded-lg p-[16px]">
                  @include('partials/hero-badge-white')
                  <p class="my-auto font-serif text-[1.5rem]/[1.75rem]"><? the_title(); ?></p>
                  <span class="shrink-0 iconify size-[20px] mdi--arrow-right mt-auto ml-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
                </div>
              </a>
            <? elseif($the_query->current_post == 1): ?>
              <a class="group max-md:w-full shrink-0 snap-start max-md:size-[360px] xl:size-[452px] bg-purple-800 hocus:bg-purple-700 text-white hocus:text-pink transition-colors rounded-lg overflow-hidden" href="<? the_permalink(); ?>">
                <div class="relative">
                  <? the_post_thumbnail('col-7-thumbnail', array('class' => 'object-cover max-md:h-[180px] xl:h-[280px]')); ?>
                  @include('partials/hero-badge-purple')
                </div>
                <div class="flex flex-col h-[172px] px-[28px] pt-[20px] pb-[28px]">
                  <p class="font-serif text-[1.5rem]/[1.75rem] mb-[4px]"><? the_title(); ?></p>
                  <div class="flex mt-auto">
                    @include('partials/hero-project-type')
                    <span class="shrink-0 iconify size-[20px] mdi--arrow-right ml-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
                  </div>
                </div>
              </a>
            <? elseif($the_query->current_post == 2): ?>
              <a class="group max-md:w-full shrink-0 snap-start self-end rounded-lg" href="<? the_permalink(); ?>">
                <div class="flex flex-col max-md:h-[180px] xl:size-[218px] flex bg-off-white-400 group-hocus:bg-purple-700 text-white group-hocus:text-pink transition-colors rounded-lg p-[16px]">
                  <div class="flex justify-between gap-x-[16px]">
                    @include('partials/hero-badge-white')
                    <span class="shrink-0 iconify size-[20px] mdi--arrow-right mb-auto ml-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
                  </div>
                  <p class="mb-0 mt-auto font-serif text-[1.5rem]/[1.75rem]"><? the_title(); ?></p>
                </div>
              </a>
            <? endif; ?>
          <? endwhile; ?>
        </div>

        <?php // Hero: uitgelicht for md ?>
        <div class="hidden md:grid xl:hidden md:grid-cols-12 gap-[16px] px-[24px]">
          <div class="md:col-span-4 md:grid md:grid-cols-12 gap-[16px]">
            <?
            global $post;
            $post = $the_query->posts[0];
            setup_postdata($post);
            ?>
            <a class="group md:col-span-12 rounded-lg" href="<? the_permalink() ?>">
              <div class="flex flex-col md:h-[229.5px] bg-blue-200 group-hocus:bg-purple-700 text-white group-hocus:text-pink transition-colors rounded-lg p-[16px]">
                @include('partials/hero-badge-white')
                <p class="my-auto font-serif text-[1.5rem]/[1.75rem]"><? the_title(); ?></p>
                <span class="shrink-0 iconify size-[20px] mdi--arrow-right mt-auto ml-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
              </div>
            </a>
            <? wp_reset_postdata(); ?>
            <?
            global $post;
            $post = $the_query->posts[2];
            setup_postdata($post);
            ?>
            <a class="group md:col-span-12 rounded-lg" href="<? the_permalink(); ?>">
              <div class="flex flex-col md:h-[229.5px] bg-off-white-400 group-hocus:bg-purple-700 text-white group-hocus:text-pink transition-colors rounded-lg p-[16px]">
                @include('partials/hero-badge-white')
                <p class="my-auto font-serif text-[1.5rem]/[1.75rem]"><? the_title(); ?></p>
                <span class="shrink-0 iconify size-[20px] mdi--arrow-right mt-auto ml-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
              </div>
            </a>
            <? wp_reset_postdata(); ?>
          </div>
          <?
          global $post;
          $post = $the_query->posts[1];
          setup_postdata($post);
          ?>
          <a class="group md:col-span-8 h-[475px] bg-purple-800 hocus:bg-purple-700 text-white hocus:text-pink transition-colors rounded-lg overflow-hidden" href="<? the_permalink(); ?>">
            <div class="relative">
              <? the_post_thumbnail('col-7-thumbnail', array('class' => 'object-cover md:h-[300px]')); ?>
              @include('partials/hero-badge-purple')
            </div>
            <div class="flex flex-col h-[175px] px-[28px] pt-[20px] pb-[28px]">
              <p class="font-serif text-[1.5rem]/[1.75rem] mb-[4px]"><? the_title(); ?></p>
              <div class="flex mt-auto">
                @include('partials/hero-project-type')
                <span class="shrink-0 iconify size-[20px] mdi--arrow-right mt-auto ml-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
              </div>
            </div>
          </a>
          <? wp_reset_postdata(); ?>
        </div>

        <?php // Hero: uitgelicht for sm ?>
        <div class="flex md:hidden gap-[16px] px-[24px] max-md:snap-x max-md:snap-mandatory max-md:items-stretch max-md:overflow-x-scroll">
          <?
          global $post;
          $post = $the_query->posts[1];
          setup_postdata($post);
          ?>
            <a class="group max-md:w-full shrink-0 snap-start bg-purple-800 hocus:bg-purple-700 text-white hocus:text-pink transition-colors rounded-lg overflow-hidden" href="<? the_permalink(); ?>">
              <div class="relative">
                <? the_post_thumbnail('col-7-thumbnail', array('class' => 'object-cover max-md:h-[220px]')); ?>
                @include('partials/hero-badge-purple')
              </div>
              <div class="flex flex-col h-[220px] px-[20px] pt-[16px] pb-[20px]">
                <p class="font-serif text-[1.5rem]/[1.75rem] mb-[4px]"><? the_title(); ?></p>
                <div class="flex mt-auto">
                  @include('partials/hero-project-type')
                  <span class="shrink-0 iconify size-[20px] mdi--arrow-right ml-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
                </div>
              </div>
            </a>
          <?
          global $post;
          $post = $the_query->posts[0];
          setup_postdata($post);
          ?>
            <a class="group max-md:w-full shrink-0 snap-start bg-blue-200 hocus:bg-purple-700 text-white hocus:text-pink transition-colors rounded-lg overflow-hidden" href="<? the_permalink(); ?>">
              <div class="relative">
                <? the_post_thumbnail('col-7-thumbnail', array('class' => 'object-cover max-md:h-[220px]')); ?>
                @include('partials/hero-badge-purple')
              </div>
              <div class="flex flex-col h-[220px] px-[20px] pt-[16px] pb-[20px]">
                <p class="font-serif text-[1.5rem]/[1.75rem] mb-[4px]"><? the_title(); ?></p>
                <div class="flex mt-auto">
                  @include('partials/hero-project-type')
                  <span class="shrink-0 iconify size-[20px] mdi--arrow-right ml-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
                </div>
              </div>
            </a>
          <?
          global $post;
          $post = $the_query->posts[2];
          setup_postdata($post);
          ?>
            <a class="group max-md:w-full shrink-0 snap-start bg-off-white-400 hocus:bg-purple-700 text-white hocus:text-pink transition-colors rounded-lg overflow-hidden" href="<? the_permalink(); ?>">
              <div class="relative">
                <? the_post_thumbnail('col-7-thumbnail', array('class' => 'object-cover max-md:h-[220px]')); ?>
                @include('partials/hero-badge-purple')
              </div>
              <div class="flex flex-col h-[220px] px-[20px] pt-[16px] pb-[20px]">
                <p class="font-serif text-[1.5rem]/[1.75rem] mb-[4px]"><? the_title(); ?></p>
                <div class="flex mt-auto">
                  @include('partials/hero-project-type')
                  <span class="shrink-0 iconify size-[20px] mdi--arrow-right ml-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
                </div>
              </div>
            </a>
        </div>

        <?
          endif;
          wp_reset_query();
        ?>
      </div>
    </div>
  </div>

  <?php // Actueel ?>
  <div class="px-[16px] md:px-[24px] mb-[96px] xl:mb-[128px]">
    <div class="mx-auto w-full max-w-[1920px]">
      <h2 class="mb-[24px] md:mb-[32px]">Actueel</h2>
      <p class="mb-[20px] md:mb-[28px]">Bekijk alle <a href="/nieuws/">nieuwsberichten</a>, check onze <a href="/agenda/">agenda</a> en bekijk waar we genoemd worden <a href="/in-de-media/">in de media</a>.</p>
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
        <x-button class="mx-auto xl:mx-0 xl:ml-auto" href="/projecten/" text="Bekijk alle projecten" />
      @endif
      <? wp_reset_query() ?>

    </div>
  </div>

  <?php // Doneer ?>
  <div class="md:grid md:grid-cols-12 bg-cover bg-center bg-no-repeat h-[574px] md:h-[608px] xl:h-[664px] px-[16px] md:px-[24px]" style="background-image: url('{{ Vite::asset('resources/images/pixel_stretch.webp')}}')">
    <div class="md:col-span-8 md:col-start-3 relative z-10 flex flex-col items-center">
      <h2 class="mt-[48px] md:mt-[80px] mb-[16px] md:mb-[24px] xl:mt-[120px] text-[1.75rem]/[2rem] md:text-[2.75rem]/[3rem] xl:text-[3.25rem]/[3.5rem] tracking-[-0.0125rem] md:tracking-[-0.0375rem] xl:tracking-[-0.05rem] text-center">Ja, ik wil een sterke democratie</h2>
      <p class="mb-[40px] text-center">Wij zetten ons in voor een sterke democratie door transparantie. Dit kunnen we niet zonder jouw hulp.</p>
      <x-button href="/doneren/" text="Doneer" />
    </div>
  </div>

  <?php // Ons aanbod ?>
  <div class="px-[16px] md:px-[24px] mt-[40px] md:mt-[48px] xl:mt-[80px] mb-[64px] md:mb-[100px] xl:mb-[120px]">
    <div class="mx-auto w-full max-w-[1920px]">
      <div class="md:grid md:grid-cols-12 gap-x-[16px] mb-[40px] xl:mb-[64px]">
        <h2 class="md:col-span-6 xl:col-span-3 mt-0 mb-[12px] md:mb-[32px]">Ons aanbod</h2>
        <p class="md:col-span-6 xl:col-span-6 m-0">Werk met ons aan een transparante overheid. We zetten onze expertise in om overheden te helpen de democratie te versterken. Dat doen we door bronnen en tools te bouwen, onderzoek uit te voeren en trainingen en events te organiseren.</p>
      </div>

      <div class="flex gap-x-[16px] snap-x snap-mandatory items-stretch scroll-px-[15%] md:scroll-px-[30px] overflow-x-scroll">
        <x-ons-aanbod variant="ons-aanbod-home" />
      </div>

      <x-button class="mt-[40px] md:mt-[56px] xl:mt-[24px] mx-auto xl:mx-0 xl:ml-auto" href="/werk-met-ons/" text="Werk met ons" />
    </div>
  </div>
@endsection
