<a class="col-span-3 bg-off-white-100 rounded-[8px] !no-underline" href="{{ get_permalink() }}">
  <? the_post_thumbnail('col-7-thumbnail', array('class' => 'img-fluid aspect-[2/1] object-cover')); ?>
  <div class="px-[16px]">
    <header class="pt-[20px]">
      <h3 class="entry-title mt-0 text-[1.5rem]/[1.75rem] tracking-[0]">
          {!! $title !!}
      </h3>
    </header>

    {!! get_the_excerpt() !!}

    <div class="pt-auto">
      @include('partials.entry-meta')
    </div>
  </div>
</a>
