@props([
  'variant' => 'primary',
  'text' => '',
  'card' => False,
  'class' => '',
])

@php($variantClasses = match ($variant) {
  'quarternary' => 'bg-white text-purple-800',
  'tertiary' => 'bg-purple-100 text-purple-800',
  'secondary' => 'bg-off-white-400 text-white',
  default => 'bg-purple-700 text-white',
})

<? if ($card) {
  // Set card = True if the badge needs to be shown at the top left inside a card/image
  $cardClasses = 'absolute top-[12px] left-[12px] z-10';
}
?>

<div class="{{ $cardClasses }} {{ $variantClasses }} {{ $class }} font-mono font-medium text-[0.75rem]/[1rem] px-[8px] py-[4px] rounded-lg">
  {{ $text }}
</div>
