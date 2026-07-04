<? // Kies 'ons-aanbod-work' voor op de 'werk met ons'-pagina of 'ons-aanbod-home' voor op de homepage ?>
@props([
  'variant' => 'ons-aanbod-work',
])

<x-dynamic-component :component="$variant" title="Tool implementatie">
  Van lobbyregister tot begrotingsportaal: wij bouwen tools die werken. Open source, op maat, en met volledige overdracht aan jullie team.
</x-dynamic-component>
<x-dynamic-component :component="$variant" title="Advies & strategie">
  Een transparantie-roadmap die past bij jullie organisatie. Wij analyseren waar je staat, waar je naartoe wilt, en hoe je daar komt.
</x-dynamic-component>
<x-dynamic-component :component="$variant" title="Training & workshops">
  Van Woo-procedures tot open data-publicatie: praktische trainingen voor ambtenaren die het dagelijks moeten doen.
</x-dynamic-component>
<x-dynamic-component :component="$variant" title="Onderzoek & analyse">
  Hoe transparant is jouw organisatie werkelijk? Wij doen transparantie-audits, lobby-inventarisaties en algoritme-toetsingen.
</x-dynamic-component>
<x-dynamic-component :component="$variant" title="Events & co-creatie">
  Data-expedities, hackathons en expert meetups. Samen met journalisten, developers en ambtenaren werken aan concrete oplossingen.
</x-dynamic-component>
