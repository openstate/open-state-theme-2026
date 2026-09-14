{{--
  Template Name: Work With Us - Tool Implementation Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="bg-purple-800 text-white px-[16px] md:px-[24px] pt-[88px] md:pt-[120px] pb-[80px] md:pb-[120px]">
      <div class="mx-auto w-full max-w-[1920px] xl:grid xl:grid-cols-12 gap-x-[16px]">
        <header class="xl:col-span-4 mb-[16px] md:mb-[24px] xl:mb-[40px]">
          <p class="font-sans text-pink text-[1.125rem]/[1.75rem] tracking-[-0.00625rem] md:text-[1.25rem]/[2rem] mb-[8px] md:mb-[16px]">Werk met ons</p>
          <h1 class="font-serif text-[2.25rem]/[2.5rem] tracking-[-0.025rem] md:text-[3.25rem]/[3.5rem] md:tracking-[-0.05rem] xl:text-[4rem]/[4.25rem] xl:tracking-[-0.0625rem] m-0">Tool implementatie</h1>
        </header>

        <div class="xl:col-span-6 xl:col-start-6">
          {!! the_post_thumbnail('full', array('class' => 'rounded-lg')) !!}
          <p class="mt-[40px] xl:mt-[56px] text-pink text-[1.125rem]/[1.75rem] tracking-[-0.00625rem] md:text-[1.25rem]/[2rem] md:tracking-[0rem] mb-0">
            Bouwen is een vak.
          </p>
          <p class="font-serif mt-[12px] md:mt-[16px] xl:mt-[20px] mb-0 text-[1.125rem]/[1.375rem] md:text-[1.5rem]/[2rem] md:tracking-[-0.00625rem] xl:text-[1.75rem]/[2rem] xl:tracking-[-0.0125rem]">
            Van concept tot werkende tool. Wij bouwen transparantie-instrumenten die passen bij jullie organisatie: lobbyregisters, begrotingsportalen, raadsinformatiesystemen en maatwerkoplossingen. Open source, volledig overdraagbaar, en gebouwd om te blijven.
          </p>
        </div>
      </div>
    </div>

    <?php // Herkenbaar ?>

    <div class="px-[16px] md:px-[24px] py-[40px] xl:py-[64px]">
      <div class="mx-auto w-full max-w-[1920px] xl:grid xl:grid-cols-12 xl:gap-x-[16px]">
        <div class="xl:col-span-4">
          <h2 class="mt-0 mb-[32px] text-[1.5rem]/[1.75rem] md:text-[1.625rem]/[2rem] md:tracking-[-0.0125rem] xl:text-[2rem]/[2.5rem] xl:tracking-[-0.025rem]">Herkenbaar?</h2>
        </div>
        <div class="xl:col-span-8 md:grid md:grid-cols-12 md:gap-x-[16px] gap-y-[48px]">
          <x-work-text title="Onbruikbare data">
            Jullie publiceren cijfers, maar niemand kan ermee werken. Een PDF is geen open data.
          </x-work-text>
          <x-work-text title="Vendor lock-in">
            Een externe partij bouwde iets en nam bij vertrek de kennis mee. Nu durft niemand het aan te raken.
          </x-work-text>
          <x-work-text title="Geen bouwcapaciteit">
            De opdracht ligt er, een lobbyregister of begrotingsportaal, maar de technische capaciteit ontbreekt intern.
          </x-work-text>
          <x-work-text title="Losse systemen">
            Tools die niet met elkaar praten, waardoor data steeds opnieuw handmatig wordt overgezet.
          </x-work-text>
        </div>
      </div>
    </div>

    <?php // Ons aanbod ?>

    <div class="px-[16px] md:px-[24px] py-[40px] xl:py-[64px]">
      <div class="mx-auto w-full max-w-[1920px] xl:grid xl:grid-cols-12 xl:gap-x-[16px]">
        <div class="xl:col-span-4">
          <h2 class="mt-0 mb-[32px] text-[1.5rem]/[1.75rem] md:text-[1.625rem]/[2rem] md:tracking-[-0.0125rem] xl:text-[2rem]/[2.5rem] xl:tracking-[-0.025rem]">Ons aanbod</h2>
        </div>
        <div class="xl:col-span-8 md:grid md:grid-cols-12 md:gap-x-[16px] gap-y-[16px]">
          <x-ons-aanbod-work-without-link title="Een werkende tool, live">
            Van lobbyregister tot begrotingsportaal, gebouwd op open standaarden en gekoppeld aan jullie systemen.
          </x-ons-aanbod-work-without-link>
          <x-ons-aanbod-work-without-link title="Volledige overdracht">
            Broncode op GitHub, technische documentatie en training, zodat jullie team het zelf beheert en doorontwikkelt.
          </x-ons-aanbod-work-without-link>
          <x-ons-aanbod-work-without-link title="Ondersteuning na oplevering">
            Drie tot zes maanden begeleiding, zodat de tool blijft werken zonder dat jullie afhankelijk worden.
          </x-ons-aanbod-work-without-link>
        </div>
      </div>
    </div>

    <?php // Waarom Open State? ?>

    <div class="px-[16px] md:px-[24px] pt-[40px] pb-[80px] xl:pt-[64px] xl:pb-[100px]">
      <div class="mx-auto w-full max-w-[1920px] xl:grid xl:grid-cols-12 xl:gap-x-[16px]">
        <div class="xl:col-span-4">
          <h2 class="mt-0 mb-[32px] text-[1.5rem]/[1.75rem] md:text-[1.625rem]/[2rem] md:tracking-[-0.0125rem] xl:text-[2rem]/[2.5rem] xl:tracking-[-0.025rem]">Waarom Open State?</h2>
        </div>
        <div class="xl:col-span-8 md:grid md:grid-cols-12 md:gap-x-[16px] gap-y-[48px]">
          <x-work-text title="10+ jaar ervaring">
            We werken sinds 2012 samen met overheden aan transparantie. Van ministeries tot kleine gemeenten.
          </x-work-text>
          <x-work-text title="Onafhankelijk">
            Geen commercieel belang. Wij werken vanuit een maatschappelijke missie, niet vanuit een verkooptarget.
          </x-work-text>
          <x-work-text title="Open source">
            Alles wat we bouwen is van jullie. Geen vendor lock-in, volledige overdracht, code op GitHub.
          </x-work-text>
          <x-work-text title="Praktisch">
            Werkende oplossingen, geen stoffige rapporten. Wij leveren tools die ambtenaren dagelijks gebruiken.
          </x-work-text>
        </div>
      </div>
    </div>

    <?php // Hoe we werken ?>

    <div class="bg-off-white-50 px-[16px] md:px-[24px] pt-[40px] md:pt-[80px] xl:pt-[64px] pb-[80px] md:pb-[120px]">
      <div class="mx-auto w-full max-w-[1920px] xl:grid xl:grid-cols-12 xl:gap-x-[16px]">
        <div class="xl:col-span-4">
          <h2 class="mt-0 mb-[32px] text-[1.5rem]/[1.75rem] md:text-[1.625rem]/[2rem] md:tracking-[-0.0125rem] xl:text-[2rem]/[2.5rem] xl:tracking-[-0.025rem]">Hoe we werken</h2>
        </div>
        <div class="xl:col-span-8 md:grid md:grid-cols-12 md:gap-x-[16px] gap-y-[32px] md:gap-y-[40px] xl:gap-y-[80px]">
          <x-work-how count="01" title="Kennismaking">
            Gratis en vrijblijvend. We bespreken jullie situatie en verkennen of en hoe we kunnen helpen.
          </x-work-how>
          <x-work-how count="02" title="Analyse">
            We brengen de huidige situatie in kaart: wat is er al, wat ontbreekt, waar liggen kansen?
          </x-work-how>
          <x-work-how count="03" title="Voorstel">
            Een concreet plan met aanpak, tijdlijn en kosten. Geen verrassingen.
          </x-work-how>
          <x-work-how count="04" title="Uitvoering">
            We werken samen met jullie team. Korte lijnen, vaste contactpersoon, tussentijdse updates.
          </x-work-how>
          <x-work-how count="05" title="Overdracht">
            Training, documentatie en ondersteuning. Jullie draaien het zelf verder.
          </x-work-how>
        </div>
      </div>
    </div>

    <?php // Ons eerder werk ?>

    <div class="px-[16px] md:px-[24px] pt-[48px] md:pt-[80px] xl:pt-[64px] pb-[80px] md:pb-[120px] xl:pb-[128px]">
      <div class="mx-auto w-full max-w-[1920px] xl:grid xl:grid-cols-12 xl:gap-x-[16px]">
        <div class="xl:col-span-4">
          <h2 class="mt-0 mb-[32px] text-[1.5rem]/[1.75rem] md:text-[1.625rem]/[2rem] md:tracking-[-0.0125rem] xl:text-[2rem]/[2.5rem] xl:tracking-[-0.025rem]">Ons eerder werk</h2>
        </div>
        <div class="xl:col-span-8 flex snap-x snap-mandatory items-stretch overflow-x-scroll">
          <img class="size-[4rem] mr-[40px] snap-start" src="{{ Vite::asset('resources/images/den_haag.png') }}" alt="Den Haag">
          <img class="size-[4rem] mr-[40px] snap-start" src="{{ Vite::asset('resources/images/amsterdam.png') }}" alt="Amsterdam">
          <img class="size-[4rem] mr-[40px] snap-start" src="{{ Vite::asset('resources/images/rijksoverheid.png') }}" alt="Rijksoverheid">
          <img class="size-[4rem] mr-[40px] snap-start" src="{{ Vite::asset('resources/images/cbs.png') }}" alt="CBS">
          <img class="size-[4rem] mr-[40px] snap-start" src="{{ Vite::asset('resources/images/vng.png') }}" alt="VNG">
          <img class="size-[4rem] mr-[40px] snap-start" src="{{ Vite::asset('resources/images/tweede_kamer.png') }}" alt="Tweede Kamer">
          <img class="size-[4rem] mr-[40px] snap-start" src="{{ Vite::asset('resources/images/noord-holland.png') }}" alt="Noord-Holland">
          <img class="size-[4rem] mr-[40px] snap-start" src="{{ Vite::asset('resources/images/nos.png') }}" alt="NOS">
          <img class="size-[4rem] mr-[40px] snap-start" src="{{ Vite::asset('resources/images/regiogroei.png') }}" alt="Regiogroei">
        </div>
        <div class="xl:col-span-12 flex gap-[24px] xl:gap-[32px] pt-[40px] md:pt-[56px] xl:pt-[64px] snap-x snap-mandatory items-stretch overflow-x-scroll">
          <x-work-case title="Debot — AI-politici in debat" bgColor="bg-blue-200" textColor="text-white" image="pixel_stretch_2.webp" logo1="bzk.png">
            Wat gebeurt er als je AI-modellen traint op Tweede Kamerdata en ze laat debatteren? Open State onderzocht de risico’s van generatieve AI voor de democratie en bracht de resultaten naar het podium.
          </x-work-case>
          <x-work-case title="Openbaarheidscentrum Amsterdam" bgColor="bg-purple-800" textColor="text-white" image="pixel_stretch_3.webp" logo1="amsterdam_text.png" logo2="">
            Open State hielp het Openbaarheidscentrum Amsterdam ontwerpen: de plek waar iedereen terecht kan met een informatievraag aan de gemeente. Van persona-onderzoek tot cultuurverandering bij ambtenaren.
          </x-work-case>
          <x-work-case title="Data-expedities" bgColor="bg-purple-100" textColor="text-purple-800" image="pixel_stretch_2.webp" logo1="cbs_text.svg" logo2="momus.png">
            Journalisten, data-analisten en CBS-experts samen aan tafel. In één dag van ruwe data naar journalistiek onderzoek. Open State organiseert de hackathons die de maatschappelijke waarde van overheidsdata zichtbaar maken.
          </x-work-case>
        </div>
      </div>
    </div>

    <?php // Plan gesprek met ons in ?>

    <div class="md:grid md:grid-cols-12 bg-cover bg-center bg-no-repeat h-[574px] md:h-[608px] xl:h-[664px] px-[16px] md:px-[24px]" style="background-image: url('{{ Vite::asset('resources/images/pixel_stretch.webp')}}')">
      <div class="md:col-span-8 md:col-start-3 relative z-10 flex flex-col items-center">
        <h2 class="text-center w-[250px] md:w-[400px] mt-[48px] md:mt-[80px] mb-[16px] mb-[40px] xl:mt-[120px] text-[1.75rem]/[2rem] md:text-[2.75rem]/[3rem] xl:text-[3.25rem]/[3.5rem] tracking-[-0.0125rem] md:tracking-[-0.0375rem] xl:tracking-[-0.05rem]">Plan een gesprek met ons in</h2>
        <x-button text="Boek" href="https://calendar.google.com/calendar/u/0/appointments/schedules/AcZssZ3QO37oJkzilfxHLZjqnwzXrNfAy0p8PZPZxlEBH4FHf0AtaHPmdKwD1AjnjtobsrIyaZhnWgan" target="_blank" />
      </div>
    </div>
  @endwhile
@endsection
