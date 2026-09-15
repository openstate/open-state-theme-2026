@props([
  'name' => '',
  'function' => '',
  'href' => '',
])

<a href="{{ $href }}" target="_blank" class="group text-left cursor-pointer col-span-12 md:col-span-6 xl:col-span-4 overflow-hidden">
  <h3 class="m-0 mb-[4px] text-[1.25rem]/[1.625rem] md:text-[1.375rem]/[1.5rem] md:tracking-[-0.0125rem] xl:text-[1.5rem]/[1.75rem]">{{ $name }}</h3>
  <p class="font-mono font-medium text-pink m-0 text-[0.8125rem]/[1.125rem]">{{ $function }}</p>
</a>
