<?php // Agenda card op de agenda pagina ?>

<a class="group no-underline md:mx-auto md:block md:w-[688px] rounded-lg overflow-hidden bg-off-white-50 flex flex-col md:grid md:grid-cols-2 md:h-[280px] mb-[16px]" href="{!! the_permalink() !!}">
    {!! the_post_thumbnail('col-7-thumbnail', array('class' => 'object-cover w-full md:h-full max-h-[280px]')) !!}

    <div class="flex flex-col pt-[16px] px-[20px] pb-[24px] md:pt-[20px] md:px-[24px] md:pb-[24px] group-hover:bg-purple-700 group-hover:text-pink transition-colors">
      <h2 class="mt-0 text-[1.25rem]/[1.625rem] md:text-[1.375rem]/[1.5rem] xl:text-[1.5rem]/[1.75rem]">
        {!! get_the_title() !!}
      </h2>

      <div class="flex mt-auto">
        <div class="flex flex-col">
          <?
            $unixtimestamp = strtotime(get_field('agenda_tijdstip', get_the_id()));
            $formatted_date = date_i18n('l j F Y, H:i', $unixtimestamp);
          ?>
          <time class="text-[0.875rem]/[1.375rem] font-medium" datetime="{{ str_replace(' ', 'T', get_field('agenda_tijdstip', get_the_id())) }}">
            {{ $formatted_date }}
          </time>

          <p class="mb-0 text-[0.875rem]/[1.375rem] font-medium"><? echo get_field('agenda_locatie', get_the_id()) ?></p>
        </div>

        <span class="shrink-0 iconify size-[20px] mdi--arrow-right mt-auto ml-auto opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300"></span>
      </div>
    </div>
</a>
