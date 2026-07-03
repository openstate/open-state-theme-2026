<?php
/**
 * Kieswijzer 2023 tabel als shortcode [kieswijzer_2023].
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function kieswijzer_2023_shortcode() {
	wp_enqueue_script( 'kieswijzer' );

	return <<<'KIESWIJZER_2023_HTML'
<div class="overflow-x-auto rounded-lg border border-gray-300 shadow-sm">
  <table class="w-full min-w-160 border-collapse bg-white text-sm">
    <thead>
      <tr class="bg-gray-100 text-left">
        <th scope="col" class="w-1/4 border border-gray-300 px-3 py-2 font-semibold">Partij</th>
        <th scope="col" class="w-1/4 border border-gray-300 px-3 py-2 font-semibold">Woo / open overheid</th>
        <th scope="col" class="w-1/4 border border-gray-300 px-3 py-2 font-semibold" style="hyphens:auto">Lobby&shy;transparantie / belangen&shy;behartiging</th>
        <th scope="col" class="w-1/4 border border-gray-300 px-3 py-2 font-semibold">Algo&shy;ritmen / AI</th>
      </tr>
    </thead>
    <tbody class="[&>tr:nth-child(odd)]:bg-gray-50 [&>tr:hover]:bg-blue-50/60">

      <!-- VVD -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://www.vvd.nl/wp-content/uploads/2023/10/Verkiezingsprogramma-VVD-2023-2027.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">VVD</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>Geen standpunt</template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>Geen standpunt</template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Algoritmen worden gecontroleerd op transparantie, discriminatie en willekeur. Het gebruik van algoritmen in de publieke en private sector moet transparant zijn.&rdquo; (p. 79)</li>
              <li>&ldquo;Nederland moet zich daarom internationaal inzetten om afspraken te maken over het gebruik van AI door bedrijven en overheid. Gecombineerd met deze internationale afspraken is het van belang om de kennis over de kansen en gevaren van AI binnen de overheid uit te breiden.&rdquo; (p. 41)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Oranje, want de VVD pleit hier voor transparant gebruik van algoritmen, maar stelt geen concrete maatregelen voor, zoals het optimaliseren van het algoritmeregister. Ook noemt de VVD het belang van kennis over AI binnen de overheid, maar doet wederom geen concrete voorstellen om deze kennis te vergroten.</li>
            </ul>
          </template>
        </td>
      </tr>

      <!-- Volt -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://voltnederland.org/storage/doc/voltnederland_verkiezingsprogramma_2023.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">Volt</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Gesprekken en andere communicatie van bewindspersonen op overheidsapparaten (telefoons en computers) moeten automatisch worden opgeslagen. Chatverkeer moet makkelijk doorzoekbaar zijn, op basis van Europese (strikte) privacystandaarden en andere wettelijke belangen. De Noorse praktijk is hierin het voorbeeld.&rdquo; (p. 113)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Groen. Het overgrote deel van overheidscommunicatie vindt digitaal plaats, via chat of e-mail. Deze chats geven veel inzicht in de afwegingen en keuzes die ambtenaren en bestuurders maken in het vormgeven van beleid. Daarom is het belangrijk dat deze automatisch opgeslagen worden, zodat ze vervolgens makkelijk openbaar gemaakt kunnen worden. Ook helpt het automatisch opslaan van deze berichten bij het sneller beantwoorden van Woo-verzoeken.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;We voeren een lobbyverbod met afkoelperiode in voor uit dienst getreden topambtenaren en bewindspersonen. Het is niet integer voor oud-bewindspersonen en -topambtenaren om te lobbyen op de oude werkplek.&rdquo; (p. 113)</li>
              <li>&ldquo;De regels op het gebied van lobby, transparantie en integriteit moeten op iedere bestuurslaag in heel Nederland zo veel mogelijk gelijk worden getrokken. De toegang tot de macht mag voor lobbyisten op de ene plek niet veel laagdrempeliger zijn dan op de andere plek. Zo zorgen we voor een rechtvaardige toegang tot de macht voor iedereen.&rdquo;</li>
              <li>&ldquo;We starten met een verplicht register voor belangenvertegenwoordiging (lobbyregister) voor de overheid en het parlement. In dit register wordt door de overheid bijgehouden wie op welk moment toegang heeft tot welk besluitvormingsproces en wat het onderwerp van gesprek is geweest. Beleidsvoorstellen moeten een paragraaf bevatten waaruit duidelijk wordt welke keuzes op basis daarvan zijn gemaakt. Het register moet gemakkelijk toegankelijk, openbaar en online doorzoekbaar zijn.&rdquo; (p. 112)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Groen, want Volt stelt concrete maatregelen voor om transparantie en integriteit rondom belangenbehartiging in de politiek en het bestuur te bevorderen. Zo stelt Volt een afkoelperiode voor voor zowel bewindspersonen als topambtenaren en een lobbyregister waarin wordt bijgehouden welke partijen waarover hebben gesproken met bestuurders.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Iedereen moet inzage kunnen hebben in de informatie en algoritmes die door de overheid gebruikt worden. Daarvoor is het van belang dat we zo snel mogelijk overschakelen naar open standaarden en een verplicht algoritmeregister invoeren.&rdquo; (p. 117)</li>
              <li>&ldquo;AI en algoritmen die door de overheid en in de uitvoering gebruikt worden om beslissingen te nemen die invloed hebben op mensen, moeten verplicht getoetst worden aan grondrechten en ethische kaders.&rdquo; (p. 117)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Groen, want wederom stelt Volt hier concrete maatregelen voor om de transparantie rondom algoritmegebruik van overheidsinstanties te bevorderen, namelijk een verplicht algoritmeregister.</li>
            </ul>
          </template>
        </td>
      </tr>

      <!-- D66 -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://d66.nl/wp-content/uploads/2023/09/D66_VKP2023_2023-2027.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">D66</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>Geen standpunt</template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>Geen standpunt</template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Voor alle algoritmes die de overheid gebruikt, maken we de mensenrechtentoets op algoritmes verplicht v&oacute;&oacute;r gebruik. Bij gebruik van algoritmes is een regelmatige toets op vooroordelen nodig. Ook registratie in het Algoritmeregister van de algoritmes die de overheid inzet, wordt verplicht.&rdquo; (p. 119)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Groen, want D66 stelt hier een concrete maatregel voor dat inzicht in algoritmegebruik door de overheid moet vergroten; een verplicht algoritmeregister.</li>
            </ul>
          </template>
        </td>
      </tr>

      <!-- GL-PvdA -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://groenlinkspvda.nl/wp-content/uploads/2023/09/GL-PvdA-VKP-Ongenummerd-189.pdf" target="_blank" rel="noopener" class="font-medium whitespace-nowrap text-blue-700 underline-offset-2 hover:underline">GL-PvdA</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Alle overheidscommunicatie, informatie van organisaties die een overheidstaak vervullen, informatie die wordt gefinancierd met publiek geld en het (digitale) betalingsverkeer zijn breed toegankelijk voor mensen met een beperking of worden dat gemaakt.&rdquo; (p. 43)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Oranje. GroenLinks-PvdA noemt hier een belangrijk aspect van toegankelijke overheidsinformatie, namelijk dat het ook toegankelijk is voor mensen met een beperking. Toch wordt niet concreet gemaakt hoe deze informatie dan toegankelijk moet worden gemaakt.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;We volgen de adviezen van het Europese anticorruptie-orgaan GRECO op, zodat Nederland een voorloper in integriteit wordt.&rdquo; (p. 39)</li>
              <li>&ldquo;We stellen scherpe regels op over het schenken aan politieke partijen: maximaal &euro; 20.000 per persoon per jaar, bedragen boven de &euro; 1.000 worden openbaar gemaakt en zijn te herleiden tot een persoon. Schenkingen via een bedrijf of een stichting verbieden we. Bij politieke advertenties of advertenties die het publieke debat be&iuml;nvloeden is voortaan zichtbaar wie de betaler is.&rdquo; (p. 39)</li>
              <li>&ldquo;Het college Rechtspositie Politieke Ambtsdragers breiden we uit tot een onafhankelijke autoriteit die actief gaat handhaven op de naleving van de integriteitsregels en gedragscodes.&rdquo; (p. 39)</li>
              <li>&ldquo;Er komt een lobbyregister voor de Rijksoverheid waarin ambtenaren en politici vermelden met welke belangenorganisaties over welke onderwerpen contact is geweest voor het maken van beleid.&rdquo; (p. 39)</li>
              <li>&ldquo;In de eerste twee jaar dat bewindspersonen, Kamerleden en topambtenaren een nieuwe baan aanvaarden toetst het College Rechtspositie Politieke Ambtsdragers of er geen sprake is van belangenverstrengeling.&rdquo; (p. 39)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Groen, want GroenLinks-PvdA stellen een aantal concrete maatregelen voor om lobbytransparantie te bevorderen, zoals duidelijke regels rondom schenkingen, een lobbyregister, en de uitbreiding van het onafhankelijk College Rechtspositie Politieke Ambtdragers.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;We werken het nationale algoritmeregister, waarin alle algoritmen staan die overheden gebruiken, zo snel mogelijk bij.&rdquo; (p. 41)</li>
              <li>&ldquo;AI-systemen moeten veilig en transparant zijn, de mensenrechten respecteren, menselijke controle waarborgen en zo zuinig mogelijk omspringen met energie en grondstoffen.&rdquo;</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Oranje, want GroenLinks-PvdA spreekt zich uit voor transparant gebruik van algoritmen, maar het &lsquo;zo snel mogelijk bijwerken van het algoritmeregister&rsquo; geeft geen concrete handvatten. Wanneer is het register bijgewerkt? Wanneer alle overheidsinstanties die dat willen al hun algoritmen hebben gepubliceerd? Wanneer alle informatievelden ingevuld worden door overheidsinstanties?</li>
            </ul>
          </template>
        </td>
      </tr>

      <!-- NSC -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://storage.googleapis.com/groep-pieter-website/NSC_verkiezingsprogramma_2023_01.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">NSC</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Ook de sancties in en het toezicht op de Wet open overheid (Woo) worden aangescherpt.&rdquo; (p. 10)</li>
              <li>&ldquo;De minister-president, oftewel de minister van Algemene Zaken, wordt eindverantwoordelijk voor het borgen van de grondrechten en de democratische rechtsstaat, waaronder de uitvoering van de Wet open overheid en de zorg voor naleving van wetten door de overheid zelf. Wanneer de overheid zich niet aan deze wet houdt, wordt hij of zij hiervoor verantwoordelijk gehouden.&rdquo; (p. 10)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Oranje: &lsquo;aanscherpen van sancties in en toezicht op&rsquo; is niet concreet genoeg. NSC pleit voor scherpere sancties voor overheden wanneer ze de Woo niet toereikend uitvoeren, evenals een vorm van toezicht om de uitvoering van de Woo door overheden te controleren. De specifieke invulling van sancties en toezicht wordt niet genoemd.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;De Nederlandse politiek scoort slecht in de internationale vergelijking op integriteitsnormen. We voeren de aanbevelingen van Raad van Europa (GRECO) uit door de initiatiefnota die is opgesteld samen met VOLT om te zetten in wet- en regelgeving. Zo komt er een draaideurverbod, een afkoelperiode voor ministers en een lobbyregister.&rdquo; (p. 9)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Groen, want NSC maakt verbetering van lobbytransparantie concreet door een draaideurverbod, afkoelperiode en lobbyregister in te voeren.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Algoritmes worden steeds vaker ingezet als een zogenaamd objectieve manier van besluitvorming. Maar modellen worden door mensen geprogrammeerd met aannames en &lsquo;getraind&rsquo; met data. Als modellen worden gebruikt om besluiten te nemen en beleid te maken, moeten deze achterliggende data en aannames transparant zijn. Er komt een wetenschappelijke standaard over wanneer modellen gebruikt kunnen worden voor beleid en wanneer niet.&rdquo; (p. 9)</li>
              <li>&ldquo;Het huidige Algoritmeregister moet beter worden ingevuld; veel registraties bevatten nu geen zinvolle informatie over de werking van algoritmen. Algoritmen ten behoeve van de handhaving worden niet van het register uitgezonderd.&rdquo; (p. 62)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Groen, want NSC doet concrete voorstellen voor algoritmetransparantie; een landelijke standaard, verbetering van de informatiekwaliteit van het algoritmeregister en het includeren van handhavingsalgoritmen.</li>
            </ul>
          </template>
        </td>
      </tr>

      <!-- PVV -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://www.pvv.nl/images/2023/PVV-Verkiezingsprogramma-2023.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">PVV</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>Geen standpunt</template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>Geen standpunt</template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>Geen standpunt</template>
        </td>
      </tr>

      <!-- CDA -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://d14uo0i7wmc99w.cloudfront.net/CDA%20Verkiezingsprogramma.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">CDA</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>Geen standpunt</template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;We willen een lobbyverbod voor oud-ministers en een herziening van het integriteitsbeleid voor ambtenaren, bestuurders en volksvertegenwoordigers.&rdquo; (12.18.3., p. 90)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Groen, want lobbyverbod en nieuw integriteitsbeleid als acties voor meer lobbytransparantie. 'Herziening van het integriteitsbeleid' had verder uitgewerkt kunnen worden.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;De rechtsbescherming voor burgers bij geautomatiseerde besluitvorming door de overheid wordt versterkt via een recht op inzicht in de gegevens en de algoritmes die de overheid gebruikt. Het beroep tegen dit soort besluiten en de toetsbaarheid van onderliggende algoritmes wordt vereenvoudigd.&rdquo; (p. 89)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Oranje, want er worden geen concrete maatregelen genoemd. Hoe gaat het 'recht op inzicht' eruit zien? Hoe wordt het beroep vereenvoudigd? Ook wordt er niet gepleit voor een algoritmeregister.</li>
            </ul>
          </template>
        </td>
      </tr>

      <!-- SP -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://www.sp.nl/sites/default/files/sp_verkiezingsprogramma_2023-2027.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">SP</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Alle documenten van de overheid worden openbaar gemaakt, tenzij er een uitzonderlijke reden is om het geheim te houden. De Wet open overheid wordt binnen de vastgestelde normen uitgevoerd, zodat burgers en journalisten de overheid goed kunnen controleren.&rdquo; (p. 11)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Groen, want 'open, tenzij'.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Ministers en andere bestuurders moeten openheid geven over al hun contacten met lobbyisten.&rdquo; (p. 11)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Groen, want SP pleit voor transparantie rondom lobby. Ook al wordt hier niet expliciet een lobbyregister genoemd, uit de praktijk blijkt dat de SP inzet op een verplicht lobbyregister.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>Geen standpunt</template>
        </td>
      </tr>

      <!-- FVD -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://fvd.nl/FVD_het_programma_van_hoop_optimisme_en_herstel_2023-2027.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">FVD</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>Geen standpunt</template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>Geen standpunt</template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>Geen standpunt</template>
        </td>
      </tr>

      <!-- PvdD -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://assets.partijvoordedieren.nl/assets/algemeen/Verkiezingsprogramma-Partij-voor-de-Dieren-Tweede-Kamer-2023.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">PvdD</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;In principe is alle overheidsinformatie openbaar, toegankelijk en digitaal beschikbaar. De overheid is uiterst terughoudend bij het opleggen van vertrouwelijkheid of geheimhouding. Onderzoeksjournalisten en kritische burgers worden niet langer tegengewerkt maar geholpen om de overheid te controleren. De Wet open overheid (Woo) wordt strikt nageleefd. Dat betekent dat informatie sneller beschikbaar komt en minder informatie mag worden weggelakt.&rdquo; (p. 100)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Groen. De Partij voor de Dieren pleit voor het principe &lsquo;open, tenzij&rsquo;, het sneller beantwoorden van Woo-verzoeken en het terughoudend zijn met informatie lakken.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Op alle niveaus van bestuur en volksvertegenwoordiging komt een openbaar lobbyregister. Bestuursstukken zoals wetsvoorstellen en beleidsmaatregelen vermelden welke invloed lobbyisten op de voorstellen hebben gehad. Een onafhankelijke autoriteit houdt toezicht op de integriteit van lobbyisten en politici.&rdquo; (p. 100)</li>
              <li>&ldquo;Aanmelding in het lobbyregister wordt verplicht voor alle EU-instellingen. Zo worden alle contacten met belangenbehartigers tijdens totstandkoming van beleid inzichtelijk. De registratie wordt strikt gehandhaafd en de ingevoerde gegevens worden gecontroleerd. Dienstreizen door parlementari&euml;rs worden altijd betaald uit eigen budget, zonder financi&euml;le vergoeding door derde partijen.&rdquo; (p. 111)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Groen, concrete voorstellen zoals lobbyparagraaf, onafhankelijke autoriteit, lobbyregister.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Zelflerende systemen, waarbij computers besluiten nemen over mensen zonder menselijke inmenging, worden aan streng ethisch en privacytoezicht onderworpen. Ook wordt erop gelet of deze systemen discriminatoire besluiten nemen. De overheid gebruikt geen &lsquo;black box&rsquo;-algoritmes.&rdquo; (p. 104)</li>
              <li>&ldquo;Er komt een sterkere en openbare controle op het functioneren van de veiligheidsdiensten. Daarnaast moet duidelijk worden hoe de privacy van mensen gewaarborgd is in de algoritmes die de diensten gebruiken. Ook moet worden aangetoond dat de inzet van deze algoritmes niet leidt tot etnisch profileren.&rdquo; (p. 105)</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Oranje. Het is goed dat de overheid geen 'black-box'-algoritmes zal gebruiken, en dat er sterkere controle komt op de veiligheidsdiensten. Maar hoe de PvdD dit concreet voor elkaar wil krijgen wordt niet duidelijk.</li>
            </ul>
          </template>
        </td>
      </tr>

      <!-- CU -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://insite.christenunie.nl/l/library/download/urn:uuid:81ae811b-dc36-4c5e-b182-d93c7f7dbab6/verkiezingsprogramma+2023-2028+christenunie.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">CU</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Verder moeten Europese Wob-verzoeken sneller worden behandeld en moet het bereik worden uitgebreid naar onder meer SMS- en Whatsappverkeer.&rdquo;</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Oranje, alleen maar over EU en niet over NL.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Een transparante Unie is een voorwaarde voor draagvlak en duurzame acceptatie van Europese besluiten. Dit vraagt een beter lobbyregister en meer transparantie over de onderhandelingen tussen Europees Parlement en de Raad, bijvoorbeeld over agenda's en deelnemers van onderhandelingen.&rdquo;</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Oranje, want alleen maar over EU en niet over NL.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Er komen strenge regels over de kwaliteit en het type data dat gebruikt mag worden voor de training van automatisch gegenereerde beslismodellen. Training van modellen op generieke kenmerken (zonder oorzakelijk verband met de voorspelde waarde) wordt verboden. Organisaties die algoritmes gebruiken moeten inzichtelijk maken welke data gebruikt is om de algoritmes te trainen en welke afwegingen zijn gemaakt om discriminatie en ongelijke behandeling te voorkomen.&rdquo;</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Dit standpunt valt onder het kopje &lsquo;de digitale rechtsstaat&rsquo;, en heeft dus betrekking op het gebruik van algoritmen door overheidsorganisaties. De ChristenUnie biedt hier een aantal concrete maatregelen: scherpere regels, training van modellen en overheidsorganisaties moeten inzichtelijk maken hoe ze algoritmen gebruiken. Deze concrete standpunten pleiten voor meer transparantie rondom algoritmen, ook al wordt een algoritmeregister niet concreet genoemd.</li>
            </ul>
          </template>
        </td>
      </tr>

      <!-- BBB -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://boerburgerbeweging.nl/wp-content/uploads/2023/10/BBB_VERKIEZINGSPROGRAMMA_NOV2023_Corr5.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">BBB</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;De overheid moet haar eigen wetten ook respecteren, dus ook transparantie geven in het kader van de Wet Open Overheid (WOO). Als de rechter oordeelt dat aan een WOO-verzoek moet worden voldaan, dan voert de overheid dit uit.&rdquo;</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Groen, want BBB pleit voor het adequaat uitvoeren van de Woo.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;Nederlanders moeten beter kunnen begrijpen hoe de politiek hun belangen behartigt. We maken het beleids- en parlementair proces meer inzichtelijk voor burgers, zodat burgers ook zelf hun belangen beter kunnen (laten) behartigen.&rdquo;</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Oranje. BBB pleit voor meer inzicht in het beleidsproces, maar stelt niet concreet een lobbyregister voor.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            <b>Verkiezingsprogramma</b>
            <ul>
              <li>&ldquo;AI biedt ontzettend veel kansen maar ook risico&rsquo;s. Transparantie staat bij deze dan ook altijd voorop.&rdquo;</li>
            </ul>
            <b>Oordeel</b>
            <ul>
              <li>Oranje. Transparantie is inderdaad belangrijk, maar hoe wil de BBB dat uitvoeren?</li>
            </ul>
          </template>
        </td>
      </tr>

    </tbody>
  </table>
</div>
KIESWIJZER_2023_HTML;
}
add_shortcode( 'kieswijzer_2023', 'kieswijzer_2023_shortcode' );
