<?php
/**
 * Kieswijzer 2024 tabel als shortcode [kieswijzer_2024].
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function kieswijzer_2024_shortcode() {
	wp_enqueue_script( 'kieswijzer' );

	$html = <<<'KIESWIJZER_2024_HTML'
<div class="overflow-x-auto rounded-lg border border-gray-300 shadow-sm" style="width:0;min-width:100%;">
  <table class="w-full min-w-160 border-collapse bg-white text-sm">
    <thead>
      <tr class="bg-gray-100 text-left">
        <th scope="col" class="w-1/4 border border-gray-300 px-3 py-2 font-semibold">Partij</th>
        <th scope="col" class="w-1/4 border border-gray-300 px-3 py-2 font-semibold">Transparantie van bestuur / besluitvorming</th>
        <th scope="col" class="w-1/4 border border-gray-300 px-3 py-2 font-semibold" style="hyphens:auto">Lobby&shy;transparantie / belangen&shy;behartiging</th>
        <th scope="col" class="w-1/4 border border-gray-300 px-3 py-2 font-semibold">Algo&shy;ritmen / AI</th>
      </tr>
    </thead>
    <tbody class="[&>tr:nth-child(odd)]:bg-gray-50 [&>tr:hover]:bg-blue-50/60">

      <!-- GL-PvdA -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://groenlinkspvda.nl/wp-content/uploads/2024/05/vkep2024definitief.pdf" target="_blank" rel="noopener" class="font-medium whitespace-nowrap text-blue-700 underline-offset-2 hover:underline">GL-PvdA</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p><b>2.1.4 Mediavrijheid.</b> De Europese wet voor mediavrijheid moet persvrijheid, pluraliteit van het medialandschap en transparantie over media-eigendom verbeteren. Journalisten en hun omgeving mogen niet bespioneerd worden bij hun werk en niet belemmerd worden door rechtszaken op oneigenlijke gronden (SLAPPs). EU-initiatieven voor onafhankelijke kwaliteitsmedia moeten steun bieden in landen waar de mediavrijheid onder druk staat. Bij overnames van mediabedrijven in de EU kijken we kritisch naar de impact daarvan op het medialandschap, om eenzijdige imperiums van mediamagnaten tegen te gaan.</p>
            <p><b>2.2.8 Buitenlandse beïnvloeding en antidemocratische bewegingen.</b> Om de opkomst van ultraconservatieve en antidemocratische bewegingen die de rechten van vrouwen en minderheden in willen perken tegen te gaan, is meer onderzoek nodig naar de strategieën en financiering van deze bewegingen. Op basis van deze onderzoeken nemen we maatregelen, zoals aangescherpte transparantie- en financieringsregels voor politieke partijen. Er mag geen EU-geld gaan naar organisaties die het Handvest van de grondrechten van de EU niet respecteren.</p>
            <p><b>2.4.7 Financiële transparantie en toezicht.</b> We voeren verplichte financiële declaraties in voor Europarlementariërs en Eurocommissarissen. Om transparantie te bevorderen en corruptie tegen te gaan, registreren we de bezittingen van Europarlementariërs en Eurocommissarissen aan het begin en aan het einde van hun termijn. Zij worden ook verplicht een verantwoording van hun onkostenvergoeding openbaar te maken, die alleen bedoeld is om werkgerelateerde kosten in hun lidstaat te dekken. Niet-besteed geld moet worden teruggestort.</p>
            <p><b>2.4.9 Transparantie.</b> De Europese wetgevingsprocedure wordt transparanter door documenten uit de onderhandelingen en verslagen uit de Raadswerkgroepen openbaar te maken, net als verslagen van de Raad. Ook verbeteren we de Europese wet openbaarheid bestuur (Eurowob) en breiden we deze wet uit naar alle EU-instellingen. Actieve openbaarmaking van documenten via toegankelijke platforms wordt de regel.</p>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p><b>2.4.6 Schimmige lobby aanpakken.</b> Er komt één nieuw verplicht lobbyregister dat gaat gelden voor het Europees Parlement, de Europese Commissie en de Raad, inclusief Permanente Vertegenwoordigingen. Iedere Europese wet krijgt een appendix waarin staat welke lobbyisten input hebben gegeven. We schaffen toegangspassen af waarmee lobbyisten te pas en te onpas het Europees Parlement in- en uitlopen. De EU neemt maatregelen tegen de grote invloed van fossiele lobby op Europese besluitvorming en internationale klimaatonderhandelingen, net zoals dat het geval is bij tabakslobby.</p>
            <p><b>2.4.3 Belangenverstrengeling tegengaan.</b> We scherpen de gedragscode voor Europarlementariërs aan, inclusief een verbod op betaalde bijbanen, om belangenverstrengeling tegen te gaan. Toezicht op deze gedragscode wordt verscherpt. Er komt daarnaast een verbod en streng toezicht op draaideurlobbyisme van oud-Europarlementariërs, Eurocommissarissen en ministers. Bij vertrek naar de private sector werken we met afkoelperiodes voor afzwaaiende Europarlementariërs en andere EU-functionarissen.</p>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p><b>2.3.9 Bescherming internetgebruikers.</b> We bouwen aan een internet waar je niet wordt gevolgd en waar je data niet wordt verkocht aan de hoogste bieder. Zelfbeschikking en privacy staan voorop. We maken ons hard voor een verbod op de handel in en met persoonsgegevens, zoals het real-time bidding voor online advertenties. We stoppen online tracking voor gepersonaliseerde advertenties en gaan over naar privacyvriendelijke alternatieven. Gepersonaliseerde algoritmen op basis van tracking moeten standaard uit staan, en op termijn worden verboden. Gebruikers moeten meer controle en keuze krijgen over wat zij online zien krijgen en uit andere algoritmes kunnen kiezen. Platforms moeten stoppen met het illegale “pay or okay” model.</p>
            <p><b>We pakken de regie terug in het digitale domein met sterke en duidelijke regels die mensen, de maatschappij en het milieu vooropstellen in plaats van winstbejag.</b> Zo doorbreken we de macht van grote techbedrijven uit de VS en China en bouwen de Europese afhankelijkheid daarvan af. Door leiderschap te tonen, kan Europa de standaard zetten voor de rest van de wereld. Want hoewel digitalisering en nieuwe technologie ons leven kunnen verrijken, kennen ze ook veel keerzijden. Door onze eigen voorwaarden te stellen aan nieuwe technologieën als kunstmatige intelligentie (AI), zorgen we ervoor dat deze technologieën betrouwbaar, veilig en milieuvriendelijk zijn. Door te bouwen aan alternatieven versterken we ook onze strategische autonomie. <b>We maken de EU zo snel mogelijk digitaal autonoom.</b> We zijn dan voor essentiële digitale infrastructuur niet langer afhankelijk van techbedrijven.</p>
            <p><b>Dit vergt ook striktere regels voor sociale media.</b> Omdat hun verdienmodel drijft op reclame-inkomsten doen ze er alles aan om gebruikers aan hun scherm gebonden te houden. De onderliggende algoritmes die bepalen wat wij te zien krijgen, zijn sterk verslavend en jagen desinformatie, haat en polarisatie aan. Online én offline heeft dit grote gevolgen voor zowel individuele personen als onze democratie. Denk aan bedreigingen van politici en journalisten, steeds extremer maatschappelijk debat, en beïnvloeding van verkiezingen. Alleen door Europees samen te werken kunnen we de polariserende algoritmes en verslavende trucjes van sociale media aan banden leggen.</p>
            <p><b>1.2.17 Zuinig met data en rekenkracht.</b> We stellen strenge eisen aan datacentra om een zuinig gebruik van stroom, grondstoffen, water en ruimte af te dwingen en hergebruik van restwarmte te bevorderen. Er komen duurzaamheidsstandaarden voor digitale toepassingen, om te voorkomen dat de groei van datacentra door het dak gaat. Nieuwe ecodesignregels leggen het gebruik van data en rekenkracht voor kunstmatige intelligentie (AI), online advertenties, video’s en games, slimme apparaten, software en cryptomunten aan banden. We bevorderen de ontwikkeling van ultra-efficiënte chips en halfgeleiders, maar nieuwe toepassingen mogen niet leiden tot een explosie van energie- en grondstoffenverbruik. Ook krijgen ICT-producten een verplicht milieulabel.</p>
            <p><b>2.3.4 Kunstmatige intelligentie (AI) reguleren.</b> We handhaven de AI-wet streng en zorgen ervoor dat lidstaten deze snel implementeren. De wet bevat regels voor kunstmatige intelligentie met hoog risico, zoals op scholen, bij zorgverzekeraars, bij banken en bij overheden, en regels voor AI-systemen getraind op heel veel data, zoals ChatGPT en chatbots. Ook komt er een mensenrechtentoets. AI-systemen die deepfakes, afbeeldingen, teksten en geluidsfragmenten genereren, geven deze straks automatisch een herleidbaar watermerk of label. Zo valt te verifiëren of een afbeelding niet 'echt' is.</p>
          </template>
        </td>
      </tr>

      <!-- VVD -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://www.vvd.nl/wp-content/uploads/2024/03/Verkiezingsprogramma-EP-VVD-2024-2029-Februari.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">VVD</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>
            Geen standpunt
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>
            Geen standpunt
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p><b>De Europese Unie zet zich in om de internationale uitwisseling van data te bevorderen door bilaterale adequacy-besluiten,</b> alsmede door het gezamenlijk optrekken met gelijkgezinde partners bij de ontwikkeling van wet- en regelgeving op het gebied van kunstmatige intelligentie, cloud en data.</p>
            <p>Kunstmatige intelligentie werkt op basis van algoritmes die zelfstandig keuzes kunnen maken. Om ervoor te zorgen dat de mens bepalend blijft, en niet AI, blijft de Europese Unie wet- en regelgeving maken op het gebied van Kunstmatige Intelligentie en de transparantie van het algoritme zodat wij een voorloper blijven op dit gebied. <b>Het is belangrijk dat er transparantie is en blijft over wat met kunstmatige intelligentie is gecreëerd.</b> Daar zet de VVD zich dus vol voor in.</p>
            <p>Om Europese tech-start-ups en -scale-ups te ondersteunen in hun ontwikkeling, moet <b>het verantwoord gebruik van kunstmatige intelligentie worden gestimuleerd</b> en een belangrijk onderdeel blijven uitmaken van Europees onderzoek en innovatieprogramma’s.</p>
          </template>
        </td>
      </tr>

      <!-- CDA -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://d14uo0i7wmc99w.cloudfront.net/CDA-24357-Verkiezingsprogramma%20Europa-DEFINITIEVEVERSIE.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">CDA</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p>1.1.5. Transparantie en anti-corruptie binnen alle Europese instellingen worden versterkt door de oprichting van een onafhankelijke autoriteit.</p>
            <p>2.3.9. Belastingheffing blijft een nationale aangelegenheid. Belastingontwijking en -ontduiking in internationaal en Europees verband pakken we aan. Besluitvorming die plaatsvindt in de Europese gedragscodegroep die zich bezighoudt met het aanpakken van schadelijke belastingconcurrentie in Europa moet transparanter.</p>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>
            Geen standpunt
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            <p>2.5.2 De EU zet zich in voor transparantie, verantwoordelijkheid en eerlijkheid in AI- systemen en representatieve en inclusieve trainingsdata (gegevens die de systemen gebruiken om patronen te herkennen en reacties te produceren).</p>
            <p>2.5.3 De EU moet ook de kansen van AI en quantumtechnologie op waarde schatten en investeren in verantwoorde innovatie en publiek-private samenwerking voor een soepele implementatie van AI-oplossingen en efficiëntere publieke diensten. Het CDA wil kleine bedrijven, startups en onderzoeksinstanties hierbij ondersteunen, onder meer zodat AI de positie van het mkb niet verslechtert ten opzichte van grote bedrijven.</p>
            <p>2.5.4. We benutten de kansen van AI in een wereld waar de aard van criminele activiteiten zich voortdurend ontwikkelt. Wetshandhaving moet gebruik kunnen maken van gezichtsherkenningstechnologie in openbare ruimtes voor zeer specifieke doeleinden, zoals het opsporen van een vermist kind.</p>
          </template>
        </td>
      </tr>

      <!-- D66 -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://d66.nl/europa/wp-content/uploads/sites/434/2024/04/2024_15april_VKP%E2%80%94EP%E2%80%942024_interactief.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">D66</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p>In een volwaardige democratie zijn de politieke en bestuurlijke macht integer en transparant. De recente zogenoemde Qatargate over corruptie bij het Europees Parlement laat zien dat de Europese democratie kwetsbaar is voor beïnvloeding door buitenlandse actoren en commerciële belangen. Daarom maken wij transparant hoe besluiten tot stand komen en wie daar invloed op uitoefenen.</p>
            <p><b>Transparantie van besluitvorming</b> is essentieel voor parlementen en de media om hun functie uit te kunnen oefenen. Ondoorzichtige, informele onderhandelingen tussen de Raad van de Europese Unie, de Europese Commissie en het Parlement – de zogeheten trilogen – worden daarom beperkt. Alleen in een derde lezing, na een open en transparant proces, zijn trilogen een laatste redmiddel. Alle informatie rond besluitvorming is openbaar, tenzij daar legitieme redenen tegen zijn.</p>
            <p>Om journalisten en burgers in staat te stellen het Europees bestuur effectief te<br /> controleren, moet het makkelijker en sneller worden om openbaarheid van bestuur te krijgen op Europees niveau. Daarom herzien we de Europese verordening op openbaarheid van de overheid en maken we deze toegankelijker.</p>
            <p>We maken het bestuur van de Eurozone democratisch en transparant. De Eurogroep, bestaand uit de ministers van Financiën van de lidstaten van de Eurozone, wordt een formeel orgaan met vastgelegde procedures en een vaste voorzitter. De verantwoordelijke Eurocommissaris(sen) en de vaste voorzitter van de Eurogroep leggen verantwoording af aan het Europees Parlement. Ook met betere samenwerking tussen nationale parlementen en het Europees Parlement kunnen we het parlementair toezicht op het Europese economische bestuur verbeteren, bijvoorbeeld door nationale parlementen uit te nodigen bij de Economische Dialoog van het Europees Parlement met de belangrijkste Europese economische bestuurders. D66 is en blijft groot voorstander van de euro.</p>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p>We maken strengere lobbyregels en versterken het transparantieregister. Zo is het inzichtelijk wanneer en door wie invloed is uitgeoefend op nieuwe Europese wet- en regelgeving. Financiering van niet-EU-landen en organisaties aan lobbyactiviteiten en parlementsleden brengen we in kaart. Parlementsleden mogen geen geschenken van meer dan €100 ontvangen van niet-EU-landen en organisaties en moeten afspraken met personen en partijen binnen en buiten het Parlement openbaar maken.</p>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p>Het gebruik van kunstmatige intelligentie in hoogrisicotoepassingen zoals het onderwijs, handhaving en bestuur kan veel nieuwe mogelijkheden en vooruitgang brengen, maar ook grote gevolgen hebben voor de vrijheden en rechten van mensen. De verplichte Europese mensenrechtentoets voor hoogrisicosystemen wordt publiekelijk inzichtelijk. Hierdoor worden belangrijke besluiten over technologie transparanter en beter democratisch geborgd.</p>
            <p>Voor democratische controle en toezicht op AI is transparantie essentieel. Daarom komen er AI-labels voor alle content die met behulp van AI gegenereerd is. Bij foundation models, zoals ChatGPT, die voor veel doeleinden kunnen worden gebruikt, is altijd inzichtelijk wie de maker van het model is. Ook worden de broncodes van AI beschikbaar voor onderzoek door Europese toezichthouders, ook vóórdat producten op de markt komen. Dit leggen we Europees vast.</p>
            <p>We investeren in onderzoek en innovatie naar technologieën die desinformatie kunnen identificeren en bestrijden, zoals factchecking tools en algoritmes die nepnieuws kunnen detecteren.</p>
            <p>We vergroten de digitale verbondenheid binnen Europa en zorgen dat iedereen meekomt in de digitale toekomst van Europa. We roepen de handel in persoonlijke gegevens een halt toe en maken een vuist tegen de verslavende algoritmes van sociale mediaplatforms.</p>
            <p>Verslavende algoritmes hebben schade voor kinderen en (jonge) mensen tot gevolg, bijvoorbeeld op het vlak van sociale veiligheid, mentaal welzijn en concentratievermogen. D66 moedigt daarom het voorstel van het Europees Parlement aan voor een wet die paal en perk stelt aan het verslavende ontwerp van sociale media platforms.</p>
            <p>Dankzij de Wet inzake digitale diensten zijn sociale mediaplatforms verplicht om gebruikers een alternatief algoritme aan te bieden. D66 wil dat niet-gepersonaliseerde algoritmes de standaard worden en dat mensen altijd betekenisvolle toestemming geven om inhoud op basis van gepersonaliseerde algoritmes te zien. Op deze manier beschermen we de vrije ideeënvorming van mensen online.</p>
            <p>Het is belangrijk dat de algoritmes op de platforms in te zien zijn, niet bepalend zijn voor de beoordeling van platformwerkers en dat nationale autoriteiten de arbeidsomstandigheden van platformwerkers controleren.</p>
          </template>
        </td>
      </tr>

      <!-- PvdD -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://assets.partijvoordedieren.nl/assets/algemeen/2.-Documenten/Verkiezingsprogrammas/Verkiezingsprogrammas-EU-24/Verkiezingsprogramma-Europese-Parlementsverkiezingen-2024-Partij-voor-de-Dieren.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">PvdD</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            De Partij voor de Dieren wil meer controle bij belangrijke besluiten van de EU. Gesprekken over nieuwe EU-wetten zijn niet transparant: het is voor burgers en maatschappelijke organisaties niet duidelijk wie wat beslist, en waarom. Dat moet anders. We willen goede controle bij de beslissingen die de EU neemt. De rechten van mensen, dieren, natuur en milieu moeten hierbij altijd centraal staan.<br /> Hieronder lees je meer over onze plannen voor een democratische EU [selectie door Open State]:
            <ul><li>Stemmingen van EU-ministers (Raad van Ministers) worden openbaar. En voor iedereen (online) live te volgen.</li>
            <li>Ministers laten hun nationale overheid vóór een stemming weten welke keuze ze maken. Nationale parlementen - zoals de Tweede Kamer - kunnen dan nog ingrijpen.</li>
            <li>Gesprekken en onderhandelingen over EU-wetten worden openbaar. En voor iedereen (online) live te volgen.</li>
            <li>De vergaderingen van de 27 commissarissen in de EU worden openbaar.</li>
            <li>We willen echte openheid als de EU beslissingen neemt en wetten maakt. Burgers en organisaties moeten inzicht krijgen in voorstellen en besluiten. Belangrijke informatie wordt openbaar. Er wordt ook duidelijk gemaakt wie op welk besluit invloed heeft gehad.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            De Partij voor de Dieren wil dat de EU opkomt voor de belangen van burgers. En niet voor de belangen van grote bedrijven. Nu hebben internationale bedrijven te veel invloed op de keuzes die de EU maakt. Bijvoorbeeld dankzij vertegenwoordigers van bedrijven (lobby). De EU moet altijd transparant en onafhankelijk zijn.
            <ul><li>Commissarissen zijn onafhankelijk. Ze mogen geen belangen hebben bij bedrijven of bepaalde bedrijfstakken. Na hun werk bij de EU mogen ze 5 jaar lang niet werken (als lobbyist) voor een bedrijf of bedrijfstak. Of ander werk doen dat in strijd is met hun eerdere werk als commissaris.</li>
            </ul>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p>Aanbieders van kunstmatige intelligentie (AI) moeten laten weten hoe ze gebruik maken van het materiaal van anderen.</p>
            <p>Zelflerende systemen zijn computers die besluiten nemen over mensen. Zonder dat mensen daarbij betrokken zijn of invloed kunnen uitoefenen. Dit soort systemen moeten voldoen aan strenge eisen op het gebied van privacy. De EU controleert ook of deze systemen niet discrimineren.</p>
            <p>Bij het ontwikkelen van kunstmatige intelligentie (AI) vinden controles plaats. Bijvoorbeeld over veiligheid. Dat geldt ook voor bestaande systemen.</p>
            <p>Is iets gemaakt door AI? Dan is dat makkelijk te herkennen dankzij een logo of een beeldmerk. En maakt AI iets in de stijl van bestaande kunstenaars? Dan krijgen de oorspronkelijke makers een passende vergoeding.</p>
            <p>De EU moedigt het gebruik van veilige computerprogramma’s aan die geen eigendom zijn van bedrijven, maar voor iedereen toegankelijk zijn (open source).</p>
          </template>
        </td>
      </tr>

      <!-- PVV -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://www.pvv.nl/images/2024/EP/PVV-Verkiezingsprogramma-EP-2024.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">PVV</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>
            Geen standpunt
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>
            Geen standpunt
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>
            Geen standpunt
          </template>
        </td>
      </tr>

      <!-- SP -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://www.sp.nl/sites/default/files/verkiezingsprogramma_sp_ep2024.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">SP</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p>Het is belangrijk dat mensen invloed kunnen uitoefenen op de besluitvorming. Omdat wij willen dat landen zelf het laatste woord hebben, kunnen inwoners op nationaal niveau referenda afdwingen om besluiten te beïnvloeden. We zien dat er door gemeenten, regio’s en provincies veel geld wordt besteed om in Brussel potjes met geld te zoeken en vooral gezellige uitstapjes te maken. Dit zien wij ook terug in het ondemocratische schaduwparlement bestaande uit lokale en regionale bestuurders: het Comité van de Regio’s (CoR), dat wat ons betreft kan worden opgeheven. In plaats daarvan willen wij dat vaker de mensen om wie het gaat erbij worden betrokken, bijvoorbeeld via volksraadplegingen.</p>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p>Met subsidies en wetten stuurt de EU de economische activiteiten binnen de EU en poogt ze te laten concurreren met andere wereldmachten. Maar al te vaak gebeurt dit ten koste van de belangen van gewone mensen, dieren en ons milieu. Ook betekent dit vaak onnodige bemoeienis in zaken die we prima op nationaal niveau kunnen regelen. Het democratisch gehalte en de transparantie zijn ver te zoeken. De macht van de bedrijfslobby is daardoor groot. Deze lobby is een machtsmiddel van het kapitalisme en moet worden bestreden met volledige transparantie en aan banden worden gelegd.</p>
            <p>De besluitvorming van de EU is momenteel ondoorzichtig en moeilijk te controleren. Het stemgedrag en alle documenten van de Europese Raad van ministers willen wij openbaar en toegankelijk. Van zowel de politici, lobbyisten als van de vertegenwoordigers van de lidstaten (PV) verwachten wij volledige openheid van lobbyactiviteiten via een compleet lobbyregister waarin alle gesprekken met lobbyisten en besproken onderwerpen worden bijgehouden en gepubliceerd. Europarlementariërs leggen voortaan publiekelijk verantwoording af waaraan ze hun onkostenvergoeding besteden.</p>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p>Sociale media zijn een belangrijk onderdeel van ons leven geworden, maar mogen geen vrijplaatsen zijn voor bedreigingen en intimidatie. Nieuwe technologieën worden eerst onderworpen aan een ethische toets en we stellen regels op voor het ontwerp van nieuwe apps; deze mogen bijvoorbeeld niet verslavend zijn. Een klein aantal techbedrijven heeft te veel macht over het publieke debat op internet. Dat is onwenselijk, daarom moeten algoritmes altijd transparant en toetsbaar zijn en moeten toepassingen toestemming krijgen voordat ze online worden ingezet.</p>
            <p>Kunstmatige intelligentie dient in dienst te staan van de gehele samenleving, waarbij de menselijke maat voorop staat, en niet slechts gericht is op het vergroten van de winst van het kapitaal. Kunstmatige intelligentie kan ons helpen bij veel problemen in het dagelijks leven. Maar het gebruik van algoritmen en kunstmatige intelligentie kan ook leiden tot ernstige mensenrechtenschendingen. We werken daarom aan een streng Europees regelgevend kader rondom kunstmatige intelligentie, waarin het voorzorgsprincipe wordt gehanteerd. Alleen kunstmatige intelligentie die volledig veilig is laten we daardoor toe op de markt.</p>
          </template>
        </td>
      </tr>

      <!-- Volt -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://voltnederland.org/storage/doc/volt_moonshot_verkiezingsprogramma_ep_nl.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">Volt</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p>Geef prioriteit aan transparantie door regelmatig verslagen te publiceren en deze te delen met de leden van het Europees Parlement en van de nationale parlementen. Zorg ervoor dat ‘Frontex Fundamental Rights Officers’ deel uitmaken van alle operaties en dat alle pushbacks door nationale grensbewakers voor een nationale rechtbank worden gebracht. Versterk de samenwerking van de EUAA met Frontex om de bescherming van asielzoekers te verbeteren.</p>
            <p>De invoering van een Europese grondwet en een gekozen EU-regering zal de transparantie vergroten en burgers en democratische legitimiteit in de Europese democratie centraal stellen. Het overbruggen van de kloof tussen burgers en instituties zal het vertrouwen in de Unie versterken, een echte Europese representatieve democratie creëren, schadelijke teleurstelling in het politieke systeem tegengaan, en de EU de capaciteit geven om doeltreffend te reageren op uitdagingen in binnen- en buitenland. De vorming van een echte fiscale en monetaire unie zal een samenhangend, uniform en transparant systeem mogelijk maken dat de EU beter in staat stelt economische schokken effectief op te vangen.</p>
            <p>De invoering van een Europese grondwet en een gekozen EU-regering zal de transparantie vergroten en burgers en democratische legitimiteit in de Europese democratie centraal stellen. Het overbruggen van de kloof tussen burgers en instituties zal het vertrouwen in de Unie versterken, een echte Europese representatieve democratie creëren, schadelijke teleurstelling in het politieke systeem tegengaan, en de EU de capaciteit geven om doeltreffend te reageren op uitdagingen in binnen- en buitenland. De vorming van een echte fiscale en monetaire unie zal een samenhangend, uniform en transparant systeem mogelijk maken dat de EU beter in staat stelt economische schokken effectief op te vangen.</p>
            <p>Creëer transparantie door ervoor te zorgen dat EU-parlementariërs en -ambtenaren hun bezittingen publiceren en door lobbyisten te verplichten om bijeenkomsten met EU-ambtenaren te registreren op een centraal, openbaar platform.</p>
            <p>Verzeker bredere toegang tot openbare gegevens, zoals statistieken, onderzoek, georuimtelijke gegevens en alle andere soorten openbare gegevens, alsook tot informatie over de besluitvorming van de overheid op alle EU-bestuursniveaus zoals stemmingsverslagen, debatten, financiële informatie en besluitenmemo’s, tenzij een uitzondering vanwege veiligheid of vertrouwelijkheid noodzakelijk is.</p>
            <p>Integreer en breid bestaande open datadashboards en openbare informatieplatforms uit vanuit het perspectief van de burger, door toegankelijke hulpmiddelen aan te bieden die geoptimaliseerd zijn voor hun gebruikerservaring.</p>
            <p>Harmoniseer wetgeving zodat handelsregisters van lidstaten gratis de jaarverslagen van particuliere ondernemingen publiceren.</p>
            <p>Geef softwarecomponenten gefinancierd met publieke middelen vrij onder een ‘Free/Libre and Open Source Software’ (FLOSS)- licentie om transparantie te garanderen en het gebruik en de aanpas- sing van de software en haar broncode door een brede publiek mogelijk te maken, voor zowel privé- als commercieel gebruik.</p>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p>Creëer transparantie door ervoor te zorgen dat EU-parlementariërs en -ambtenaren hun bezittingen publiceren en door lobbyisten te verplichten om bijeenkomsten met EU-ambtenaren te registreren op een centraal, openbaar platform.</p>
            <p>Verfijn de bestaande lobbyregels in de ‘Rules of Procedure of the European Parliament’ en verbeter de criteria in het ‘Transparancy Register’.</p>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>
            <p>Door gebruik te maken van automatisering, AI en groene technologieën zal de arbeidsproductiviteit toenemen, wat zal leiden tot nieuwe soorten banen, hogere lonen en minder werkuren.</p>
          </template>
        </td>
      </tr>

      <!-- NSC -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://europa.partijnieuwsociaalcontract.nl/files/downloads/252/Verkiezingsprogramma%20NSC%20Europa%202024.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">NSC</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p>Wie Nieuw Sociaal Contract zegt, zegt Bestaanszekerheid en Goed bestuur. Ook in Europa. De Europese Unie draagt bij aan onze welvaart, vrede en veiligheid. Goed bestuur betekent dat er transparant wordt besloten, gecontroleerd door onze gekozen volksvertegenwoordiging. Niet over ons en zonder ons. Maar met ons en voor ons.</p>
            <p>3.1.11 De eurogroep zal formeel georganiseerd en veel transparanter worden. Nu bestaat de club van eurolanden formeel niet.</p>
            <p>4.1.3 De Europese besluitvorming moet transparanter worden in lijn met het initiatief ‘Opening up closed doors’. De openheid begint met het openbaar maken van de verslagen van de Europese ministerraden.</p>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-grey transition hover:brightness-95"><span class="sr-only">Geen standpunt</span></button>
          <template>
            Geen standpunt
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            <p>3.3.1 Het Europees toezicht op eerlijke mededinging en staatssteun moet worden versterkt. De macht van grote (tech)bedrijven moet door Europa worden beperkt. Digitale platformen, zoals handelsplaatsen en social media platformen, moeten veilig, eerlijk en transparant zijn. Dat kan onder meer door een strikte toepassing van de Digital Markets Act (DMA), Digital Services Act (DSA) en AI Act. Dat is een kracht van de EU. Er moeten Europese alternatieven komen, zodat burgers en bedrijven er bewust voor kunnen kiezen dat hun data binnen Europa blijven.</p>
            <p>3.3.3 De EU moet een scherp debat voeren over het gebruik van AI (kunstmatige intelligentie) en de risico’s dat Europese en Nederlandse waarden worden ondermijnd. We moeten voorkomen dat we gaan achterlopen bij ontwikkeling van technologie; daar moet fors in worden geïnvesteerd. Tegelijkertijd zijn er wel regels nodig om ongewenste ontwikkelingen van AI tegen te gaan.</p>
          </template>
        </td>
      </tr>

      <!-- BBB -->
      <tr>
        <td class="border border-gray-300 px-3 py-2">
          <a href="https://boerburgerbeweging.nl/wp-content/uploads/2024/05/BBB-Verkiezingsprogramma-EU_INDEX-20240522.pdf" target="_blank" rel="noopener" class="font-medium text-blue-700 underline-offset-2 hover:underline">BBB</a>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-green transition hover:brightness-95"><span class="sr-only">Groen — toon toelichting</span></button>
          <template>
            <p>De Europese Unie kent al jaren een democratisch tekort, met een groeiende kloof tussen Brussel en de Nederlandse burger als gevolg. Daarom wil BBB de democratische controle op de Europese Commissie vergroten en meer transparantie in de Europese besluitvorming. Om de regeldruk te verminderen, wil BBB dat nieuwe wetsvoorstellen voortaan eerst worden goedgekeurd door de Raad (waarin nationale vakministers zitten). Om overmatige regelgeving aan te pakken, pleit BBB voor de invoering van een beperkt wijzigingsrecht voor het Europees Parlement.</p>
            <p>Transparante besluitvorming. Het besluitvormingsproces in de Europese Unie vindt deels plaats achter gesloten deuren. Met name de politieke besluitvorming van de nationale ministers in de Raad is onvoldoende transparant. Dat beperkt de mogelijkheid tot democratische controle en ondermijnt het vertrouwen in de Europese samenwerking. BBB pleit voor meer inzicht in besluitvorming van de Raad van de Europese Unie met de vakministers evenals in de Europese Raad van regeringsleiders.</p>
            <p>BBB is ook voorstander van meer transparantie in het zakelijk communicatieverkeer van ambtenaren van de Europese Commissie - zoals dit in Nederland op vergelijkbare wijze is georganiseerd. Het openbaren van deze communicatie draagt bij aan het herstel van het vertrouwen tussen Europese instellingen en de burger. Dat vertrouwen is met name gedurende de coronacrisis beschadigd geraakt.</p>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-orange transition hover:brightness-95"><span class="sr-only">Oranje — toon toelichting</span></button>
          <template>
            <p>Transparantie NGO’s. Als het bedrijfsleven het beleids- en wetgevende proces wil beïnvloeden, gelden strenge transparantieregels. Diezelfde regels moeten gaan gelden voor niet-gouvernementele organisaties. Daarnaast dienen NGO’s die worden gefinancierd door de Europese Unie, net als andere organisaties, openbaar te maken door welke andere partijen zij worden gefinancierd. Tot slot is momenteel onduidelijk hoeveel geld precies wordt uitgekeerd aan NGO’s. De financiële verantwoording van de Europese Commissie moet op dit punt worden verbeterd.</p>
          </template>
        </td>
        <td class="border border-gray-300 p-0">
          <button type="button" class="tt-trigger block h-10 w-full cursor-help bg-status-red transition hover:brightness-95"><span class="sr-only">Rood — toon toelichting</span></button>
          <template>
            <p>Social media. Social media platforms ontwikkelen algoritmes die gericht zijn op het maximaliseren van gebruikerstijd op de platforms. Dit heeft niet alleen invloed op volwassenen, maar in het bijzonder op jonge kinderen, wiens ontwikkeling en welzijn ernstig kunnen worden beïnvloed door overmatig gebruik. Het ongebreideld stimuleren van schermtijd kan leiden tot verslavingsgedrag, verminderde fysieke activiteit, en kan zelfs de mentale gezondheid schaden, resulterend in verhoogde gevallen van angst, depressie en slaapproblemen bij jongeren. BBB staat daarom sympathiek tegenover voorstellen om het gebruik van deze algoritmes te beperken, vooral om de kwetsbare jonge geesten te beschermen.</p>
            <p><b>Kunstmatige intelligentie</b>. De Europese Unie heeft op het terrein kunstmatige intelligentie of artificial intelligence (AI) een achterstand ten opzichte van zowel de VS als China. Toch is de Europese Unie de eerste om een breed pakket aan regelgeving voor AI te presenteren. BBB volgt kritisch wat de gevolgen zijn voor de markt. Indien de<br /> regelgeving ertoe leidt dat bedrijven wegtrekken, pleit BBB voor spoedige versoepeling. We moeten voorkomen dat de boot verder vaart en we daarmee de kansen die AI biedt missen en een nieuwe afhankelijkheid opbouwen. BBB ondersteunt Europees onderzoek en innovatieprogramma’s in AI.</p>
            <p>Afbeeldingen en video’s die met AI zijn gemaakt, zijn niet of nauwelijks van echte beelden te onderscheiden. Zonder een duidelijke identificatie kunnen deze media potentieel negatieve gevolgen hebben, zoals het verspreiden van misleidende informatie of het ondermijnen van vertrouwen in authentieke bronnen. Pleit daarom voor een verplicht AI-watermerk zodat deze als zodanig herkenbaar is.</p>
            <p><b>Quantumtechnologie</b>. Net als AI brengt quantum-technologie enorme kansen met zich mee. Nedeland is wereldwijd koploper in de ontwikkeling van quantumtechnologie. Het is belangrijk dat deze kennis beschermd wordt en niet door export wegvloeit naar landen buiten de Europese Unie. BBB is daarom voorstander van exportcontrole voor quantum-technologie. Daarnaast wil BBB dat de Europese Commissie prioriteit geeft aan de voorbereiding op ‘post-quantum encryption’. Dat betekent dat overheden en bedrijven zich voorbereiden op de mogelijkheden die quantum-technieken bieden om bestaande beveiligingstechnieken eenvoudig te omzeilen.</p>
          </template>
        </td>
      </tr>

    </tbody>
  </table>
</div>
KIESWIJZER_2024_HTML;
}
add_shortcode( 'kieswijzer_2024', 'kieswijzer_2024_shortcode' );
