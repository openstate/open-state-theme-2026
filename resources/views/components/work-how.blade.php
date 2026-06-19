@props([
  'count' => '',
  'title' => '',
  'class' => '',
])

<h3 class="md:col-span-6 m-0 max-md:mb-[8px] text-[1.125rem]/[1.375rem] md:text-[1.5rem]/[2rem] md:tracking-[-0.00625rem] xl:text-[1.75rem]/[2rem] xl:tracking-[-0.0125rem]">
  <span class="text-pink w-[28px] mr-[19px] md:mr-[24px]">
    {{ $count }}
  </span>
  {{ $title }}
</h3>
<p class="md:col-span-6 mb-0 font-medium max-md:mb-[32px] max-md:ml-[40.72px]">{{ $slot }}</p>
