<?php // Project card op projectoverzicht en homepage ?>

<a class="group no-underline rounded-lg overflow-hidden bg-off-white-50 flex flex-col" href="{!! the_permalink() !!}">
  <div class="relative">
    {!! the_post_thumbnail('col-7-thumbnail', array('class' => 'aspect-[16/10] object-cover')) !!}

    @php
      $parent_id = wp_get_post_parent_id(get_the_id());
      if ($parent_id) {
        $parent = get_post($parent_id);
        $parent_title = $parent->post_title;
      }
    @endphp
    @if ($parent_id && $parent_title)
      <x-badge text="{!! $parent_title !!}" variant="secondary" card=True />
    @endif
  </div>

  <div class="flex flex-col h-[250px] md:h-[260px] xl:h-[280px] px-[20px] py-[20px] md:pt-[20px] md:px-[28px] md:pb-[28px] xl:pt-[20px] xl:px-[24px] xl:pb-[24px] group-hocus:bg-purple-700 group-hocus:text-pink transition-colors">
    <h3 class="mt-0 mb-[4px] md:mb-[8px] text-[1.5rem]/[1.75rem] md:text-[1.625rem]/[2rem] md:tracking-[-0.0125rem] xl:text-[2rem]/[2.5rem] xl:tracking-[-0.025rem]">{!! get_the_title() !!}</h3>
    <p class="mb-0"><? echo get_field('project_samenvatting', get_the_id()) ?></p>

    <div class="mt-auto flex">
      <p class="mb-0 text-[0.875rem]/[1.375rem] font-medium">Bekijk project</p>
      <span class="iconify size-4.5 mdi--arrow-right col-span-1 my-auto ml-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
    </div>
  </div>

</a>
