@props([
  'variant' => 'primary',
  'text' => '',
  'class' => '',
])

@php($variantClasses = match ($variant) {
  'secondary' => 'bg-white text-purple-800',
  default => 'bg-purple-800 text-white',
})

<a
  @class([
    'group grid w-fit cursor-pointer grid-cols-[0_auto_2.75rem] items-center font-mono font-medium',
    'motion-safe:transition-[grid] motion-safe:duration-200 motion-safe:ease-in-out',
    'motion-safe:hover:grid-cols-[2.75rem_auto_0]',
    'no-underline',
    $class,
  ])
  {{ $attributes }}
>
  <span
    aria-hidden="true"
    @class([
      'mr-1 flex size-10 origin-left scale-0 items-center justify-center rounded-full',
      'group-hover:scale-100 motion-safe:duration-200 motion-safe:ease-in-out',
      'motion-reduce:group-hover:scale-0',
      $variantClasses,
    ])
  >
    <span class="iconify size-4.5 mdi--arrow-right"></span>
  </span>

  <span
    @class([
      'flex h-10 items-center rounded-sm px-[20px] text-sm leading-[20px]',
      $variantClasses,
    ])
  >
    {{ $text }}
  </span>

  <span
    aria-hidden="true"
    @class([
      'ml-1 flex size-10 origin-left items-center justify-center rounded-full',
      'group-hover:scale-0 motion-safe:transition-[scale] motion-safe:duration-200',
      'motion-safe:ease-in-out motion-reduce:group-hover:scale-0',
      $variantClasses,
    ])
  >
    <span class="iconify size-4.5 mdi--arrow-right"></span>
  </span>
</a>
