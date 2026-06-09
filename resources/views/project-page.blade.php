{{--
  Template Name: Project Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="bg-purple-800 text-white md:grid md:grid-cols-12 gap-x-[50px] px-[16px] md:px-[24px]">
      <div class="md:col-span-9 md:col-start-4 pt-[136px] md:pt-[144px] xl:pt-[148px] mb-[120px]">
        @include('partials.page-header')
        <p class="pb-[64px] !mb-[0px]">
          <? echo get_field('project_samenvatting', get_the_id()) ?>
        </p>
        {!! the_post_thumbnail('full', array('class' => 'img-fluid rounded-lg')) !!}
      </div>
    </div>

    <div class="md:grid md:grid-cols-12 gap-x-[50px] mt-[64px] mb-[128px]">
      <div class="md:col-span-9 md:col-start-4 xl:col-span-6 xl:col-start-4">
        @includeFirst(['partials.content-page', 'partials.content'])
      </div>
    </div>
  @endwhile
@endsection
