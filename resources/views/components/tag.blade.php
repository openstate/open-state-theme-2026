@props([
  'variant' => 'white',
  'text' => '',
  'class' => '',
])

@php($variantClasses = match ($variant) {
  'white' => 'bg-white text-purple-800',
  'off-white' => 'bg-off-white-400 text-white',
  'purple' => 'bg-purple-700 text-white',
})

<a
  @class([
    'font-mono text-[0.75rem]/[1rem] font-medium items-center rounded-[5px] px-[8px] py-[4px]',
    '!no-underline',
    $variantClasses,
    $class,
  ])
  {{ $attributes }}
>
  {{ $text }}
</a>
