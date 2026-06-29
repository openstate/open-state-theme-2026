{{--
  Template Name: Project Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="bg-purple-800 text-white md:grid md:grid-cols-12 gap-x-[50px] px-[16px] md:px-[24px] pt-[98px] md:pt-[110px]">
      <div class="md:col-span-9 md:col-start-4 pb-[80px] xl:pb-[120px]">
        <div class="mb-[16px] md:mb-[24px] xl:mb-[40px]">
          <h1 class="text-[1.75rem]/[2rem] tracking-[-0.0125rem] md:text-[2.75rem]/[3rem] md:tracking-[-0.0375rem] xl:text-[3.25rem]/[3.5rem] xl:tracking-[-0.8px]">{!! get_the_title() !!}</h1>
        </div>
        <div class="grid">
          {!! the_post_thumbnail('full', array('class' => 'md:order-3 rounded-lg')) !!}
          <p class="md:order-1 max-md:mt-[16px]">
            <? echo get_field('project_samenvatting', get_the_id()) ?>
          </p>
          @if ($project_url)
          <x-button class="md:order-2 md:mb-[40px] xl:mb-[64px]" variant="secondary" text="Bezoek {{ preg_replace('#^https?://(.*)/?$#', '$1', rtrim($project_url, '/')) }}" href="{{ $project_url }}" />
          @endif
        </div>
      </div>
    </div>

    <div class="md:grid md:grid-cols-12 gap-x-[50px] px-[16px] mt-[40px] mb-[80px] md:mt-[48px] xl:mt-[64px] xl:mb-[128px]">
      <div class="md:col-span-8 md:col-start-4 xl:col-span-6 xl:col-start-4">
        @includeFirst(['partials.content-page', 'partials.content'])

        @if ($project_url)
        <x-button class="mt-[48px]" text="Bezoek {{ preg_replace('#^https?://#', '', rtrim($project_url, '/')) }}" href="{{ $project_url }}" />
        @endif
      </div>
    </div>
  @endwhile
@endsection
