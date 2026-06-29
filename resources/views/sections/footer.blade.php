<footer class="2xl:grid 2xl:grid-cols-12 content-info bg-purple-800 text-white px-[24px]">
  <div class="mx-auto w-full max-w-[1920px] 2xl:col-span-12 content-center">
    @php(dynamic_sidebar('sidebar-footer'))

    <div class="pt-[24px] pb-[120px] flex gap-x-[12px]">
      <x-icon icon="simple-icons--mastodon" href="https://mastodon.nl/@openstate"/>
      <x-icon icon="simple-icons--bluesky" href="https://bsky.app/profile/openstate.eu"/>
      <x-icon icon="simple-icons--linkedin" href="https://www.linkedin.com/company/open-state-foundation/"/>
      <x-icon icon="simple-icons--github" href="https://github.com/openstate/"/>
    </div>

    <div class="md:grid md:grid-cols-12 gap-x-[50px] mb-[28px]">
      <div class="md:col-span-4 max-md:mb-[10px]"><a class="text-white" href="tel:0031203080567">+31 (0)20 3080567</a></div>
      <div class="md:col-span-4 max-md:mb-[10px] md:text-center"><a class="text-white" href="mailto:contact@openstate.eu">contact@openstate.eu</a></div>
      <div class="md:col-span-4 md:text-end"><a class="text-white" href="https://www.openstreetmap.org/node/3519368613">Kattenburgerstraat 5 – Gebouw 002 B, 1018 JA, Amsterdam</a></div>
    </div>

    <a href="/">
      <img class="w-full mb-[28px]" src="{{ Vite::asset('resources/images/open_state_foundation_white.svg') }}" alt="Open State Foundation">
    </a>

    <div class="flex justify-end pb-[24px] gap-x-[24px]">
      <div><a class="text-white" href="/nl/algemene-voorwaarden/">Algemene voorwaarden</a></div>
      <div><a class="text-white" href="/nl/privacy/">Privacy policy</a></div>
      <div><a class="text-white" href="/nl/responsible-disclosure">Responsible disclosure</a></div>
    </div>
  </div>
</footer>
