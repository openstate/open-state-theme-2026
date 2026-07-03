(function () {
	function init() {
		if (document.getElementById('kieswijzer-tooltip')) {
			return;
		}

		var tooltip = document.createElement('div');
		tooltip.id = 'kieswijzer-tooltip';
		tooltip.setAttribute('role', 'tooltip');
		tooltip.className =
			'hidden fixed z-[9999] max-w-md max-h-[60vh] overflow-y-auto ' +
			'bg-white p-4 rounded-lg text-xs leading-relaxed shadow-xl ' +
			'[&_p]:mb-2 [&_p:last-child]:mb-0 ' +
			'[&_ul]:mb-2 [&_ul]:list-disc [&_ul]:space-y-1 [&_ul]:pl-4 [&_ul:last-child]:mb-0';
		document.body.appendChild(tooltip);

		var pinnedTrigger = null;

		var hideTimer = null;

		function cancelHide() {
			if (hideTimer) {
				clearTimeout(hideTimer);
				hideTimer = null;
			}
		}

		function hide() {
			cancelHide();
			pinnedTrigger = null;
			tooltip.classList.add('hidden');
		}

		function scheduleHide() {
			// Een vastgezette tooltip verdwijnt niet door muisbewegingen.
			if (pinnedTrigger) {
				return;
			}
			cancelHide();
			hideTimer = setTimeout(function () {
				if (!pinnedTrigger) {
					tooltip.classList.add('hidden');
				}
			}, 300);
		}

		function show(trigger) {
			var template = trigger.parentElement.querySelector('template');
			if (!template) {
				return;
			}
			cancelHide();
			tooltip.innerHTML = template.innerHTML;
			tooltip.classList.remove('hidden');
			tooltip.scrollTop = 0;

			var rect = trigger.getBoundingClientRect();
			var ttRect = tooltip.getBoundingClientRect();

			// Onder de cel; boven de cel als er onvoldoende ruimte is.
			var top = rect.bottom + 8;
			if (top + ttRect.height > window.innerHeight - 8) {
				top = Math.max(8, rect.top - ttRect.height - 8);
			}

			// Horizontaal centreren op de cel, binnen het scherm houden.
			var left = rect.left + rect.width / 2 - ttRect.width / 2;
			left = Math.max(8, Math.min(left, window.innerWidth - ttRect.width - 8));

			tooltip.style.top = top + 'px';
			tooltip.style.left = left + 'px';
		}

		// Muis op de tooltip zelf: open houden; verlaten: verbergen (tenzij vastgezet).
		tooltip.addEventListener('mouseenter', cancelHide);
		tooltip.addEventListener('mouseleave', scheduleHide);

		var triggers = document.querySelectorAll('.tt-trigger');
		if (!triggers.length) {
			window.console && console.warn('kieswijzer-tabel: geen .tt-trigger cellen gevonden');
		}
		triggers.forEach(function (trigger) {
			trigger.addEventListener('mouseenter', function () {
				// Hoveren neemt een vastgezette tooltip niet over.
				if (!pinnedTrigger) {
					show(trigger);
				}
			});
			trigger.addEventListener('focus', function () {
				if (!pinnedTrigger) {
					show(trigger);
				}
			});
			trigger.addEventListener('mouseleave', scheduleHide);
			trigger.addEventListener('blur', scheduleHide);

			// Klik zet de tooltip vast. Nogmaals klikken op dezelfde cel sluit
			// hem; klikken op een andere cel zet die vast.
			trigger.addEventListener('click', function () {
				if (pinnedTrigger === trigger) {
					hide();
				} else {
					pinnedTrigger = trigger;
					show(trigger);
				}
			});
		});

		// Klik ergens anders (niet op een cel, niet in de tooltip): sluiten.
		document.addEventListener('click', function (e) {
			if (!tooltip.contains(e.target) && !e.target.closest('.tt-trigger')) {
				hide();
			}
		});

		// Esc sluit de tooltip.
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape') {
				hide();
			}
		});

		// Verberg bij scrollen van de pagina (de cel schuift dan onder de
		// tooltip vandaan), maar niet bij scrollen IN de tooltip.
		window.addEventListener('scroll', function (e) {
			if (!tooltip.contains(e.target)) {
				hide();
			}
		}, true);
		window.addEventListener('resize', hide);
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();
