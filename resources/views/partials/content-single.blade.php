<article class="bg-off-white-50 grid grid-cols-12 pt-[146px] pb-[160px]" @php(post_class('h-entry'))>
  <div class="col-span-6 col-start-4">
    <header>
      <h1 class="p-name font-serif text-[2.75rem]/[3rem] tracking-[-0.0375rem] pb-[20px]">
        {!! $title !!}
      </h1>

      @include('partials.entry-meta')

      {!! the_post_thumbnail('full', array('class' => 'img-fluid rounded-lg mt-[20px]')) !!}
    </header>

    <div class="e-content mt-[66px]">
      @php(the_content())
    </div>

    @if ($pagination())
      <footer>
        <nav class="page-nav" aria-label="Page">
          {!! $pagination !!}
        </nav>
      </footer>
    @endif

  </div>
</article>
