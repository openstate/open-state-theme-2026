{{--
  Template Name: Donate Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="bg-purple-800 text-white pt-[52px] md:pt-[84px] xl:pt-[104px] px-[16px] md:px-[24px] pb-[80px] md:pb-[100px] xl:pb-[120px]">
      <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-[32px]">
        <div class="order-2 xl:order-1 xl:col-span-6">
          <h1 class="hidden xl:block xl:text-[4rem]/[4.25rem] xl:tracking-[-0.0625px] xl:mb-[40px]">{!! get_the_title() !!}</h1>
          <h2 class="sr-only">Informatie over doneren</h2>
          @include('partials.content-page')
        </div>

        <div class="order-1 xl:order-2 xl:col-span-6 mb-[48px] xl:mb-0">
          <h1 class="xl:hidden mb-[40px] md:mb-[48px] text-[2.25rem]/[2.5rem] tracking-[-0.025rem] md:text-[3.25rem]/[3.5rem] md:tracking-[-0.05rem]">{!! get_the_title() !!}</h1>
          <h2 class="sr-only">Donatieformulier</h2>
          <form action="/nl/doneren/" class="donate-form grid gap-x-[16px] gap-y-[32px]" method="post">
            <div>
              <label for="dmm_interval">Donatie</label>
              <select id="dmm_interval" name="dmm_recurring_interval" class="mt-[8px] font-mono custom-select donate-form-field" onchange="dmm_recurring_methods(this.value);">
                <option value="one">
                  Eenmalige donatie
                </option>
                <option value="month" selected>
                  Maandelijkse donatie
                </option>
              </select>

              <div id="permission" class="flex mt-[8px]">
                <input type="checkbox" name="dmm_permission" id="dmm_permission" class="w-min mr-[12px] mb-auto">
                <label for="dmm_permission" class="text-white text-[0.875rem]/[1.375rem] font-sans font-normal">
                  Hierbij machtig ik Open State Foundation om het bovenstaande bedrag periodiek van mijn rekeningnummer af te schrijven.
                </label>
              </div>
            </div>

            <div>
              <label for="dmm_dd">Bedrag</label>
              <select id="dmm_dd" class="mt-[8px] font-mono custom-select donate-form-field" onchange="if(this.value!='--'){document.getElementById('dmm_amount2').value=this.value;document.getElementById('dmm_amount2').style.display = 'none';}else{document.getElementById('dmm_amount2').style.display = 'block';}">
                <option value="--">
                  Eigen bedrag invoeren (in €)
                </option>
                <option value="10">€ 10</option>
                <option value="25" selected>€ 25</option>
                <option value="50">€ 50</option>
                <option value="100">€ 100</option>
              </select>
              <input type="hidden" name="dmm_currency" id="dmm_currency" value="EUR">
              <input type="text" id="dmm_amount2" name="dmm_amount" placeholder="Vul een bedrag in" class="donate-form-field mt-[8px]" value="25" style="display: none;">
            </div>

            <div>
              <label for="dmm_methode">Betaalmethode</label>
              <select name="dmm_method" class="custom-select donate-form-field mt-[8px] font-mono">
                <option class="dmm_dd dmm_nomc" value="ideal" style="display: block;" selected>iDEAL | Wero</option>
                <option class="dmm_cc dmm_mc" value="creditcard">
                  Creditcard / debitcard
                </option>
                <option class="dmm_recurring dmm_nomc" value="banktransfer" style="display: block;">
                  Overboeking
                </option>
              </select>
            </div>

            <div class="flex gap-x-[16px]">
              <div class="flex-1">
                <label for="dmm_name">Naam</label>
                <input type="text" name="dmm_name" class="mt-[8px] donate-form-field" placeholder="Jouw naam" value="" required>
              </div>

              <div class="flex-1">
                <label for="dmm_email">E-mailadres</label>
                <input type="email" name="dmm_email" class="mt-[8px] donate-form-field" placeholder="jouw@emailadres.nl" value="" required>
              </div>
            </div>

            <div>
              <label for="dmm_message">Bericht (optioneel)</label>
              <textarea name="dmm_message" class="mt-[8px] donate-form-field donate-form-field-textarea" placeholder="Optioneel, maar we vinden het erg leuk om te horen waarom je doneert"></textarea>
            </div>

            <x-button type="submit" variant="secondary" name="dmm_submitted" class="mx-auto donate-form-field donate-form-button" text="Doneer" />
          </form>
          <div class="hidden">
            {!! do_shortcode( '[doneren_met_mollie]' ) !!}
          </div>
        </div>
      </div>
    </div>

    <div class="bg-off-white-100 px-[16px] md:px-[24px] pt-[64px] pb-[80px] xl:pt-[84px] xl:pb-[152px]">
      <h2 class="text-center text-[2.25rem]/[2.5rem] tracking-[-0.025rem] md:text-[3.25rem]/[3.5rem] md:tracking-[-0.05rem] xl:text-[4rem]/[4.25rem] xl:tracking-[-0.0625rem] mt-0 mb-[12px]">Bedrijfsdonateurs</h2>
      <p class="text-center mb-[48px]">Wil je met jouw bedrijf doneren aan Open State Foundation? <a href='https://openstate.eu/wp-content/uploads/sites/14/2022/09/Open-State-Foundation-Bedrijfsdonateurs-propositie.pdf' target='blank'>Bekijk dan onze propositie</a>. Interesse? Neem <a href="/contact">contact met ons op</a>.</p>
      <div class="flex flex-col xl:flex-row xl:grid xl:grid-cols-12 gap-[16px] mb-[84px]">
        <h3 class="sr-only">Niveaus bedrijfsdonaties</h3>
        <div class="flex flex-col mx-auto order-2 xl:order-1 max-sm:w-full xl:w-full self-start xl:col-span-2 xl:col-start-3 bg-blue-200 text-white min-h-[232px] h-fit rounded-lg p-[24px]">
          <h4 class="text-[1.5rem]/[1.75rem] mt-0 mb-[8px]">Open <span class="text-blue-100">State</span>-donateurs</h4>
          <p class="text-[0.875rem]/[1.375rem]">We tonen jouw logo, bedrijfsnaam, beschrijving en link naar je website.</p>
          <p class="font-serif text-[1.25rem]/[1.75rem] mt-auto mb-0">€1,000 - €5,000 per jaar</p>
        </div>

        <div class="flex flex-col mx-auto order-1 xl:order-2 max-sm:w-full xl:w-full p-[28px] pt-[24px] h-[396px] xl:col-span-4 bg-purple-700 text-white rounded-lg">
          <h4 class="text-[2rem]/[2.5rem] tracking-[-0.025rem] mt-0 mb-[4px]">Open <span class="text-pink">World</span>-donateurs</h4>
          <p class="text-[0.875rem]/[1.375rem]">We tonen groot jouw logo, bedrijfsnaam, beschrijving en link naar je website.</p>
          <p class="font-serif text-[1.25rem]/[1.75rem] mt-auto mb-0">€5.000+ per jaar <span class="font-sans text-[0.875rem]/[1.25rem]">(niet meer dan 10% van onze continuïteitsreserve)</span></p>
        </div>

        <div class="flex flex-col mx-auto order-3 max-sm:w-full xl:w-full xl:col-span-2 self-end bg-off-white-400 text-white min-h-[186px] h-fit rounded-lg p-[24px]">
          <h4 class="text-[1.5rem]/[1.75rem] mt-0 mb-[8px]">Open <span class="text-off-white-200">Street</span>-donateurs</h4>
          <p class="text-[0.875rem]/[1.375rem]">We tonen jouw bedrijfsnaam en link naar je website.</p>
          <p class="font-serif text-[1.25rem]/[1.75rem] mt-auto mb-0">€500 - €1,000 per jaar</p>
        </div>
      </div>

      <h3>Open Street-donateurs</h3>
      <div class="grid grid-cols-12">
        <x-open-street title="Laptop met Linux" image="logo-laptop-met-linux.svg" link="https://laptopmetlinux.nl/">
          Ga voor vrijheid, veiligheid, betrouwbaarheid en blijheid, kies Open Source hardware!
        </x-open-street>
      </div>

      <h3>Steun in natura</h3>
      <div class="grid grid-cols-12">
        <x-steun-in-natura title="Open Data Monitor" image="logo-laptop-met-linux.svg" link="https://opendatamonitor.nl/">
          Monitoring van data.overheid.nl gemaakt door Code Division.
        </x-steun-in-natura>
    </div>
  </div>
  @endwhile
@endsection

<script>
  window.onload=function() {
      var dmm_dd = document.getElementById('dmm_dd');
      if (dmm_dd !== null) {
          if (dmm_dd.value !== '--') {
              document.getElementById('dmm_amount2').value=document.getElementById('dmm_dd').value;
              document.getElementById('dmm_amount2').style.display = 'none';
          }
      }
      if (document.getElementById('dmm_interval').value !== 'one'){
          document.getElementById('permission').style.display = 'block';
          document.getElementById("permission").children[0].required = true;
      }
      dmm_recurring_methods(document.getElementById('dmm_interval').value);
      dmm_multicurrency_methods(document.getElementById('dmm_currency').value);
  }
</script>
<script>
  function dmm_recurring_methods(value) {
      var x = document.getElementsByClassName("dmm_recurring");
      var i;
      for (i = 0; i < x.length; i++) {
          x[i].style.display = (value!="one" ? "none" : "block");
          x[i].disabled = (value!="one" ? "disabled" : "");
      }

      document.getElementById("permission").style.display = (value=="one" ? "none" : "block");
      document.getElementById("permission").children[0].required = (value=="one" ? false : true);
  }
</script>
<script>
  function dmm_multicurrency_methods(value) {
      var x = document.getElementsByClassName("dmm_nomc");
      var i;
      for (i = 0; i < x.length; i++) {
          x[i].style.display = (value!="EUR" ? "none" : "block");
          x[i].disabled = (value!="EUR" ? "disabled" : "");
      }
  }
</script>
