@props([
  'title' => '',
  'bgColor' => '',
  'textColor' => '',
  'image' => '',
  'logo1' => '',
  'logo2' => '',
])

<div class="snap-start flex flex-col md:flex-row min-h-[528px] md:h-[420px] xl:h-[520px] min-w-[288px] md:min-w-[688px] xl:min-w-[1100px] {{ $bgColor }} {{ $textColor }} rounded-lg overflow-hidden">
  <div class="flex flex-col order-2 md:order-1 p-[24px] pt-[20px] md:p-[32px]">
    <div class="flex-1">
      <h3 class="mt-0 mb-[8px] md:mb-[12px] xl:mb-[16px] text-[1.5rem]/[1.75rem] tracking-[-0.00625rem] md:text-[2.25rem]/[2.5rem] md:tracking-[-0.025rem] xl:text-[2.75rem]/[3rem] xl:tracking-[-0.0375rem]">{{ $title }}</h3>
      <p class="tracking-[-0.00625rem] xl:text-[1.125rem]/[1.75rem]">{{ $slot }}</p>
    </div>
    <div class="mt-auto flex max-md:flex-col gap-[10px]">
      @if ($logo1)
      <div class="bg-white rounded-lg w-[184px] h-[76px] pt-[12px] px-[10px] pb-[14px]">
        <img class="h-full !object-contain" src={{ Vite::asset('resources/images/' . $logo1) }}>
      </div>
      @endif
      @if ($logo2)
      <div class="bg-white rounded-lg w-[184px] h-[76px] pt-[12px] px-[10px] pb-[14px]">
        <img class="h-full !object-contain" src={{ Vite::asset('resources/images/' . $logo2) }}>
      </div>
      @endif
    </div>
  </div>
  <img class="order-1 md:order-2 max-md:h-[200px] md:w-[240px] xl:w-[420px]" src={{ Vite::asset('resources/images/' . $image) }}>
</div>
