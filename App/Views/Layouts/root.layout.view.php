<?php
/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */
$isCatalog = ($_GET['a'] ?? '') === 'katalog';
?>
<!doctype html>
<html lang="sk">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Booklist – objavujte knihy a zdieľajte čitateľské skúsenosti.">
  <title>Booklist – <?= $isCatalog ? 'Katalóg kníh' : 'Domov' ?></title>
  <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
</head>
<body>
  <div class="page-shell">
    <header class="site-header">
      <a href="<?= $link->url('home.index') ?>" class="brand" aria-label="Booklist – domov"><span class="brand-icon" aria-hidden="true">▣</span> Booklist</a>
      <nav class="main-nav" aria-label="Hlavná navigácia">
        <a href="<?= $link->url('home.index') ?>" <?= !$isCatalog ? 'aria-current="page"' : '' ?>>Domov</a>
        <a href="<?= $link->url('home.katalog') ?>" <?= $isCatalog ? 'aria-current="page"' : '' ?>>Katalóg kníh</a>
        <span class="nav-placeholder">Moja knižnica</span>
      </nav>
      <div class="account-nav"><span>Prihlásenie</span><span class="register-placeholder">Registrácia</span></div>
    </header>
    <main>
      <?= $contentHTML ?>
    </main>
    <footer class="site-footer"><small>Booklist</small></footer>
  </div>
</body>
</html>
