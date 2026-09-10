@props([
  'title' => '',
  'href' => '',
])

<a href="{{ $href }}" class="no-open-state-underline flex flex-col h-[328px] md:h-[388px] md:col-span-6 xl:col-span-4 bg-off-white-50 hocus:bg-purple-700 hocus:text-pink transition-colors rounded-lg p-[16px] max-md:mb-[16px] group">
  <h3 class="mt-[20px] mb-[8px] md:mb-[12px] text-[1.25rem]/[1.625rem] md:text-[1.375rem]/[1.5rem] xl:text-[1.5rem]/[1.75rem] tracking-[0]">{{ $title }}</h3>
  <p>{{ $slot }}</p>
  <div class="flex mt-auto">
    <p class="font-medium mb-0">Lees meer</p>
    <span class="iconify size-4.5 mdi--arrow-right ml-auto my-auto opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300"></span>
  </div>
</a>
