<section class="section section--black cta" id="suscripcion">
  <div class="wrap">
    <h2 class="title-stamp" style="margin-bottom:12px;">COMPRA DIRECTA</h2>

    <div style="display:grid; gap:18px; grid-template-columns:1fr; align-items:start;">
      <div style="background:#0f0f0f; border:1px solid #232323; border-radius:10px; padding:16px;">
        <p class="cta__text" style="text-transform:none; font-size:16px; opacity:.95; margin-bottom:10px;">
          🐓🥚 <strong>Huevos colorados frescos</strong>, directos del campo. Pedí por WhatsApp y
          <strong>te lo llevamos a domicilio</strong> en Trenque Lauquen o retirás en nuestros puntos de venta.
        </p>

        <div style="display:grid; gap:10px; grid-template-columns:1fr; margin-top:10px;">
          <div style="background:#111; border:1px solid #2c2c2c; border-radius:8px; padding:12px;">
            <strong>Horarios de entrega</strong><br>
            Lunes a Sábado, 10–18 h (coordinar por WhatsApp).
          </div>
          <div style="background:#111; border:1px solid #2c2c2c; border-radius:8px; padding:12px;">
            <strong>Métodos de pago</strong><br>
            💸 Transferencia (alias: <em>huevos.clarayema</em>) · 💵 Efectivo al recibir.
          </div>
          <div style="background:#111; border:1px solid #2c2c2c; border-radius:8px; padding:12px;">
            <strong>Zonas</strong><br>
            Trenque Lauquen y alrededores. Consultá otras zonas.
          </div>
        </div>
      </div>

      <div class="cta__pedido">
        <p class="cta__pedido-title">Hacé tu pedido ahora</p>

        <!-- Icono de WhatsApp a color -->
        <div class="cta__pedido-icon">
          <svg width="48" height="48" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1
      c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157z" fill="#25D366" />
            <path d="M320.8 297.3c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4
      -32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1
      -41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8
      6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1
      59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4
      4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" fill="#FFFFFF" />
          </svg>
        </div>

        <!-- Botón principal -->
        <a class="btn btn--wsp"
          href="https://wa.me/<?= urlencode($SITE['whatsapp']) ?>?text=Hola%20Clara%20y%20Ema,%20quiero%20hacer%20un%20pedido%20B2C%20🙂"
          target="_blank" rel="noopener">
          Escribir por WhatsApp
        </a>

        <!-- Botones de tamaños -->
        <div class="cta__pedido-options">
          <a class="btn btn--dark"
            href="https://wa.me/<?= urlencode($SITE['whatsapp']) ?>?text=Quiero%20XXG%20x15%20(80-100g)%20por%20favor.">XXG
            ×15</a>
          <a class="btn btn--dark"
            href="https://wa.me/<?= urlencode($SITE['whatsapp']) ?>?text=Quiero%20XG%20x15%20(74-79g)%20por%20favor.">XG
            ×15</a>
          <a class="btn btn--dark"
            href="https://wa.me/<?= urlencode($SITE['whatsapp']) ?>?text=Quiero%20G%20x30%20(66-73g)%20por%20favor.">G
            ×30</a>
        </div>
      </div>

    </div>

    <p class="cta__text" style="max-width:900px; text-transform:none;">
      *Recordá que algunos puntos de venta respetan el <strong>precio sugerido</strong>
    </p>
  </div>

  <div class="shape shape--bottom to-orange">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,60 C260,140 1180,0 1440,60 L1440,120 L0,120 Z"></path>
    </svg>
  </div>
</section>