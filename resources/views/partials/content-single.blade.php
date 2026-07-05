<?php // Post/nieuwsbericht ?>

<div class="px-[16px] pt-[104px] pb-[100px] xl:pb-[160px]" @php(post_class('h-entry'))>
  @if (in_array('single', get_body_class()))
  <div class="mx-auto md:w-[688px]">
    <?
      $categories = wp_get_post_categories(get_the_ID(), ['fields' => 'all']);
      $category_title = $categories ? $categories[0]->name : '';

      $args = array(
        'post_type' => 'page',
        'posts_per_page' => 1,
        'cat' => $categories[0]->term_id,
      );

      $the_query = new \WP_Query($args);

      $project_url = '';
      while ($the_query->have_posts()) {
          $the_query->the_post();
          $project_url = get_permalink();
      }

      wp_reset_query();
    ?>
    @if ($category_title)
      <nav aria-label="Breadcrumb" class="font-mono font-medium text-[0.8125rem]/[1rem] md:text-[0.875rem]/[1rem] tracking-[0.03125rem] mt-[6px] mb-[22px]">
        <ol class="list-none p-0">
          <li class="inline"><a href="/projecten-tools-data/" class="text-[#A1A1A1]">Projecten</a></li>
          <span class="text-pink inline">></span>
          <li class="inline"><a href="{!! $project_url !!}">{{ $category_title }}</a></li>
        </ol>
      </nav>
    @endif
  </div>
  @endif
  <article class="mx-auto md:w-[688px]">
    <header>
      <h1 class="p-name font-serif text-[1.5rem]/[1.75rem] tracking-[-0.00625rem] md:text-[2.25rem]/[2.5rem] md:tracking-[-0.025rem] xl:text-[2.75rem]/[3rem] xl:tracking-[-0.0375rem] pb-[20px]">
        {!! $title !!}
      </h1>

      @if (in_array('single', get_body_class()))
        @include('partials.entry-meta')
      @endif

      {!! the_post_thumbnail('full', array('class' => 'rounded-lg mt-[20px] object-cover h-[180px] md:h-[400px] xl:h-[430px]')) !!}
    </header>

    @if (has_post_thumbnail())
    <div class="mt-[66px]">
    @else
    <div class="mt-[46px]">
    @endif
      @php(the_content())

      @if ($agenda_evenement)
      <div class="flex flex-col">
        <?
          $unixtimestamp = strtotime($agenda_tijdstip);
          $formatted_date = date_i18n('l j F Y, H:i', $unixtimestamp);
        ?>
        <time class="font-medium mb-[8px] flex" datetime="{{ str_replace(' ', 'T', $agenda_tijdstip) }}">
          <span class="my-auto mr-[10px] iconify size-[16px] mdi--clock"></span>{{ $formatted_date }}
        </time>

        <div class="flex mb-[8px]">
          <span class="my-auto mr-[10px] iconify size-[16px] mdi--location"></span><p class="mb-0 font-medium"><? echo $agenda_locatie ?></p>
        </div>

        @if ($agenda_inschrijfformulier_url)
        <x-button text="Inschrijven" href="{{ $agenda_inschrijfformulier_url }}" target="_blank" />
        @endif
      </div>
      @endif

      @include('partials.action-boxes')
    </div>
  </article>
</div>
