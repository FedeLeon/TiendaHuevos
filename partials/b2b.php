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
          <a href="https://wa.me/549XXXXXXXXXX" class="ico" aria-label="WhatsApp" target="_blank" rel="noopener">
            <svg width="24" height="24" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
              <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 
             0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 
             106.1 27h.1c122.3 0 224.1-99.6 224.1-222 
             0-59.3-25.2-115-67.1-157z" fill="#25D366" />
              <path d="M320.8 297.3c-5.5-2.8-32.8-16.2-37.9-18
             -5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8
             c-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66
             -5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7
             -1.4-2.8-12.5-30.1-17.1-41.2
             -4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2
             -3.7 0-9.7 1.4-14.8 6.9
             -5.1 5.6-19.4 19-19.4 46.3
             0 27.3 19.9 53.7 22.6 57.4
             2.8 3.7 39.1 59.7 94.8 83.8
             35.2 15.2 49 16.5 66.6 13.9
             10.7-1.6 32.8-13.4 37.4-26.4
             4.6-13 4.6-24.1 3.2-26.4
             -1.3-2.5-5-3.9-10.5-6.6z" fill="#fff" />
            </svg>
          </a>

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