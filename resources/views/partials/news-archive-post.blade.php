<a class="group no-underline md:mx-auto md:block md:w-[688px] rounded-xl overflow-hidden bg-off-white-50 flex flex-col md:grid md:grid-cols-2 md:h-[280px] mb-[16px]" href="{!! the_permalink() !!}">

    {!! the_post_thumbnail('col-4-thumbnail', array('class' => 'md:w-full object-cover md:h-full aspect-[2/1]')) !!}

    <div class="flex flex-col justify-between pt-[16px] px-[20px] pb-[24px] md:pt-[20px] md:px-[24px] md:pb-[24px] group-hover:bg-purple-700 group-hover:text-pink transition-colors">
      <h2 class="mt-0 text-[1.25rem]/[1.625rem] md:text-[1.375rem]/[1.5rem] xl:text-[1.5rem]/[1.75rem]">
        {!! get_the_title() !!}
      </h2>

      @include('partials/entry-meta')
    </div>
</a>
