{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="bg-purple-800 text-white px-[16px] md:px-[24px] pt-[48px] md:pt-[120px] pb-[80px] md:pb-[200px]">
      <div class="mx-auto w-full max-w-[1920px] md:grid md:grid-cols-12 xl:gap-x-[64px]">
        <div class="md:col-span-8 xl:col-span-6 mb-[16px] xl:mb-[40px] flex flex-col">
          <h1 class="font-serif text-[2.25rem]/[2.5rem] tracking-[-0.025rem] md:text-[3.25rem]/[3.5rem] md:tracking-[-0.05rem] xl:text-[4rem]/[4.25rem] xl:tracking-[-0.0625rem] m-0">Zonder transparantie geen democratie</h1>

          <span class="md:hidden absolute top-[100px] ml-[17.40%] bg-linear-[270deg,#FF29B4_0%,#3D1535_100%] w-[142px] h-[5px]"></span>

          <span class="hidden md:block xl:hidden absolute top-[120px] ml-[17.40%] bg-linear-[270deg,#FF29B4_0%,#3D1535_100%] w-[142px] h-[5px]"></span>
          <span class="hidden md:block xl:hidden absolute top-[178px] ml-[88%] bg-linear-[270deg,#3D1535_0%,#FF29B4_100%] w-[30px] h-[5px]"></span>
          <span class="hidden md:block xl:hidden absolute top-[445px] ml-[83%] bg-linear-[270deg,#3D1535_0%,#FF29B4_100%] w-[78px] h-[5px]"></span>

          <span class="hidden xl:block mt-[147px] ml-[21.75%] bg-linear-[270deg,#3D1535_0%,#FF29B4_100%] w-[170px] h-[5px]"></span>
          <span class="hidden xl:block mt-[63px] ml-[64.20%] bg-linear-[270deg,#3D1535_0%,#FF29B4_100%] w-[30px] h-[5px]"></span>
          <span class="hidden xl:block mt-[98px] ml-[30.82%] bg-linear-[270deg,#FF29B4_0%,#3D1535_100%] w-[186px] h-[5px]"></span>
          <span class="hidden xl:block absolute top-[750px] ml-[1.2%] bg-linear-[270deg,#FF29B4_0%,#3D1535_100%] w-[85px] h-[5px]"></span>
          <span class="hidden xl:block absolute top-[820px] ml-[25%] bg-linear-[270deg,#3D1535_0%,#FF29B4_100%] w-[78px] h-[5px]"></span>
        </div>

        <div class="md:col-span-8 xl:col-span-6 xl:h-[520px] flex flex-col">
          <span class="hidden xl:block mt-[67px] ml-[22.36%] bg-linear-[270deg,#FF29B4_0%,#3D1535_100%] w-[85px] h-[5px]"></span>
          <p class="xl:w-[65%] mt-[12px] md:mt-[16px] xl:mt-auto mb-[40px] md:mb-[56px] tracking-[-0.00625rem] xl:text-[1.125rem]/[1.75rem] xl:tracking-[-0.00625rem]">
            Open State Foundation is een onafhankelijke stichting die zich inzet voor een digitaal transparante en controleerbare overheid. Sinds 2012 bouwen we tools, doen we onderzoek en adviseren we overheden — altijd vanuit de overtuiging dat een sterke democratie begint bij openheid.
          </p>
          <x-button type="button" text="Lees hele verhaal" icon="plus" variant="secondary" onclick="document.getElementById('verhaal').showModal()" arialabel="dialog" />
          <div class="relative">
            <span class="md:hidden absolute top-[-56px] ml-[60%] bg-linear-[270deg,#FF29B4_0%,#3D1535_100%] w-[100px] h-[5px]"></span>
            <span class="md:hidden absolute top-[40px] ml-[12%] bg-linear-[270deg,#3D1535_0%,#FF29B4_100%] w-[143px] h-[5px]"></span>

            <span class="hidden md:block xl:hidden absolute top-[75px] ml-[12%] bg-linear-[270deg,#3D1535_0%,#FF29B4_100%] w-[143px] h-[5px]"></span>
            <span class="hidden md:block xl:hidden absolute top-[132px] ml-[70%] bg-linear-[270deg,#FF29B4_0%,#3D1535_100%] w-[215px] h-[5px]"></span>
          </div>
          <span class="hidden xl:block absolute top-[810px] ml-[18%] bg-linear-[270deg,#3D1535_0%,#FF29B4_100%] w-[215px] h-[5px]"></span>
          <x-popup title="Een overheid <span class='text-pink'>zonder geheimen</a>" id="verhaal">
            <p>In een sterke democratie heeft de overheid geen geheimen. Wij geloven in een open overheid waarbij burgers, journalisten en ambtenaren toegang hebben tot informatie om op te kunnen vertrouwen en op te kunnen bouwen.</p>

            <p>Wij zetten ons in voor een overheid die open, efficiënt en controleerbaar is. Door overheidsinformatie te ontsluiten en toegankelijk te maken maken we van transparantie een krachtig instrument voor een sterke democratie.</p>

            <p>We zijn een klein team van experts op het snijvlak van technologie, beleid en journalistiek. Ons werk raakt aan alles: van gemeentebegrotingen tot lobbyagenda’s, van verkiezingsdata tot algoritmes. Wat ons drijft: overheidsinformatie die voor iedereen toegankelijk en begrijpelijk is.</p>
          </x-popup>
        </div>
      </div>
    </div>

    <?php // Hier staan we voor ?>

    <div class="px-[16px] md:px-[24px] py-[40px] md:pt-[64px] xl:py-[64px]">
      <div class="mx-auto w-full max-w-[1920px] md:grid md:grid-cols-12 xl:gap-x-[16px]">
        <div class="md:col-span-4 flex">
          <h2 class="my-auto max-md:mb-[40px] text-[1.5rem]/[1.75rem] md:text-[1.625rem]/[2rem] md:tracking-[-0.0125rem] xl:text-[2rem]/[2.5rem] xl:tracking-[-0.025rem]">Hier staan we voor:</h2>
        </div>
        <div class="md:col-span-8 md:grid md:grid-cols-12 md:gap-x-[16px] gap-y-[32px]">
          <x-about-text title="We ontsluiten">
            We maken overheidsinformatie machineleesbaar, doorzoekbaar en herbruikbaar.
          </x-about-text>
          <x-about-text title="We creëren">
            We bouwen tools die transparantie tastbaar maken: van begrotingsportalen tot lobbyregisters.
          </x-about-text>
          <x-about-text title="We adviseren">
            We helpen overheden hun transparantie-ambities waar te maken. Praktisch en op maat.
          </x-about-text>
          <x-about-text title="We zijn onafhankelijk">
            Geen commercieel belang, geen politieke kleur. Onze missie is ons kompas.
          </x-about-text>
          <x-about-text title="We zijn activistisch">
            Confronterend waar nodig. Als openheid uitblijft, laten we van ons horen.
          </x-about-text>
          <x-about-text title="We zijn betrouwbaar">
            Feitelijk, onderbouwd en transparant over ons eigen werk. We prediken wat we praktiseren.
          </x-about-text>
          <x-about-text title="We maken toegankelijk">
            Niet alleen data publiceren, maar begrijpelijk en bruikbaar maken voor iedereen.
          </x-about-text>
          <x-about-text title="We bouwen tools">
            Open source, overdraagbaar, gebouwd om te blijven. Technologie in dienst van democratie.
          </x-about-text>
          <x-about-text title="We zijn partner">
            We werken sámen met overheden, journalisten en burgers. Constructief waar mogelijk.
          </x-about-text>
        </div>
      </div>
    </div>

    <?php // Het team ?>

    <div class="px-[16px] md:px-[24px] py-[40px] md:py-[48px] xl:py-[64px]">
      <div class="mx-auto w-full max-w-[1920px] md:grid md:grid-cols-12 xl:gap-x-[16px]">
        <div class="md:col-span-4">
          <h2 class="m-0 max-md:mb-[32px] text-[1.5rem]/[1.75rem] md:text-[1.625rem]/[2rem] md:tracking-[-0.0125rem] xl:text-[2rem]/[2.5rem] xl:tracking-[-0.025rem]">Het team</h2>
        </div>
        <div class="md:col-span-8 grid grid-cols-12 gap-x-[16px] gap-y-[32px]">
          <x-about-person name="Brechje Huisma" function="Projectcoördinator" image="brechje">
            <b>Sicco van Sas</b> (<a href="mailto:sicco@openstate.eu">e-mail</a>, <a href="https://todon.nl/@sicco" target="_blank" rel="me noopener">mastodon</a>, <a href="https://github.com/siccovansas" target="_blank" rel="noopener">github</a>) kwam in 2012 bij ons binnen als stagiair voor zijn masterscriptie Artificial Intelligence. Daarna bleef hij in zijn vrije tijd betrokken bij de stichting. Zo won hij met zijn team de <a href="https://www.hackdeoverheid.nl/apps-hackathon-publieke-omroep/">Hackathon Publieke Omroep in 2013</a>. Sinds 2015 werkt hij bij Open State als developer. Sicco houdt van het openen en analyseren van data en heeft aan vele projecten gewerkt die daaraan bijdragen. Tijdens May Contain Hackers 2022 sprak hij op het hoofdpodium: <a href="https://media.ccc.de/v/mch2022-203-democracy-eventually-digitally-transparent-" target="_blank" rel="noopener">Democracy: Eventually Digitally Transparent?</a>.
          </x-about-person>
          <x-about-person name="Brechje Huisma" function="Projectcoördinator" image="brechje" />
          <x-about-person name="Brechje Huisma" function="Projectcoördinator" image="brechje" />
          <x-about-person name="Brechje Huisma" function="Projectcoördinator" image="brechje" />
          <x-about-person name="Brechje Huisma" function="Projectcoördinator" image="brechje" />
          <x-about-person name="Brechje Huisma" function="Projectcoördinator" image="brechje" />
          <x-about-person name="Brechje Huisma" function="Projectcoördinator" image="brechje" />
        </div>
      </div>
    </div>
  @endwhile
@endsection
