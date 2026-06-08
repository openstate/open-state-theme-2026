@props(['icon', 'href'])

<a href="{{ $href }}" target="_blank">
  <span class="flex items-center justify-center size-[48px] rounded-full border-1 border-white">
    <span class="iconify {{ $icon }} text-[20px] text-white"></span>
  </span>
</a>
