@props([
  'title' => '',
  'class' => '',
  'id' => '',
  'function' => '',
  'image' => '',
  'width' => '561px',
])

<dialog
  autofocus
  id={{ $id }}
  class="mt-[92px] mx-auto rounded-lg text-purple-800 backdrop:bg-black/70 max-h-[calc(100dvh-184px)]" style="width: {{ $width }}"
  onclick="if(event.target===this)this.close()">
  <div class="p-[24px] md:p-[40px] xl:p-[64px] xl:pt-[48px]">
    <div class="flex justify-between">
      <?php // This ternary on $content is needed, because if this popup is called from within the content of a post in Wordpress (e.g. belastingaftrekbaar button on the donate page) then an empty <p> element is added to the top and we need to compensate for its margin; this is not the case when we call this popup from another blade.php template ?>
      <h2 class="text-[1.5rem]/[1.75rem] tracking-[-0.00625rem] md:text-[2.5rem]/[2.75rem] md:tracking-[-0.025rem] xl:text-[2.75rem]/[3rem] xl:tracking-[-0.0375rem] m-0 {{ $content ? 'mb-[4px] md:mb-[8px] xl:mb-[16px]' : 'mb-[24px] md:mb-[32px] xl:mb-[40px]' }}">{!! $title !!}</h2>
      <button
        type="button"
        class="mb-auto hocus:text-pink border-none leading-none cursor-pointer relative top-[-20px] left-[20px] md:top-[-28px] md:left-[28px] xl:top-[-35px] xl:left-[50px]"
        onclick="document.getElementById('{{ $id }}').close()"
        aria-label="Close">
        <span class="iconify size-7 mdi--close"></span>
      </button>
    </div>
    {!! $content !!}
    {!! $slot !!}
  </div>
</dialog>
