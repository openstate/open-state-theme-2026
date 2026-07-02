@props([
  'variant' => 'primary',
  'text' => '',
  'class' => '',
])

@php($variantClasses = match ($variant) {
  'secondary' => 'bg-off-white-400 text-white',
  default => 'bg-purple-800 text-white',
})

<button
  @class([
    'cursor-pointer group',
    $class,
  ])
  {{ $attributes }}
>
  <span
    @class([
      'flex size-[46px] items-center justify-center rounded-full group-hocus:rounded-sm',
      $variantClasses,
    ])
  >
    <span class="iconify size-4.5 mdi--arrow-right"></span>
  </span>
</button>
