<article class="md:grid md:grid-cols-12 xl:grid-cols-12 px-[16px] pt-[146px] pb-[100px] xl:pb-[160px]" @php(post_class('h-entry'))>
  <div class="md:col-span-8 md:col-start-3 xl:col-span-6 xl:col-start-4">
    <header>
      <h1 class="p-name font-serif text-[1.5rem]/[1.75rem] tracking-[-0.00625rem] md:text-[2.25rem]/[2.5rem] md:tracking-[-0.025rem] xl:text-[2.75rem]/[3rem] xl:tracking-[-0.0375rem] pb-[20px]">
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
