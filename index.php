<?php require __DIR__.'/config.php'; ?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($SITE['title']) ?></title>

  <!-- ========== CSS base + por bloque (mantené este orden) ========== -->
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

  <!-- ========== JS por bloque (cada archivo hace guardas internas) ========== -->
  <script src="/assets/js/navbar.js" defer></script>
  <script src="/assets/js/b2b.js" defer></script>
  <!-- Si usás carruseles en Huevos con scroll-snap, activalo: -->
  <script src="/assets/js/huevos.js" defer></script>
</body>
</html>
