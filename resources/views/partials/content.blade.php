<?php // Nieuwsbericht card op de homepage ?>

<a class="xl:col-span-3 snap-start w-full md:w-1/2 xl:w-full shrink-0 flex flex-col bg-off-white-100 hover:bg-purple-700 hover:text-pink transition-colors rounded-lg overflow-hidden no-underline group" href="{{ get_permalink() }}">

  <div class="relative">
    <? the_post_thumbnail('col-7-thumbnail', array('class' => 'aspect-[16/10] object-cover')); ?>

    @php
      $text = 'Nieuws';
      if (get_field('agenda_evenement')) {
        $text = 'Evenement';
      }
    @endphp
    <x-badge text="{{ $text }}" variant="secondary" card=True />
  </div>
  <div class="flex flex-col h-full px-[16px] pt-[32px] pb-[16px]">
    <h3 class="entry-title mt-0 text-[1.5rem]/[1.75rem] tracking-[0]">
        {!! $title !!}
    </h3>
    <div class="mb-[12px]">
      @include('partials.agenda-card-info')
    </div>

    {!! get_the_excerpt() !!}

    <div class="flex mt-auto pt-[8px]">
      @include('partials.entry-meta')
      <span class="iconify size-4.5 mdi--arrow-right ml-auto my-auto opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300"></span>
    </div>
  </div>
</a>
