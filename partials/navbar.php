<header class="topbar">
  <div class="container">
    <a class="brand" href="/" aria-label="Logo">
      <img src="/img/logo.svg" alt="Logo" />
    </a>

    <nav class="nav">
      <a href="#productos">PRODUCTOS</a>
      <a href="#fotos">FOTOS</a>
      <a href="#nosotros">NOSOTROS</a>
      <a href="#contacto">CONTACTO</a>
    </nav>

    <div class="social">
      <a href="<?= htmlspecialchars($SITE['instagram']) ?>" aria-label="Instagram" class="ico">
        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <rect x="2.8" y="2.8" width="18.4" height="18.4" rx="5" ry="5"></rect>
          <circle cx="12" cy="12" r="4.2"></circle>
          <circle cx="17.7" cy="6.3" r="1.2" fill="currentColor" stroke="none"></circle>
        </svg>
      </a>
      <a href="<?= htmlspecialchars($SITE['facebook']) ?>" aria-label="Facebook" class="ico">
        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
          <path d="M13.5 21v-7.2h2.4l.4-2.8h-2.8V8.7c0-.8.2-1.3 1.3-1.3h1.6V4.8c-.3 0-1.2-.1-2.2-.1-2.1 0-3.6 1.3-3.6 3.7v2.6H8v2.8h2.2V21h3.3z" />
        </svg>
      </a>
      <a href="<?= htmlspecialchars($SITE['tiktok']) ?>" aria-label="TikTok" class="ico">
        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
          <path d="M21 8.2a7.3 7.3 0 0 1-4.7-1.7v7.4a5.9 5.9 0 1 1-5.9-5.9c.3 0 .6 0 .9.1v3.2a2.7 2.7 0 1 0 0 4.9V3h3c.3 1.5 1.4 2.9 2.8 3.6A6.9 6.9 0 0 0 21 7.1v1.1z"/>
        </svg>
      </a>
    </div>
  </div>
</header>
