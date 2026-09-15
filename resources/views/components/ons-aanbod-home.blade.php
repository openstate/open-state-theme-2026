@props([
  'title' => '',
  'href' => '',
])

<? // The custom breakpoints are just the regular md and xl, but also an extra special breakpoint at 1920px, to make sure that the carousel looks good at screens wider than 1920px ?>
<a href="{{ $href }}" class="scroll-mx-[15%] md:scroll-mx-[30px] flex flex-col snap-start max-[768px]:w-[85%] max-[1280px]:w-[calc(50dvw-64px)] max-[1968px]:w-[calc(25dvw-42px)] min-[1968px]:w-[450px] shrink-0 h-[360px] md:h-[420px] bg-off-white-50 hocus:bg-purple-700 hocus:text-pink transition-colors rounded-lg p-[16px] group no-default-ring focus:outline-none focus-visible:ring-2 focus-visible:ring-inset">
  <h3 class="mt-[20px] mb-[8px] md:mb-[12px] text-[1.25rem]/[1.625rem] md:text-[1.375rem]/[1.5rem] xl:text-[1.5rem]/[1.75rem] tracking-[0]">{{ $title }}</h3>
  {{ $slot }}
  <div class="flex">
    <p class="font-medium mb-0">Bekijk aanbod</p>
    <span class="iconify size-4.5 mdi--arrow-right ml-auto my-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
  </div>
</a>
