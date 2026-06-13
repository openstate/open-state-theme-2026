@props(['icon', 'href'])

<a href="{{ $href }}" target="_blank">
  <span class="group flex items-center justify-center size-[48px] rounded-full border-1 border-white hover:border-pink transition">
    <span class="iconify {{ $icon }} text-[20px] text-white group-hover:text-pink transition"></span>
  </span>
</a>
