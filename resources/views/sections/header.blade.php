<?php // Note: the nav bg color is set in app.css ?>

@php
  $secondary_nav_colors = false;

  if (array_intersect(array('page-template-project-page', 'over-ons', 'error404', 'page-template-donate', 'page-template-work-with-us'), get_body_class())) {
    $secondary_nav_colors = true;
  }

  global $q_config;
  $qtx_lang = $q_config['language'];
  $q_config['language'] = 'nl';
@endphp

<header class="pt-[24px] pb-[12px] px-[16px] md:px-[24px] bg-off-white-50">
  <div class="mx-auto w-full max-w-[1920px] flex items-center gap-x-[72px]">
    <a class="flex-1" href="{{ home_url('/') }}">
      <img class="h-[20px]" src="{{ Vite::asset($secondary_nav_colors ? 'resources/images/open_state_foundation_white.svg' : 'resources/images/open_state_foundation.svg') }}" alt="Open State Foundation">
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
