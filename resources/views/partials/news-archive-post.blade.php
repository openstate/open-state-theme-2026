<?php // Nieuwsbericht card op de nieuwsarchief pagina ?>

<a class="group no-underline md:mx-auto md:block md:w-[688px] rounded-xl overflow-hidden bg-off-white-50 flex flex-col md:grid md:grid-cols-2 md:h-[280px] mb-[16px]" href="{!! the_permalink() !!}">
    {!! the_post_thumbnail('col-7-thumbnail', array('class' => 'object-cover w-full md:h-full')) !!}

    <div class="flex flex-col justify-between pt-[16px] px-[20px] pb-[24px] md:pt-[20px] md:px-[24px] md:pb-[24px] group-hover:bg-purple-700 group-hover:text-pink transition-colors">
      <h2 class="mt-0 text-[1.25rem]/[1.625rem] md:text-[1.375rem]/[1.5rem] xl:text-[1.5rem]/[1.75rem]">
        {!! get_the_title() !!}
      </h2>

      <div class="flex">
        @include('partials/entry-meta')
        <span class="iconify size-4.5 mdi--arrow-right col-span-1 my-auto ml-auto opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300"></span>
      </div>
    </div>
</a>
