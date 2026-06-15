<article @php post_class() @endphp>
  @if (get_field('project_afgerond', get_the_id()) == true)
    <div class="row">
  @else
    <div class="row current-project">
  @endif
    <div class="col-12">
      <header>
        <a href="{!! the_permalink() !!}">
          {!! the_post_thumbnail('col-8-thumbnail', array('class' => '')) !!}
        </a>
        <div class="entry-title bg-roze">
          <h5><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h5>
          <p class="mb-0"><? echo get_field('project_samenvatting', get_the_id()) ?></p>
        </div>
      </header>
    </div>
  </div>
</article>
