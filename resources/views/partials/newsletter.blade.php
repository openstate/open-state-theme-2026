<div class="bg-off-white-50 px-[16px] pt-[32px] pb-[48px] md:px-[24px] md:pt-[40px] md:pb-[64px] xl:pt-[56px] xl:pb-[80px]">
  <div class="mx-auto w-full max-w-[1920px]">
    <form method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" data-endpoint="{{ esc_url(rest_url('open-state/v1/newsletter')) }}" novalidate>
      <div id="mc_embed_signup_scroll">
        <div class="grid grid-cols-12">
          <div class="col-span-12 xl:col-span-5 mb-[32px] xl:mb-0" for="mce-EMAIL">
            <h2 class='font-serif text-[2.75rem]/[3rem] tracking-[-0.0375rem] mt-0 mb-[12px]'>Blijf op de hoogte</h2>
            <p class='mb-0'>Meld je net als 1600+ andere lezers aan voor onze maandelijkse nieuwsbrief!
            </br>
            Wat kan je verwachten? Zie onze <a href="https://us4.campaign-archive.com/home/?u=03355fd4f1a7935cae63b21aa&amp;id=a9619e4f3e" target="_blank" rel="noopener">eerdere nieuwsbrieven</a>.</p>
          </div>
          <div class="col-span-12 xl:col-span-6 xl:col-start-7 mt-auto">
            <label class="block mb-[8px] font-mono text-[13px]/[18px] font-medium text-pink" for="mce-EMAIL">E-mailadres</label>
            <div class="mc-field-group mc-first-group">
              <input type="email" class="align-top bg-white w-[244px] rounded-lg p-[12px] text-[14px]/[22px] mr-[8px]" placeholder="jouw@emailadres.nl" value="" name="EMAIL" id="mce-EMAIL" required>

              <div class="flex md:inline">
              @if (\App\cap_widget_endpoint())
                <cap-widget id="mce-cap" class="capjs" data-cap-api-endpoint="{{ \App\cap_widget_endpoint() }}"
                  data-cap-i18n-initial-state="<?php _e("Ik ben geen robot"); ?>"
                  data-cap-i18n-verifying-label="<?php _e("Bezig met verifiëren..."); ?>"
                  data-cap-i18n-solved-label="<?php _e("Je bent een mens"); ?>"
                  data-cap-i18n-error-label="<?php _e("Fout"); ?>"
                  data-cap-i18n-required-label="<?php _e("Verifieer eerst dat je een mens bent"); ?>">
                </cap-widget>
              @endif

              <x-button-small variant="secondary" name="subscribe" id="mc-embedded-subscribe" type="submit" class="mt-auto md:align-top" />
              </div>

              <div id="mce-responses" class="clear mt-[8px]" aria-live="polite">
                <div class="response text-purple-800" id="mce-error-response" style="display:none"></div>
                <div class="response text-pink" id="mce-success-response" style="display:none"></div>
              </div>

              <!-- real people should not fill this in and expect good things - do not remove this or risk form
 bot si       gnups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input type="text" name="b_03355fd4f1a7935cae63b21aa_a9619e4f3e" tabindex="-1" value="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
  (function () {
    var form = document.getElementById('mc-embedded-subscribe-form');
    if (!form) {
      return;
    }

    var isDutch = true;
    var widget = document.getElementById('mce-cap');
    var errorBox = document.getElementById('mce-error-response');
    var successBox = document.getElementById('mce-success-response');
    var button = document.getElementById('mc-embedded-subscribe');
    var capToken = null;

    var text = {
      required: isDutch ? 'Dit is een verplicht veld.' : 'This field is required.',
      email: isDutch ? 'Dit is een ongeldig e-mailadres.' : 'This is an invalid email address.',
      captcha: isDutch ? 'Rond eerst de verificatie af.' : 'Please complete the verification first.',
      sending: isDutch ? 'Bezig…' : 'Sending…',
      generic: isDutch ? 'Er ging iets mis. Probeer het later opnieuw.' : 'Something went wrong. Please try again later.',
      done: isDutch ? 'Bijna klaar — bevestig je aanmelding via de e-mail die we net stuurden.' : 'Almost done — check your inbox to confirm.'
    };

    if (widget) {
      widget.addEventListener('solve', function (event) {
        capToken = event.detail && event.detail.token;
      });
      widget.addEventListener('reset', function () {
        capToken = null;
      });
      widget.addEventListener('error', function () {
        capToken = null;
      });
    }

    function show(box, message) {
      errorBox.style.display = 'none';
      successBox.style.display = 'none';
      box.textContent = message;
      box.style.display = '';
    }

    form.addEventListener('submit', function (event) {
      event.preventDefault();

      var email = form.querySelector('#mce-EMAIL').value.trim();

      if (!email) {
        show(errorBox, text.required);
        return;
      }

      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        show(errorBox, text.email);
        return;
      }

      // The widget also injects a hidden cap-token input; read either source.
      var hidden = form.querySelector('input[name="cap-token"]');
      var token = capToken || (hidden && hidden.value);

      if (widget && !token) {
        show(errorBox, text.captcha);
        return;
      }

      button.disabled = true;
      show(successBox, text.sending);

      var payload = new FormData();
      payload.append('EMAIL', email);
      payload.append('cap-token', token || '');
      payload.append('b_03355fd4f1a7935cae63b21aa_a9619e4f3e', form.querySelector('[name="b_03355fd4f1a7935cae63b21aa_a9619e4f3e"]').value);

      fetch(form.dataset.endpoint, { method: 'POST', body: payload })
        .then(function (response) {
          return response.json().then(function (body) {
            return { ok: response.ok, body: body };
          });
        })
        .then(function (result) {
          if (result.ok && result.body.success) {
            show(successBox, result.body.message || text.done);
            form.reset();
          } else {
            show(errorBox, (result.body && result.body.message) || text.generic);
          }
        })
        .catch(function () {
          show(errorBox, text.generic);
        })
        .finally(function () {
          button.disabled = false;
          capToken = null;
          // Tokens are single-use, so the widget must be solved again.
          if (widget && typeof widget.reset === 'function') {
            widget.reset();
          }
        });
    });
  }());
</script>
