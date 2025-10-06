<?php require __DIR__.'/config.php'; ?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($SITE['title']) ?></title>

  <!-- CSS base + por bloque (mantené este orden) -->
  <link rel="stylesheet" href="/css/base.css" />
  <link rel="stylesheet" href="/css/navbar.css" />
  <link rel="stylesheet" href="/css/hero.css" />
  <link rel="stylesheet" href="/css/historia.css" />
  <link rel="stylesheet" href="/css/gallinas.css" />
  <link rel="stylesheet" href="/css/huevos.css" />
  <link rel="stylesheet" href="/css/b2c.css" />
  <link rel="stylesheet" href="/css/b2b.css" />
  <link rel="stylesheet" href="/css/footer.css" />
</head>
<body>

  <?php include __DIR__.'/partials/navbar.php'; ?>

  <main class="page">
    <?php
      include __DIR__.'/partials/hero.php';
      include __DIR__.'/partials/historia.php';
      include __DIR__.'/partials/gallinas.php';
      include __DIR__.'/partials/huevos.php';
      include __DIR__.'/partials/b2c.php';
      include __DIR__.'/partials/b2b.php';
    ?>
  </main>

  <?php include __DIR__.'/partials/footer.php'; ?>

  <script>
  (function(){
    const modal   = document.getElementById('subsModal');
    const openBtn = document.getElementById('openPlans');
    const closeBtn= document.getElementById('closePlans');
    const backdrop= modal.querySelector('[data-close-modal]');

    function openModal(){
      modal.classList.add('is-open');
      document.body.style.overflow = 'hidden';
      // foco accesible
      closeBtn.focus();
    }
    function closeModal(){
      modal.classList.remove('is-open');
      document.body.style.overflow = '';
      openBtn.focus();
    }

    openBtn.addEventListener('click', openModal);
    closeBtn.addEventListener('click', closeModal);
    backdrop.addEventListener('click', closeModal);
    window.addEventListener('keydown', (e)=>{ if(e.key === 'Escape' && modal.classList.contains('is-open')) closeModal(); });

    // ===== Carrusel marcas: desplazamiento suave
    const vp   = document.getElementById('brandsViewport');
    const prev = document.querySelector('.brands__btn--prev');
    const next = document.querySelector('.brands__btn--next');
    const step = () => Math.min(260, vp.clientWidth * 0.6);

    prev.addEventListener('click', ()=> vp.scrollBy({left: -step(), behavior:'smooth'}));
    next.addEventListener('click', ()=> vp.scrollBy({left:  step(), behavior:'smooth'}));
  })();
</script>

</body>
</html>
