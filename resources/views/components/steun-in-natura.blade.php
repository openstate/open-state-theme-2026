@props([
  'title' => '',
  'link' => '',
])

<a class="group rounded-lg overflow-hidden bg-off-white-200 flex flex-col col-span-12 md:col-span-3" href="{{ $link }}" target="_blank">

  <div class="flex flex-col min-h-[140px] md:min-h-[220px] xl:min-h-[240px] px-[20px] py-[20px] md:pt-[20px] md:px-[28px] md:pb-[28px] xl:pt-[20px] xl:px-[24px] xl:pb-[24px] group-hocus:bg-purple-700 group-hocus:text-pink transition-colors">
    <h4 class="mt-0 mb-[4px] md:mb-[8px] text-[1.5rem]/[1.75rem] md:text-[1.625rem]/[2rem] md:tracking-[-0.0125rem] xl:text-[2rem]/[2.5rem] xl:tracking-[-0.025rem]">{{ $title }}</h4>
    <p class="mb-0">{{ $slot }}</p>

    <div class="mt-auto flex">
      <p class="mt-[8px] mb-0 text-[0.875rem]/[1.375rem] font-medium">Ga naar {{ $title }}</p>
      <span class="iconify size-4.5 mdi--arrow-right col-span-1 my-auto ml-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
    </div>
  </div>
</a>
