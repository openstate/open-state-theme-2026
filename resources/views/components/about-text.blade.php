@props([
  'title' => '',
  'class' => '',
])

<div class="col-span-12 md:grid md:grid-cols-12 hover:text-pink">
  <div class="col-span-12 md:col-span-6">
    <h3 class="max-md:mb-[8px] m-0 text-[1.5rem]/[1.75rem] md:text-[1.625rem]/[2rem] md:tracking-[-0.0125rem] xl:text-[2rem]/[2.5rem] xl:tracking-[-0.025rem]">{{ $title }}</h3>
  </div>
  <div class="col-span-12 md:col-span-6 max-md:mb-[32px]">
    <p class="m-0 font-medium text-[1rem]/[1.5rem] tracking-[-0.00625rem] xl:text-[1.125rem]/[1.75rem] tracking-[-0.00625rem]">{{ $slot }}</p>
  </div>
</div>
