<?php // Note: the nav bg color is set in app.css ?>

@php
  $secondary_nav_colors = false;

  if (array_intersect(array('page-template-project-page', 'page-template-work-with-us'), get_body_class())) {
    $secondary_nav_colors = true;
  }
@endphp

<header class="banner grid grid-cols-12 items-center pt-[24px] pb-[12px] px-[16px] md:px-[24px] bg-off-white-50">
  <a class="brand col-span-10 xl:col-span-3 w-[237px]" href="{{ home_url('/') }}">
    <img src="{{ Vite::asset($secondary_nav_colors ? 'resources/images/open_state_foundation_white.svg' : 'resources/images/open_state_foundation.svg') }}" alt="Open State Foundation">
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary relative flex-grow flex justify-center col-span-6" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu([
        'theme_location' => 'primary_navigation',
        'menu_class'     => 'nav flex items-center gap-[72px]',
        'echo'           => false,
        'walker'         => new \App\View\Walkers\DropdownNavWalker(),
        'items_wrap'     => '<ul id="%1$s" class="%2$s" role="menubar" aria-label="Main navigation">%3$s</ul>',
      ]) !!}
    </nav>
  @endif

  <div class="flex justify-end col-span-2 xl:col-span-3 gap-4">
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

    <x-button class="hidden xl:grid"  href="/nl/doneren/" text="Steun ons" variant="{{ $secondary_nav_colors ? 'secondary' : 'primary' }}"/>
  </div>
</header>
