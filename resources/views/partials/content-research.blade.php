<?php // Onderzoek card op 'Onderzoek' pagina ?>

<a class="group no-underline rounded-lg overflow-hidden bg-off-white-50 flex flex-col" href="{{ get_field('onderzoek_url') }}" target="_blank">
  <div class="relative">
    {!! the_post_thumbnail('col-7-thumbnail', array('class' => 'aspect-[1/1.4142] object-cover')) !!}

    @php
      $categories = wp_get_post_categories(get_the_ID(), ['fields' => 'all']);
      $category_title = $categories ? $categories[0]->name : 'Nieuws';
    @endphp
    <div class="absolute inset-0 bg-pink/0 group-hocus:bg-pink/40 transition-colors"></div>

    <x-badge text="{!! $category_title !!}" variant="secondary" card=True />

    <span class="iconify size-4.5 mdi--arrow-right opacity-0 -translate-x-2 group-hocus:opacity-100 group-hocus:translate-x-0 transition-all duration-300 absolute bottom-[12px] right-[12px] z-100 text-white"></span>
  </div>
</a>
