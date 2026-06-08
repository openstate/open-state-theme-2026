<header class="banner grid grid-cols-12 items-center pt-[24px] pb-[12px] px-[16px] md:px-[24px] bg-off-white-50">
  <a class="brand col-span-3" href="{{ home_url('/') }}">
    <img src="{{ Vite::asset('resources/images/open_state_foundation.svg') }}" alt="Open State Foundation">
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

  <div class="flex justify-end col-span-3">
    <x-button href="/nl/doneren/" text="Steun"/>
  </div>
</header>
