@props([
  'name' => '',
  'function' => '',
  'image' => '',
])

<button type="button" class="text-left cursor-pointer col-span-12 md:col-span-6 xl:col-span-4 rounded-lg overflow-hidden" onclick="document.getElementById('{{ preg_replace('/\s+/', '', $name) }}').showModal()" arialabel="dialog">
  <div class="group relative h-[347px] mb-[8px]">
    <img src={{ Vite::asset('resources/images/' . $image . '1.webp') }}
         class="absolute inset-0 w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0" />
    <img src={{ Vite::asset('resources/images/' . $image . '2.webp') }}
         class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-300 group-hover:opacity-100" />
  </div>

  <h3 class="m-0 mb-[4px] text-[1.25rem]/[1.625rem] md:text-[1.375rem]/[1.5rem] md:tracking-[-0.0125rem] xl:text-[1.5rem]/[1.75rem]">{{ $name }}</h3>
  <p class="font-mono font-medium text-pink m-0 text-[0.8125rem]/[1.125rem]">{{ $function }}</p>
</button>

<x-popup title="{{ $name }}" function="{{ $function }}" id="{{ preg_replace('/\s+/', '', $name) }}">
  {!! $slot !!}
</x-popup>
