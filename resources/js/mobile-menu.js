/**
 * Mobile Menu Controller
 * Handles toggling the fullscreen mobile menu
 */
class MobileMenuController {
  constructor() {
    this.menuToggle = document.querySelector('.mobile-menu-toggle');
    this.mobileMenu = document.querySelector('#mobile-menu');
    this.menuBackdrop = document.querySelector('.mobile-menu-backdrop');
    this.closeButton = document.querySelector('.mobile-menu-close');
    this.menuLinks = this.mobileMenu?.querySelectorAll('a') || [];

    if (this.menuToggle) {
      this.init();
    }
  }

  init() {
    // Bind click handlers
    this.menuToggle.addEventListener('click', () => this.toggle());
    this.closeButton?.addEventListener('click', () => this.close());
    this.menuBackdrop?.addEventListener('click', () => this.close());

    // Close menu when a link is clicked
    this.menuLinks.forEach(link => {
      link.addEventListener('click', () => this.close());
    });

    // Close menu on Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && this.isOpen()) {
        this.close();
      }
    });

    // Prevent body scroll when menu is open
    this.mobileMenu?.addEventListener('transitionend', () => {
      if (this.isOpen()) {
        document.body.style.overflow = 'hidden';
      } else {
        document.body.style.overflow = '';
      }
    });
  }

  toggle() {
    if (this.isOpen()) {
      this.close();
    } else {
      this.open();
    }
  }

  open() {
    this.menuToggle.setAttribute('aria-expanded', 'true');
    this.mobileMenu.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    this.menuToggle.focus();
  }

  close() {
    this.menuToggle.setAttribute('aria-expanded', 'false');
    this.mobileMenu.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    this.menuToggle.focus();
  }

  isOpen() {
    return this.menuToggle.getAttribute('aria-expanded') === 'true';
  }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
  new MobileMenuController();
});

// Also initialize if DOM is already loaded (e.g., Turbo)
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', () => {
    new MobileMenuController();
  });
} else {
  new MobileMenuController();
}
