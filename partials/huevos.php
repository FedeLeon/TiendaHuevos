<section class="section section--orange huevos" id="huevos">
  <div class="wrap">
    <div class="huevos__head">
      <h2 class="title-stamp"><span>NUESTROS</span> HUEVOS</h2>
    </div>

    <!-- ====== GRID 2 COLUMNAS ====== -->
    <div class="huevos__grid">

      <!-- ====== COLUMNA IZQUIERDA: CARRUSEL TAMAÑOS ====== -->
      <div class="huevos__col">
        <h3 class="huevos__coltitle">Tamaños y gramajes</h3>

        <div class="carousel carousel--sizes" aria-label="Carrousel tamaños">
          <button class="carousel__btn carousel__btn--prev" data-carousel="carousel-sizes" data-dir="prev" aria-label="Anterior">‹</button>
          <button class="carousel__btn carousel__btn--next" data-carousel="carousel-sizes" data-dir="next" aria-label="Siguiente">›</button>

          <div class="carousel__viewport" id="carousel-sizes">

            <article class="eggslide">
              <img class="eggslide__bg" src="/img/slide-tamano-xxg.png" alt="XXG info">
              <img class="eggslide__egg" src="/img/huevo-xxg.png" alt="Huevito XXG">
            </article>

            <article class="eggslide">
              <img class="eggslide__bg" src="/img/slide-tamano-xg.png" alt="XG info">
              <img class="eggslide__egg" src="/img/huevo-xg.png" alt="Huevito XG">
            </article>

            <article class="eggslide">
              <img class="eggslide__bg" src="/img/slide-tamano-g.png" alt="G info">
              <img class="eggslide__egg" src="/img/huevo-g.png" alt="Huevito G">
            </article>

            <article class="eggslide">
              <img class="eggslide__bg" src="/img/slide-tamano-m.png" alt="M info">
              <img class="eggslide__egg" src="/img/huevo-m.png" alt="Huevito M">
            </article>

          </div>
        </div>
      </div>

      <!-- ====== COLUMNA DERECHA: CARRUSEL PRESENTACIONES ====== -->
      <div class="huevos__col">
        <h3 class="huevos__coltitle">Presentaciones</h3>

        <div class="carousel carousel--packs" aria-label="Carrousel presentaciones">
          <button class="carousel__btn carousel__btn--prev" data-carousel="carousel-packs" data-dir="prev" aria-label="Anterior">‹</button>
          <button class="carousel__btn carousel__btn--next" data-carousel="carousel-packs" data-dir="next" aria-label="Siguiente">›</button>

          <div class="carousel__viewport" id="carousel-packs">

            <article class="presentcard">
              <img class="presentcard__bg" src="/img/presentacion-1.png" alt="Presentación 1">
            </article>
            <article class="presentcard">
              <img class="presentcard__bg" src="/img/presentacion-2.png" alt="Presentación 2">
            </article>
            <article class="presentcard">
              <img class="presentcard__bg" src="/img/presentacion-3.png" alt="Presentación 3">
            </article>
            <article class="presentcard">
              <img class="presentcard__bg" src="/img/presentacion-4.png" alt="Presentación 4">
            </article>
            <article class="presentcard">
              <img class="presentcard__bg" src="/img/presentacion-5.png" alt="Presentación 5">
            </article>
            <article class="presentcard">
              <img class="presentcard__bg" src="/img/presentacion-6.png" alt="Presentación 6">
            </article>

          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- curva inferior a negro -->
  <div class="shape shape--bottom to-black">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,65 C280,-15 1160,145 1440,65 L1440,120 L0,120 Z"></path>
    </svg>
  </div>

  <!-- JS mínimo -->
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
