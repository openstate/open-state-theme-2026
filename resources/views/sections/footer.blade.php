<footer class="content-info bg-purple-800 text-white px-[24px]">
  @php(dynamic_sidebar('sidebar-footer'))

  <div class="pt-[24px] pb-[120px] flex gap-x-[12px]">
    <x-icon icon="simple-icons--mastodon" href="https://mastodon.nl/@openstate"/>
    <x-icon icon="simple-icons--bluesky" href="https://bsky.app/profile/openstate.eu"/>
    <x-icon icon="simple-icons--linkedin" href="https://www.linkedin.com/company/open-state-foundation/"/>
    <x-icon icon="simple-icons--github" href="https://github.com/openstate/"/>
  </div>

  <div class="grid grid-cols-12 gapx-[50px] mb-[28px]">
    <div class="col-span-4"><a href="tel:0031203080567">020-3080567</a></div>
    <div class="col-span-4 text-center"><a href="mailto:contact@openstate.eu">contact@openstate.eu</a></div>
    <div class="col-span-4 text-end"><a href="https://www.openstreetmap.org/node/3519368613">Kattenburgerstraat 5 – Gebouw 002 B, 1018 JA, Amsterdam</a></div>
  </div>

  <img class="w-full mb-[28px]" src="{{ Vite::asset('resources/images/open_state_foundation_white.svg') }}" alt="Open State Foundation">

  <div class="flex justify-end pb-[24px] gap-x-[24px]">
    <div><a href="/nl/algemene-voorwaarden/">Algemene voorwaarden</a></div>
    <div><a href="/nl/privacy/">Privacy policy</a></div>
    <div><a href="/nl/responsible-disclosure">Responsible disclosure</a></div>
  </div>
</footer>
