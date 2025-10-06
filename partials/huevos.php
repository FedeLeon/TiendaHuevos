<section class="section section--orange huevos" id="huevos">
  <div class="wrap">
    <div class="huevos__head">
      <h2 class="title-stamp"><span>NUESTROS</span> HUEVOS</h2>
    </div>

    <!-- ====== GRID 2 COLUMNAS: a la izquierda tamaños, a la derecha presentaciones ====== -->
    <div class="huevos__grid">

      <!-- ====== COLUMNA IZQUIERDA: CARROUSEL TAMAÑOS ====== -->
      <div class="huevos__col">
        <h3 class="huevos__coltitle">Tamaños y gramajes</h3>

        <div class="carousel" aria-label="Carrousel tamaños">
          <button class="carousel__btn carousel__btn--prev" data-carousel="carousel-sizes" data-dir="prev" aria-label="Anterior">
            ‹
          </button>
          <button class="carousel__btn carousel__btn--next" data-carousel="carousel-sizes" data-dir="next" aria-label="Siguiente">
            ›
          </button>

          <div class="carousel__viewport" id="carousel-sizes">
            <!-- Slide XXG -->
            <article class="eggcard">
              <img class="eggcard__img" src="/img/huevo-xxg.png" alt="Huevo XXG">
              <div class="eggcard__copy">
                <h4 class="eggcard__title">XXG · Extra extra grandes</h4>
                <p class="eggcard__grams">80 a 100 g por unidad</p>
                <ul class="eggcard__bullets">
                  <li>Selección premium</li>
                  <li>Excelente para preparación con yema protagonista</li>
                </ul>
              </div>
            </article>

            <!-- Slide XG -->
            <article class="eggcard">
              <img class="eggcard__img" src="/img/huevo-xg.png" alt="Huevo XG">
              <div class="eggcard__copy">
                <h4 class="eggcard__title">XG · Extra grandes*</h4>
                <p class="eggcard__grams">74 a 79 g por unidad</p>
                <ul class="eggcard__bullets">
                  <li>Equilibrio tamaño/calidad</li>
                  <li>Ideal para pastelería y brunch</li>
                </ul>
              </div>
            </article>

            <!-- Slide G -->
            <article class="eggcard">
              <img class="eggcard__img" src="/img/huevo-g.png" alt="Huevo G">
              <div class="eggcard__copy">
                <h4 class="eggcard__title">G · Grandes*</h4>
                <p class="eggcard__grams">66 a 73 g por unidad</p>
                <ul class="eggcard__bullets">
                  <li>Rendidor para uso diario</li>
                  <li>Consistencia pareja</li>
                </ul>
              </div>
            </article>

            <!-- Slide M -->
            <article class="eggcard">
              <img class="eggcard__img" src="/img/huevo-m.png" alt="Huevo M">
              <div class="eggcard__copy">
                <h4 class="eggcard__title">M · Medianos</h4>
                <p class="eggcard__grams">53 a 65 g por unidad</p>
                <ul class="eggcard__bullets">
                  <li>Económico y versátil</li>
                  <li>Perfecto para preparaciones cotidianas</li>
                </ul>
              </div>
            </article>
          </div><!-- /.carousel__viewport -->
        </div><!-- /.carousel -->
      </div><!-- /.huevos__col -->

      <!-- ====== COLUMNA DERECHA: CARROUSEL PRESENTACIONES ====== -->
      <div class="huevos__col">
        <h3 class="huevos__coltitle">Presentaciones</h3>

        <div class="carousel" aria-label="Carrousel presentaciones">
          <button class="carousel__btn carousel__btn--prev" data-carousel="carousel-packs" data-dir="prev" aria-label="Anterior">
            ‹
          </button>
          <button class="carousel__btn carousel__btn--next" data-carousel="carousel-packs" data-dir="next" aria-label="Siguiente">
            ›
          </button>

          <div class="carousel__viewport" id="carousel-packs">
            <!-- 6 slides con imagen estática (vos ponés las fotos) -->
            <article class="presentcard">
              <img src="/img/presentacion-1.png" alt="Presentación 1">
            </article>
            <article class="presentcard">
              <img src="/img/presentacion-2.png" alt="Presentación 2">
            </article>
            <article class="presentcard">
              <img src="/img/presentacion-3.png" alt="Presentación 3">
            </article>
            <article class="presentcard">
              <img src="/img/presentacion-4.png" alt="Presentación 4">
            </article>
            <article class="presentcard">
              <img src="/img/presentacion-5.png" alt="Presentación 5">
            </article>
            <article class="presentcard">
              <img src="/img/presentacion-6.png" alt="Presentación 6">
            </article>
          </div><!-- /.carousel__viewport -->
        </div><!-- /.carousel -->
      </div><!-- /.huevos__col -->

    </div><!-- /.huevos__grid -->
  </div>

  <!-- curva inferior a negro -->
  <div class="shape shape--bottom to-black">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,65 C280,-15 1160,145 1440,65 L1440,120 L0,120 Z"></path>
    </svg>
  </div>

  <!-- JS mínimo para botones del carrousel -->
  <script>
    (function(){
      const byId = (id) => document.getElementById(id);
      document.querySelectorAll('.carousel__btn').forEach(btn=>{
        const viewportId = btn.dataset.carousel;
        const dir = btn.dataset.dir === 'next' ? 1 : -1;
        const vp = byId(viewportId);
        if(!vp) return;
        btn.addEventListener('click', () => {
          vp.scrollBy({ left: dir * vp.clientWidth, behavior: 'smooth' });
        });
      });
    })();
  </script>
</section>
