@props(['icon', 'href'])

<a href="{{ $href }}" target="_blank" class="group">
  <span class="flex items-center justify-center size-[48px] rounded-full border-1 border-white group-hocus:border-pink transition">
    <span class="iconify {{ $icon }} text-[20px] text-white group-hocus:text-pink transition"></span>
  </span>
</a>
