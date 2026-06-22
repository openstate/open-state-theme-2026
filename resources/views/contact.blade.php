{{--
  Template Name: Contact Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="bg-off-white-50 pt-[52px] md:pt-[84px] xl:pt-[104px] px-[16px] md:px-[24px] pb-[80px] md:pb-[100px] xl:pb-[120px]">
      <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-[32px]">
        <div class="order-2 xl:order-1 xl:col-span-6">
          <h1 class="hidden xl:block xl:mb-[56px] xl:text-[4rem]/[4.25rem] xl:tracking-[-0.0625px]">{!! get_the_title() !!}</h1>
          <h2 class="sr-only">Contactgegevens</h2>
          @include('partials.content-page')
        </div>
        <div class="order-1 xl:order-2 xl:col-span-6">
          <h1 class="xl:hidden mb-[40px] md:mb-[48px] text-[2.25rem]/[2.5rem] tracking-[-0.025rem] md:text-[3.25rem]/[3.5rem] md:tracking-[-0.05rem]">{!! get_the_title() !!}</h1>
          <h2 class="sr-only">Contactformulier</h2>
          {!! do_shortcode( '[contact-form-7 id="2346" title="Main Contact Form_NL"]' ) !!}
        </div>
      </div>
    </div>
  @endwhile
@endsection
