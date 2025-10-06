<!-- ===================== B2B / SUSCRIPCIONES (NARANJA) ===================== -->
<section class="section section--orange b2b" id="contacto">
  <div class="wrap">
    <header class="subs__head">
      <h2 class="title-stamp"><span>VENTA</span> MAYORISTA · SUSCRIPCIONES</h2>
      <p class="subs__subtitle">
        Elegí cuántos <strong>maples por semana</strong> querés recibir. El cobro es
        <strong>automático 1 vez por mes</strong> vía Mercado Pago. Cancelás cuando quieras.
      </p>
    </header>

    <!-- CTA que abre el modal con los planes -->
    <p style="margin: 10px 0 20px">
      <button id="openPlans" class="btn btn--mp" type="button">Ver planes y suscribirme</button>
    </p>

    <!-- Columna derecha: cómo funciona / beneficios (queda visible en el bloque) -->
    <div class="subs__grid only-aside">
      <aside class="subs__aside">
        <div class="card">
          <h4 class="card__title">¿Cómo funciona?</h4>
          <ol class="steps">
            <li>Elegís el plan y te suscribís con Mercado Pago.</li>
            <li>Coordinamos <strong>día de entrega semanal</strong>.</li>
            <li>Facturación <strong>mensual automática</strong>.</li>
            <li>Podés <strong>pausar o cancelar</strong> cuando quieras.</li>
          </ol>
        </div>

        <div class="card">
          <h4 class="card__title">Beneficios B2B</h4>
          <ul class="bullets">
            <li>Huevos colorados frescos, libres de jaula.</li>
            <li>Precio sugerido y material de exhibición.</li>
            <li>Atención directa por WhatsApp.</li>
            <li>Entregas en Trenque Lauquen y alrededores.</li>
          </ul>
        </div>

        <div class="card card--cta">
          <p style="margin:0 0 8px;">¿Necesitás otro volumen?</p>
          <a href="https://wa.me/549XXXXXXXXXX" class="ico" aria-label="WhatsApp" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M20.5 3.5A11 11 0 0 0 3.2 17.3L2 22l4.8-1.2A11 11 0 1 0 20.5 3.5ZM12 20.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-2.5.6.7-2.4-.2-.3A8.2 8.2 0 1 1 12 20.2Zm4.6-5.9c-.2-.1-1.3-.6-1.5-.7s-.3-.1-.5.1-.6.7-.7.8-.3.2-.5.1a6.6 6.6 0 0 1-2-1.2 7.6 7.6 0 0 1-1.4-1.7c-.1-.2 0-.3.1-.5l.4-.5c.1-.2.2-.3.2-.5s0-.3 0-.4 0-.5-.2-.8c-.1-.2-.5-.5-.7-.6s-.4-.2-.6-.2h-.5c-.2 0-.5 0-.7.3s-.9.8-.9 2 .9 2.3 1 2.4 1.8 2.6 4.3 3.6l.6.2c.6.2 1.2.2 1.6.1a2.8 2.8 0 0 0 1.8-1.2c.2-.4.2-.9.1-1 0-.2-.2-.2-.4-.3Z"/></svg></a>
          <a class="btn" href="https://wa.me/549XXXXXXXXXX" target="_blank" rel="noopener">Hablar con ventas</a>
          <small class="muted" style="display:block;margin-top:8px;">Armamos un plan a medida.</small>
        </div>
      </aside>
    </div>

    <!-- CARRUSEL DE MARCAS (logos) -->
    <div class="brands">
      <h3 class="brands__title">Puntos adheridos</h3>
      <div class="brands__rail">
        <button class="brands__btn brands__btn--prev" type="button" aria-label="Anterior">‹</button>
        <div class="brands__viewport" id="brandsViewport">
          <!-- 6+ logos (poné tus PNG/SVG en /img/logos/) -->
          <div class="brand"><img src="img/logos/logo1.png" alt="Marca 1"></div>
          <div class="brand"><img src="img/logos/logo2.png" alt="Marca 2"></div>
          <div class="brand"><img src="img/logos/logo3.png" alt="Marca 3"></div>
          <div class="brand"><img src="img/logos/logo4.png" alt="Marca 4"></div>
          <div class="brand"><img src="img/logos/logo5.png" alt="Marca 5"></div>
          <div class="brand"><img src="img/logos/logo6.png" alt="Marca 6"></div>
        </div>
        <button class="brands__btn brands__btn--next" type="button" aria-label="Siguiente">›</button>
      </div>
    </div>

    <p class="subs__legal">
      * Los importes se cobran una vez al mes (equivalente a 4 semanas). Sujetos a zona y stock.
      Cancelás en cualquier momento desde tu cuenta de Mercado Pago.
    </p>
  </div>

  <div class="shape shape--bottom to-black">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,80 C280,0 1160,160 1440,80 L1440,120 L0,120 Z"></path>
    </svg>
  </div>
