<header class="topbar">
  <div class="container topbar__inner">

    <!-- LOGO -->
    <a class="brand" href="/" aria-label="Logo">
      <img src="/img/logo.png" alt="Logo" />
    </a>

    <!-- NAVEGACIÓN (desktop) -->
    <nav class="nav" aria-label="Principal">
      <a href="#productos">PRODUCTOS</a>
      <a href="#fotos">FOTOS</a>
      <a href="#nosotros">NOSOTROS</a>
      <a href="#contacto">CONTACTO</a>
    </nav>

    <!-- REDES (solo desktop) -->
    <div class="social" aria-label="Redes sociales">
      <!-- Instagram -->
      <a href="<?= htmlspecialchars($SITE['instagram'] ?? '#') ?>" aria-label="Instagram" class="ico" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <defs>
            <linearGradient id="IGgrad" x1="0" y1="0" x2="24" y2="24" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F58529"/><stop offset="0.5" stop-color="#DD2A7B"/><stop offset="1" stop-color="#515BD4"/>
            </linearGradient>
          </defs>
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke="url(#IGgrad)" stroke-width="2"/>
          <circle cx="12" cy="12" r="5.5" stroke="url(#IGgrad)" stroke-width="2"/>
          <circle cx="17.5" cy="6.5" r="1.2" fill="#DD2A7B"/>
        </svg>
      </a>

      <!-- WhatsApp -->
      <a href="<?= htmlspecialchars($SITE['whatsapp'] ?? '#') ?>" aria-label="WhatsApp" class="ico" target="_blank" rel="noopener">
        <svg viewBox="0 0 448 512" aria-hidden="true">
          <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157z" fill="#25D366"/>
          <path d="M320.8 297.3c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" fill="#FFFFFF"/>
        </svg>
      </a>

      <!-- Facebook -->
      <a href="<?= htmlspecialchars($SITE['facebook'] ?? '#') ?>" aria-label="Facebook" class="ico" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" fill="#1877F2" aria-hidden="true">
          <path d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 16.9911 5.65685 21.1283 10.4375 21.8789V14.8906H7.89844V12H10.4375V9.79688C10.4375 7.30078 11.9307 5.90625 14.2158 5.90625C15.3066 5.90625 16.4531 6.10156 16.4531 6.10156V8.57031H15.0469C13.6562 8.57031 13.3125 9.35156 13.3125 10.1562V12H16.3438L15.875 14.8906H13.3125V21.8789C18.0931 21.1283 22 16.9911 22 12Z"/>
        </svg>
      </a>
    </div>

    <!-- BURGER (mobile) -->
    <button class="topbar__burger" type="button" data-drawer-open aria-label="Abrir menú">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
           stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <line x1="3" y1="12" x2="21" y2="12"></line>
        <line x1="3" y1="18" x2="21" y2="18"></line>
      </svg>
    </button>
  </div>
</header>

<!-- DRAWER (menú mobile) -->
<div class="drawer" role="dialog" aria-modal="true" aria-label="Menú">
  <div class="drawer__backdrop" data-drawer-close></div>
  <aside class="drawer__panel">
    <button data-drawer-close class="topbar__burger" aria-label="Cerrar menú">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
           stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
      </svg>
    </button>

    <nav class="drawer__nav" aria-label="Menú mobile">
      <a href="#productos">Productos</a>
      <a href="#fotos">Fotos</a>
      <a href="#nosotros">Nosotros</a>
      <a href="#contacto">Contacto</a>
    </nav>
  </aside>
</div>
