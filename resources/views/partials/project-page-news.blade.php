<ul class="list-none p-0">
@while ($the_query->have_posts())
  <? $the_query->the_post() ?>
  <li class="flex flex-col mt-[20px]">
    <time class="font-mono text-[0.75rem]/[1rem] text-off-white-500 mb-[4px]" datetime="{{ get_post_time('c', true) }}">
      {{ get_the_date('D j M \'y') }}
    </time>
    <a class="font-medium text-[0.875rem]/[1.375rem] hocus:text-pink" href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
  </li>
@endwhile
</ul>
