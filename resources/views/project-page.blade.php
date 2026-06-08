{{--
  Template Name: Project Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="bg-purple-800 text-white grid grid-cols-12 gap-x-[50px]">
      <div class="col-span-9 col-start-4 mt-[148px] mb-[120px]">
        @include('partials.page-header')
        <p class="mb-[64px]">
          <? echo get_field('project_samenvatting', get_the_id()) ?>
        </p>
        {!! the_post_thumbnail('full', array('class' => 'img-fluid rounded-lg')) !!}
      </div>
    </div>

    <div class="grid grid-cols-12 gap-x-[50px] mt-[64px] mb-[128px]">
      <div class="col-span-8 col-start-4">
        @includeFirst(['partials.content-page', 'partials.content'])
      </div>
    </div>
  @endwhile
@endsection
