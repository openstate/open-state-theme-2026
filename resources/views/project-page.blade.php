{{--
  Template Name: Project Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="bg-purple-800 text-white md:grid md:grid-cols-12 gap-x-[50px] px-[16px] md:px-[24px]">
      <div class="md:col-span-9 md:col-start-4 pt-[136px] md:pt-[144px] xl:pt-[148px] pb-[80px] xl:pb-[120px]">
        @include('partials.page-header')
        <div class="grid">
          {!! the_post_thumbnail('full', array('class' => 'md:order-2 img-fluid rounded-lg max-md:pb-[16px]')) !!}
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
