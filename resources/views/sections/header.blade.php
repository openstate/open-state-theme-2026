<?php // Note: the nav bg color is set in app.css ?>

@php
  $secondary_nav_colors = false;

  if (array_intersect(array('page-template-project-page', 'wie-we-zijn', 'error404', 'page-template-donate', 'page-template-work-with-us', 'page-template-work-with-us-tool-implementation', 'page-template-work-with-us-advice-strategy', 'page-template-work-with-us-training-workshops', 'page-template-work-with-us-research-analyses', 'page-template-work-with-us-events-co-creation'), get_body_class())) {
    $secondary_nav_colors = true;
  }

  global $q_config;
  $qtx_lang = $q_config['language'];
  $q_config['language'] = 'nl';
@endphp

<header class="pt-[24px] pb-[12px] px-[16px] md:px-[24px] bg-off-white-50">
  <div class="mx-auto w-full max-w-[1920px] flex items-center xl:gap-x-[72px]">
    <a href="{{ home_url('/') }}">
      <img class="h-[20px]" src="{{ Vite::asset($secondary_nav_colors ? 'resources/images/open_state_foundation_light.svg' : 'resources/images/open_state_foundation_dark.svg') }}" alt="Open State Foundation" width="232.433" height="20">
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary relative flex-grow flex justify-center" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class'     => 'nav flex items-center gap-[72px]',
          'echo'           => false,
          'walker'         => new \App\View\Walkers\DropdownNavWalker(),
          'items_wrap'     => '<ul id="%1$s" class="%2$s" role="menubar" aria-label="Main navigation">%3$s</ul>',
        ]) !!}
      </nav>
    @endif

    <div class="flex-1 flex justify-end">
      <!-- Search -->
      <form
        role="search"
        method="get"
        action="{{ esc_url(home_url('/')) }}"
        class="relative flex items-center mr-[4px] xl:mr-[20px]"
      >
        <label for="nav-search" class="sr-only">
          {{ $args['aria_label'] ?? __('Zoek naar:', 'sage') }}
        </label>
        <input
          id="nav-search"
          type="search"
          name="s"
          placeholder="{{ __('Zoeken…', 'sage') }}"
          required
          class="peer absolute top-1/2 right-full z-60 w-0 -translate-y-1/2 rounded-lg bg-white px-0 py-[12px] opacity-0 shadow-lg ring-1 ring-black/5 outline-none transition-all duration-300 ease-out
                 focus:w-56 focus:border-gray-300 focus:px-4 focus:opacity-100 bg-white
                 not-placeholder-shown:w-56 not-placeholder-shown:border-gray-300 not-placeholder-shown:px-4 not-placeholder-shown:opacity-100"
        >

        {{-- Shown while collapsed: opens the field --}}
        <label
          for="nav-search"
          class="ml-2 flex cursor-pointer rounded-full text-gray-700 hover:bg-gray-100
                 peer-focus:pointer-events-none peer-not-placeholder-shown:hidden"
        >
          <span class="sr-only">{{ __('Open zoekbalk', 'sage') }}</span>
          <span class="iconify size-5 xl:size-7 mdi--search"></span>
        </label>

        {{-- Shown while active: submits the search --}}
        <button
          type="submit"
          class="ml-2 hidden rounded-full text-gray-700 hover:bg-gray-100
                 peer-not-placeholder-shown:block peer-not-placeholder-shown:flex"
        >
          <span class="sr-only">{{ __('Zoek', 'sage') }}</span>
          <span class="iconify size-7 mdi--search"></span>
        </button>
      </form>

      <!-- Mobile Menu -->
      <x-mobile-menu :secondaryNavColors="$secondary_nav_colors">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class'     => 'mobile-nav',
            'echo'           => false,
            'items_wrap'     => '<ul id="mobile-menu-list" class="%2$s">%3$s</ul>',
          ]) !!}
        @endif
      </x-mobile-menu>

      <x-button class="hidden xl:grid"  href="/doneren/" text="Steun ons" variant="{{ $secondary_nav_colors ? 'secondary' : 'primary' }}" />
    </div>
  </div>
</header>

<? $q_config['language'] = $qtx_lang; // restore so the page body keeps its own language ?>
