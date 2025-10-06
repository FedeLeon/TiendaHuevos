<footer class="section section--black footer">
  <div class="wrap" style="padding-top:34px; padding-bottom:24px;">
    <div style="display:grid; gap:18px; grid-template-columns:1fr; color:#d8d8d8;">
      <div>
        <a class="brand" href="/" aria-label="Logo" style="border-color:#333; background:#0f0f0f;">
          <img src="/img/logo.svg" alt="Logo" style="height:22px; filter:invert(1);" />
        </a>
        <p style="margin:10px 0 0; max-width:540px; opacity:.85;">
          Huevos frescos colorados, de gallinas libres de jaula. Envíos en Trenque Lauquen y puntos de venta seleccionados.
        </p>
      </div>

      <div>
        <p style="font-weight:800; letter-spacing:.6px; margin:0 0 8px;">Navegación</p>
        <div style="display:flex; gap:14px; flex-wrap:wrap;">
          <a href="#historia" style="color:#d8d8d8; text-decoration:none;">Historia</a>
          <a href="#gallinas" style="color:#d8d8d8; text-decoration:none;">Gallinas</a>
          <a href="#huevos" style="color:#d8d8d8; text-decoration:none;">Huevos</a>
          <a href="#suscripcion" style="color:#d8d8d8; text-decoration:none;">B2C</a>
          <a href="#contacto" style="color:#d8d8d8; text-decoration:none;">B2B</a>
        </div>
      </div>

      <div>
        <p style="font-weight:800; letter-spacing:.6px; margin:0 0 8px;">Contacto</p>
        <p style="margin:0 0 6px;"><a href="https://wa.me/549XXXXXXXXXX" class="ico" aria-label="WhatsApp" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M20.5 3.5A11 11 0 0 0 3.2 17.3L2 22l4.8-1.2A11 11 0 1 0 20.5 3.5ZM12 20.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-2.5.6.7-2.4-.2-.3A8.2 8.2 0 1 1 12 20.2Zm4.6-5.9c-.2-.1-1.3-.6-1.5-.7s-.3-.1-.5.1-.6.7-.7.8-.3.2-.5.1a6.6 6.6 0 0 1-2-1.2 7.6 7.6 0 0 1-1.4-1.7c-.1-.2 0-.3.1-.5l.4-.5c.1-.2.2-.3.2-.5s0-.3 0-.4 0-.5-.2-.8c-.1-.2-.5-.5-.7-.6s-.4-.2-.6-.2h-.5c-.2 0-.5 0-.7.3s-.9.8-.9 2 .9 2.3 1 2.4 1.8 2.6 4.3 3.6l.6.2c.6.2 1.2.2 1.6.1a2.8 2.8 0 0 0 1.8-1.2c.2-.4.2-.9.1-1 0-.2-.2-.2-.4-.3Z"/></svg></a>

          <a href="https://wa.me/<?= urlencode($SITE['whatsapp']) ?>" target="_blank" rel="noopener" style="color:#fff; text-decoration:none;">+<?= htmlspecialchars($SITE['whatsapp']) ?></a></p>
        <p style="margin:0 0 6px;">Email:
          <a href="mailto:<?= htmlspecialchars($SITE['email']) ?>" style="color:#fff; text-decoration:none;"><?= htmlspecialchars($SITE['email']) ?></a></p>
        <div class="social" style="margin-left:0; gap:10px; margin-top:6px;">
          <a href="<?= htmlspecialchars($SITE['instagram']) ?>" aria-label="Instagram" class="ico" style="border-color:#333">
            <!-- mismo SVG instagram -->
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2.8" y="2.8" width="18.4" height="18.4" rx="5" ry="5"></rect><circle cx="12" cy="12" r="4.2"></circle><circle cx="17.7" cy="6.3" r="1.2" fill="currentColor" stroke="none"></circle></svg>
          </a>
          <a href="<?= htmlspecialchars($SITE['facebook']) ?>" aria-label="Facebook" class="ico" style="border-color:#333">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M13.5 21v-7.2h2.4l.4-2.8h-2.8V8.7c0-.8.2-1.3 1.3-1.3h1.6V4.8c-.3 0-1.2-.1-2.2-.1-2.1 0-3.6 1.3-3.6 3.7v2.6H8v2.8h2.2V21h3.3z"/></svg>
          </a>
          <a href="<?= htmlspecialchars($SITE['tiktok']) ?>" aria-label="TikTok" class="ico" style="border-color:#333">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M21 8.2a7.3 7.3 0 0 1-4.7-1.7v7.4a5.9 5.9 0 1 1-5.9-5.9c.3 0 .6 0 .9.1v3.2a2.7 2.7 0 1 0 0 4.9V3h3c.3 1.5 1.4 2.9 2.8 3.6A6.9 6.9 0 0 0 21 7.1v1.1z"/></svg>
          </a>
        </div>
      </div>
    </div>

    <hr style="border:0; border-top:1px solid #262626; margin:18px 0;">
    <div style="display:flex; justify-content:space-between; gap:10px; flex-wrap:wrap; color:#9a9a9a; font-size:13px;">
      <span>© <?= date('Y') ?> Clara &amp; Ema — Todos los derechos reservados.</span>
      <span>Hecho con ♥ en Trenque Lauquen</span>
    </div>
  </div>
</footer>
