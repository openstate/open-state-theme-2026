@props([
  'title' => '',
  'class' => '',
])

<div class="md:col-span-6 max-md:mb-[32px]">
  <h3 class="mt-0 mb-[8px] md:mb-[12px] text-[1.125rem]/[1.375rem] md:text-[1.5rem]/[2rem] md:tracking-[-0.00625rem] xl:text-[1.75rem]/[2rem] xl:tracking-[-0.0125rem]">{{ $title }}</h3>
  <p class="mb-0 font-medium">{{ $slot }}</p>
</div>
