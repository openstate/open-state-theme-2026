<?php // Post/nieuwsbericht ?>

<article class="px-[16px] pt-[146px] pb-[100px] xl:pb-[160px]" @php(post_class('h-entry'))>
  <div class="mx-auto w-full max-w-[1920px] md:grid md:grid-cols-12 xl:grid-cols-12">
    <div class="md:col-span-8 md:col-start-3 xl:col-span-6 xl:col-start-4">
      <header>
        <h1 class="p-name font-serif text-[1.5rem]/[1.75rem] tracking-[-0.00625rem] md:text-[2.25rem]/[2.5rem] md:tracking-[-0.025rem] xl:text-[2.75rem]/[3rem] xl:tracking-[-0.0375rem] pb-[20px]">
          {!! $title !!}
        </h1>

        @if (in_array('single', get_body_class()))
          @include('partials.entry-meta')
        @endif

        {!! the_post_thumbnail('full', array('class' => 'rounded-lg mt-[20px]')) !!}
      </header>

      @if (has_post_thumbnail())
      <div class="mt-[66px]">
      @else
      <div class="mt-[46px]">
      @endif
        @php(the_content())
        @include('partials.action-boxes')
      </div>
    </div>
  </div>
</article>
