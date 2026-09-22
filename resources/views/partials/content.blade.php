<?php // Nieuwsbericht card op de homepage ?>

<a class="xl:col-span-3 snap-start w-full md:w-1/2 xl:w-full shrink-0 flex flex-col bg-off-white-100 hocus:bg-purple-700 hocus:text-pink transition-colors rounded-lg overflow-hidden no-underline group h-[420px] no-default-ring focus:outline-none focus-visible:ring-2 focus-visible:ring-inset" href="{{ get_permalink() }}">
  <div class="flex flex-col h-full px-[16px] py-[16px]">
    @php
      $text = 'Nieuws';
      if (get_field('agenda_evenement')) {
        $text = 'Evenement';
      }
    @endphp
    <x-badge text="{!! $text !!}" variant="secondary" class="self-start" />
    <h3 class="entry-title mt-[32px] mb-[12px] text-[1.5rem]/[1.75rem] tracking-[0]">
        {!! $title !!}
    </h3>
    @include('partials.agenda-card-info')

    {!! get_the_excerpt() !!}

    <div class="flex mt-auto pt-[8px]">
      <time class="dt-published text-[0.875rem]/[1.375rem] font-medium" datetime="{{ get_post_time('c', true) }}">
        {{ get_the_date('D j M \'y') }}
      </time>
      <span class="iconify size-4.5 mdi--arrow-right ml-auto my-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
    </div>
  </div>
</a>
