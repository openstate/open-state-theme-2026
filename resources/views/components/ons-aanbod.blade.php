<? // Kies 'ons-aanbod-work' voor op de 'werk met ons'-pagina of 'ons-aanbod-home' voor op de homepage ?>
@props([
  'variant' => 'ons-aanbod-work',
])

<x-dynamic-component :component="$variant" title="Tool implementatie" href="/werk-met-ons/tool-implementatie/">
  <p class="mb-0">Van lobbyregister tot begrotingsportaal: wij bouwen tools die werken. Open source, op maat, en met volledige overdracht aan jullie team.</p>
  <img class="h-full mt-auto mx-auto" src="{{ Vite::asset('resources/images/werk_met_ons_tool_implementatie.svg') }}" alt="">
</x-dynamic-component>
<x-dynamic-component :component="$variant" title="Advies & strategie" href="/werk-met-ons/advies-strategie/">
  <p class="mb-0">Een transparantie-roadmap die past bij jullie organisatie. Wij analyseren waar je staat, waar je naartoe wilt, en hoe je daar komt.</p>
  <img class="h-full mt-auto mx-auto" src="{{ Vite::asset('resources/images/werk_met_ons_advies_strategie.svg') }}" alt="">
</x-dynamic-component>
<x-dynamic-component :component="$variant" title="Training & workshops" href="/werk-met-ons/training-workshops/">
  <p class="mb-0">Van Woo-procedures tot open data-publicatie: praktische trainingen voor ambtenaren die het dagelijks moeten doen.</p>
  <img class="h-full mt-auto mx-auto" src="{{ Vite::asset('resources/images/werk_met_ons_training_workshops.svg') }}" alt="">
</x-dynamic-component>
<x-dynamic-component :component="$variant" title="Onderzoek & analyse" href="/werk-met-ons/onderzoek-analyse/">
  <p class="mb-0">Hoe transparant is jouw organisatie werkelijk? Wij doen transparantie-audits, lobby-inventarisaties en algoritme-toetsingen.</p>
  <img class="h-full mt-auto mx-auto" src="{{ Vite::asset('resources/images/werk_met_ons_onderzoek_analyse.svg') }}" alt="">
</x-dynamic-component>
<x-dynamic-component :component="$variant" title="Events & co-creatie" href="/werk-met-ons/events-co-creatie/">
  <p class="mb-0">Data-expedities, hackathons en expert meetups. Samen met journalisten, developers en ambtenaren werken aan concrete oplossingen.</p>
  <img class="h-full mt-auto mx-auto" src="{{ Vite::asset('resources/images/werk_met_ons_events_co-creatie.svg') }}" alt="">
</x-dynamic-component>
