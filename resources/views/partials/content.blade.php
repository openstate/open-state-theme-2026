<a class="xl:col-span-3 snap-start w-full md:w-1/2 xl:w-full shrink-0 flex flex-col bg-off-white-100 hover:bg-purple-700 hover:text-pink transition-colors rounded-[8px] overflow-hidden no-underline group" href="{{ get_permalink() }}">
  <? the_post_thumbnail('col-7-thumbnail', array('class' => 'aspect-[2/1] object-cover')); ?>
  <div class="flex flex-col h-full px-[16px]">
    <header class="pt-[20px]">
      <h3 class="entry-title mt-0 text-[1.5rem]/[1.75rem] tracking-[0]">
          {!! $title !!}
      </h3>
    </header>

    {!! get_the_excerpt() !!}

    <div class="grid grid-cols-2 mt-auto mb-[16px] pt-[6px]">
      <div class="col-span-1">
        @include('partials.entry-meta')
      </div>
      <span class="hidden group-hover:block transition col-span-1 ml-auto iconify size-4.5 mdi--arrow-right"></span>
    </div>
  </div>
</a>
