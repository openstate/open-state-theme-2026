<div class="mobile-menu-wrapper" x-data="{ open: false }" @keydown.escape="open = false">
  <!-- Hamburger Button -->
  <button
    type="button"
    class="mobile-menu-toggle"
    @click="open = !open"
    :aria-expanded="open"
    aria-label="Toggle navigation menu"
    aria-controls="mobile-menu"
  >
    <span class="hamburger" aria-hidden="true">
      <span class="hamburger-line hamburger-line-top"></span>
      <span class="hamburger-line hamburger-line-bottom"></span>
    </span>
  </button>

  <!-- Mobile Menu -->
  <nav
    id="mobile-menu"
    class="mobile-menu"
    :class="{ 'is-open': open }"
    :aria-hidden="!open"
    aria-label="Mobile navigation"
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
