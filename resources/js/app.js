import Alpine from 'alpinejs'
import focus from '@alpinejs/focus';
if (document.body.classList.contains('postid-13105') || document.body.classList.contains('postid-12253') || document.body.classList.contains('postid-11830')) {
  import('./kieswijzer.js');
}

window.Alpine = Alpine

Alpine.plugin(focus)
Alpine.start()
