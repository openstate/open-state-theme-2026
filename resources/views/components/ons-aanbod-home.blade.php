@props([
  'title' => '',
])

<? // The custom breakpoints are just the regular md and xl, but also an extra special breakpoint at 1920px, to make sure that the carousel looks good at screens wider than 1920px ?>
<div class="snap-start max-[768px]:w-full max-[1280px]:w-[calc(50dvw-64px)] max-[1968px]:w-[calc(25dvw-42px)] min-[1968px]:w-[450px] shrink-0 h-[316px] md:h-[364px] bg-off-white-50 rounded-lg p-[16px]">
  <h3 class="mt-0 mb-[8px] md:mb-[12px] text-[1.25rem]/[1.625rem] md:text-[1.375rem]/[1.5rem] xl:text-[1.5rem]/[1.75rem] tracking-[0]">{{ $title }}</h3>
  <p>{{ $slot }}</p>
</div>
