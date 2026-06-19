<div class="bg-off-white-50 px-[16px] pt-[32px] pb-[48px] md:px-[24px] md:pt-[40px] md:pb-[64px] xl:pt-[56px] xl:pb-[80px]">
  <form action="https://openstate.us4.list-manage.com/subscribe/post?u=03355fd4f1a7935cae63b21aa&amp;id=a9619e4f3e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
      <div class="grid grid-cols-12">
        <div class="col-span-12 xl:col-span-5 mb-[32px] xl:mb-0" for="mce-EMAIL">
          <h2 class='font-serif text-[2.75rem]/[3rem] tracking-[-0.0375rem] mt-0 mb-[12px]'>Blijf op de hoogte</h2>
          <p class='mb-0'>Meld je net als 1600+ andere lezers aan voor onze maandelijkse nieuwsbrief!
          </br>
          Wat kan je verwachten? Zie onze <a href="https://us4.campaign-archive.com/home/?u=03355fd4f1a7935cae63b21aa&amp;id=a9619e4f3e" target="_blank" rel="noopener">eerdere nieuwsbrieven.</a></p>
        </div>
        <div class="col-span-12 xl:col-span-6 xl:col-start-7 mt-auto">
          <label class="block mb-[8px] font-mono text-[13px]/[18px] font-medium text-pink" for="mce-EMAIL">E-mailadres</label
          <div class="mc-field-group mc-first-group">
            <input type="email" class="align-top bg-white w-[244px] rounded-lg p-[12px] text-[14px]/[22px] mr-[8px]" placeholder="jouw@emailadres.nl" value="" name="EMAIL" id="mce-EMAIL">
            <x-button-small variant="secondary" type="submit" class="align-top" />
            <div id="mce-responses" class="clear mt-[8px]">
              <div class="response text-purple-800" id="mce-error-response" style="display:none"></div>
              <div class="response text-pink" id="mce-success-response" style="display:none"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true">
        <input type="text" name="b_03355fd4f1a7935cae63b21aa_a9619e4f3e" tabindex="-1" value="">
        <input type="submit" name="subscribe" id="mc-embedded-subscribe" style="position: absolute; left: -9999px; width: 1px; height: 1px;" tabindex="-1">
      </div>
    </div>
  </form>
</div>
<script src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script>
addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('mc-embedded-subscribe-form');
  const emailInput = document.getElementById('mce-EMAIL');
  const errorResponse = document.getElementById('mce-error-response');

  if (form) {
    form.addEventListener('submit', function(e) {
      const email = emailInput.value.trim();
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      errorResponse.style.display = 'none';

      // Validate email is not empty
      if (!email) {
        e.preventDefault();
        errorResponse.textContent = 'Dit is een verplicht veld.';
        errorResponse.style.display = 'block';
        return;
      }

      // Validate email format
      if (!emailRegex.test(email)) {
        e.preventDefault();
        errorResponse.textContent = 'Dit is een ongeldig e-mailadres.';
        errorResponse.style.display = 'block';
        return;
      }
    });
  }
});
</script>
