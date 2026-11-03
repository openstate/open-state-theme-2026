<div
  class="mobile-menu-wrapper"
  x-data="{ open: false }"
  x-trap.noscroll="open"
  @keydown.escape="open = false"
>
  <!-- Hamburger Button -->
  <button
    type="button"
    class="mobile-menu-toggle"
    @click="open = !open"
    :aria-expanded="open"
    aria-expanded="false"
    aria-controls="mobile-menu"
    aria-label="{{ __('Menu', 'sage') }}"
  >
    <span class="hamburger" aria-hidden="true">
      <span class="hamburger-line hamburger-line-top"></span>
      <span class="hamburger-line hamburger-line-bottom"></span>
    </span>
  </button>

  <!-- Mobile Menu -->
  <nav
    id="mobile-menu"
    tabindex="-1"
    class="mobile-menu"
    :class="{ 'is-open': open }"
    :inert="!open"
    inert
    aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}"
    @click="if ($event.target.closest('a')) open = false"
  >
    <div class="mobile-menu-inner">
      <div class="mobile-menu-content">
        {{ $slot }}
        <div class="flex justify-center">
          <x-button class="!grid" href="/doneren/" text="Steun ons" variant="{{ $secondaryNavColors ? 'secondary' : 'primary' }}"/>
        </div>
      </div>
    </div>
  </nav>
</div>
