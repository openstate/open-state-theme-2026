@props([
  'title' => '',
  'class' => '',
  'id' => '',
])

<dialog
  id={{ $id }}
  class="mt-[92px] w-[800px] mx-auto rounded-lg text-purple-800 backdrop:bg-black/70"
  onclick="if(event.target===this)this.close()">
  <div class="p-[24px] md:p-[40px] xl:p-[64px] xl:pt-[48px]">
    <div class="flex justify-between">
      <h2 class="text-[1.5rem]/[1.75rem] tracking-[-0.00625rem] md:text-[2.5rem]/[2.75rem] md:tracking-[-0.025rem] xl:text-[2.75rem]/[3rem] xl:tracking-[-0.0375rem] m-0 mb-[4px] md:mb-[8px] xl:mb-[16px]">{{ $title }}</h2>
      <button
        type="button"
        class="mb-auto text-gray-400 hover:text-gray-700 bg-transparent
               border-none cursor-pointer text-xl leading-none"
        onclick="document.getElementById('{{ $id }}').close()"
        aria-label="Close">
        <span class="iconify size-7 mdi--close relative top-[-20px] left-[20px] md:top-[-28px] md:left-[28px] xl:top-[-35px] xl:left-[50px]"></span>
      </button>
    </div>
    {!! $content !!}
  </div>
</dialog>
