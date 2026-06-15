{{--
  Template Name: Project Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="bg-purple-800 text-white md:grid md:grid-cols-12 gap-x-[50px] px-[16px] md:px-[24px] pt-[98px] pt-[110px]">
      <div class="md:col-span-9 md:col-start-4 pb-[80px] xl:pb-[120px]">
        <div class="mb-[16px] md:mb-[24px] xl:mb-[40px]">
          <h1 class="text-[1.75rem]/[2rem] tracking-[-0.0125rem] md:text-[2.75rem]/[3rem] md:tracking-[-0.0375rem] xl:text-[3.25rem]/[3.5rem] xl:tracking-[-0.8px]">{!! get_the_title() !!}</h1>
        </div>
        <div class="grid">
          {!! the_post_thumbnail('full', array('class' => 'md:order-2 rounded-lg max-md:pb-[16px]')) !!}
          <p class="md:order-1 md:pb-[40px] xl:pb-[64px] mb-[0px]">
            <? echo get_field('project_samenvatting', get_the_id()) ?>
          </p>
        </div>
      </div>
    </div>

    <div class="md:grid md:grid-cols-12 gap-x-[50px] px-[16px] mt-[40px] mb-[80px] md:mt-[48px] xl:mt-[64px] xl:mb-[128px]">
      <div class="md:col-span-8 md:col-start-4 xl:col-span-6 xl:col-start-4">
        @includeFirst(['partials.content-page', 'partials.content'])
      </div>
    </div>
  @endwhile
@endsection