</section>

<!-- ===================== MODAL DE PLANES ===================== -->
<div class="subsModal" id="subsModal" aria-hidden="true">
  <div class="subsModal__backdrop" data-close-modal></div>
  <div class="subsModal__panel" role="dialog" aria-modal="true" aria-labelledby="subsTitle">
    <header class="subsModal__head">
      <h3 id="subsTitle">Elegí tu plan</h3>
      <button class="subsModal__close" id="closePlans" type="button" aria-label="Cerrar">✕</button>
    </header>

    <!-- Grid responsive con las tarjetas (reutiliza .plan existentes) -->
    <div class="subsModal__grid">
      <!-- PLAN 2W -->
      <article class="plan">
        <div class="plan__badge">Popular</div>
        <h4 class="plan__title">2 maples / semana</h4>
        <p class="plan__desc">Ideal para kioscos o despensas chicas.</p>
        <div class="plan__price">
          <span class="plan__amount">$ <strong>—</strong></span>
          <span class="plan__period">por mes</span>
        </div>
        <ul class="plan__features">
          <li>8 maples por mes</li>
          <li>Entrega sin cargo en zona</li>
          <li>Soporte por WhatsApp</li>
          <li>Precio sugerido</li>
        </ul>
        <a class="btn btn--mp" href="https://mpago.la/tu-plan-2w" target="_blank" rel="noopener">Suscribirme</a>
        <small class="plan__note">Cobro mensual recurrente por Mercado Pago.</small>
      </article>

      <!-- PLAN 3W -->
      <article class="plan plan--highlight">
        <div class="plan__badge">Mejor valor</div>
        <h4 class="plan__title">3 maples / semana</h4>
        <p class="plan__desc">Optimiza el costo por unidad.</p>
        <div class="plan__price">
          <span class="plan__amount">$ <strong>—</strong></span>
          <span class="plan__period">por mes</span>
        </div>
        <ul class="plan__features">
          <li>12 maples por mes</li>
          <li>Entrega sin cargo en zona</li>
          <li>Prioridad de stock</li>
          <li>Soporte por WhatsApp</li>
        </ul>
        <a class="btn btn--mp" href="https://mpago.la/tu-plan-3w" target="_blank" rel="noopener">Suscribirme</a>
        <small class="plan__note">Cancelás cuando quieras.</small>
      </article>

      <!-- PLAN 4W -->
      <article class="plan">
        <h4 class="plan__title">4 maples / semana</h4>
        <p class="plan__desc">Para restaurantes o almacenes con alta demanda.</p>
        <div class="plan__price">
          <span class="plan__amount">$ <strong>—</strong></span>
          <span class="plan__period">por mes</span>
        </div>
        <ul class="plan__features">
          <li>16 maples por mes</li>
          <li>Entrega programada</li>
          <li>Precio mayorista</li>
          <li>Soporte por WhatsApp</li>
        </ul>
        <a class="btn btn--mp" href="https://mpago.la/tu-plan-4w" target="_blank" rel="noopener">Suscribirme</a>
        <small class="plan__note">Cobro automático mensual.</small>
      </article>
    </div>
  </div>
</div>
