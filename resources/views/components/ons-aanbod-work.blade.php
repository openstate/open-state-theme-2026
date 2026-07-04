@props([
  'title' => '',
])

<div class="h-[328px] md:h-[388px] md:col-span-6 xl:col-span-4 bg-off-white-50 rounded-lg p-[16px] max-md:mb-[16px]">
  <h3 class="mt-0 mb-[8px] md:mb-[12px] text-[1.25rem]/[1.625rem] md:text-[1.375rem]/[1.5rem] xl:text-[1.5rem]/[1.75rem] tracking-[0]">{{ $title }}</h3>
  <p>{{ $slot }}</p>
</div>
