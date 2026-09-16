<?php // Mediabericht card op 'In de media' pagina ?>

<a class="group no-underline rounded-lg bg-off-white-50 flex flex-col" href="{{ get_field('tool_url') }}" target="_blank">
  <div class="flex flex-col h-[280px] px-[16px] py-[16px] group-hocus:bg-purple-700 group-hocus:text-pink transition-colors rounded-lg">
    @php
      $categories = wp_get_post_categories(get_the_ID(), ['fields' => 'all']);
      $category_title = $categories ? $categories[0]->name : 'Nieuws';
    @endphp
    <x-badge text="{{ $category_title }}" variant="secondary" class="self-start" />

    <h2 class="mt-[20px] md:mt-[32px] mb-[8px] md:mb-[12px] text-[1.25rem]/[1.625rem] md:text-[1.375rem]/[1.5rem] xl:text-[1.5rem]/[1.75rem]">{!! get_the_title() !!}</h2>

    <div class="mt-auto flex">
      {!! the_post_thumbnail('col-7-thumbnail', array('class' => 'object-cover', 'width' => '100')) !!}
      <span class="iconify size-4.5 mdi--arrow-right col-span-1 mt-auto ml-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
    </div>
  </div>
</a>
