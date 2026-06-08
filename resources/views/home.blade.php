@extends('layouts.app')

@section('content')
  <div class="bg-off-white-50 pt-[52px] md:pt-[84px] pb-[100px]">
    <div class="mx-auto text-center max-w-[336px] md:max-w-[560px] xl:max-w-[640px]">
      <h1 class="font-serif text-[2.25rem] leading-[40px] tracking-[-0.4px] mb-[16px] md:text-[3.25rem] md:leading-[56px] md:tracking-[-0.8px] md:mb-[16px] xl:text-[4rem] xl:leading-[68px] xl:tracking-[-1px] xl:mb-[24px]">Zonder transparantie geen democratie</h1>
      <p>In a strong democracy, the government has no secrets. We believe in an open government where citizens, journalists, and civil servants have access to information they can trust and build upon.</p>
    </div>
  </div>

  @if (! have_posts())
    <x-alert type="warning">
      Sorry, geen resultaten gevonden.
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
