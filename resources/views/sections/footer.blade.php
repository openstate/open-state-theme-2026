<footer class="2xl:grid 2xl:grid-cols-12 content-info bg-purple-800 text-white px-[24px]">
  <div class="mx-auto w-full max-w-[1920px] 2xl:col-span-12 content-center">
    <div class="xl:flex xl:justify-between mt-[24px] mb-[48px] md:mb-[100px] xl:mb-[120px]">
      <div class="mb-[32px] flex gap-x-[12px]">
        <x-icon icon="simple-icons--mastodon" href="https://mastodon.nl/@openstate"/>
        <x-icon icon="simple-icons--bluesky" href="https://bsky.app/profile/openstate.eu"/>
        <x-icon icon="simple-icons--linkedin" href="https://www.linkedin.com/company/open-state-foundation/"/>
        <x-icon icon="simple-icons--github" href="https://github.com/openstate/"/>
      </div>

      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'echo'           => false,
          'items_wrap'     => '<ul id="footer-menu-list" class="grid grid-cols-12 xl:grid-none xl:flex list-none pl-0 mb-0 gap-x-[16px] xl:gap-x-[48px] gap-y-[40px]">%3$s</ul>',
        ]) !!}
      @endif
    </div>

    <div class="md:grid md:grid-cols-12 gap-x-[50px] mb-[28px]">
      <div class="md:col-span-4 max-md:mb-[10px]"><a class="text-white hover:text-pink transition no-open-state-underline" href="tel:0031203080567">+31 (0)20 3080567</a></div>
      <div class="md:col-span-4 max-md:mb-[10px] md:text-center"><a class="text-white hover:text-pink transition no-open-state-underline" href="mailto:contact@openstate.eu">contact@openstate.eu</a></div>
      <div class="md:col-span-4 md:text-end"><a class="text-white hover:text-pink transition no-open-state-underline" href="https://www.openstreetmap.org/node/3519368613">Kattenburgerstraat 5 – Gebouw 002 B, 1018 JA, Amsterdam</a></div>
    </div>

    <a href="/">
      <img class="w-full mb-[28px]" src="{{ Vite::asset('resources/images/open_state_foundation_white.svg') }}" alt="Open State Foundation">
    </a>

    <div class="flex justify-end pb-[24px] gap-x-[24px]">
      <div><a class="text-white hover:text-pink transition no-open-state-underline" href="/algemene-voorwaarden/">Algemene voorwaarden</a></div>
      <div><a class="text-white hover:text-pink transition no-open-state-underline" href="/privacy/">Privacy policy</a></div>
      <div><a class="text-white hover:text-pink transition no-open-state-underline" href="/responsible-disclosure">Responsible disclosure</a></div>
    </div>
  </div>
</footer>
