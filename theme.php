<?php global $Wcms ?>
<!DOCTYPE html>
<html lang="<?= $Wcms->get('config', 'siteLang') ?>">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>

  <?= $Wcms->css() ?>
  <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
</head>
<body>
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>
<nav>
    <a href="<?= $Wcms->url() ?>">
        <?= $Wcms->siteTitle() ?>
    </a>
    <?= $Wcms->menu() ?>
</nav>
<main>
    <?= $Wcms->page('content') ?>
</main>
<aside>
    <?= $Wcms->block('subside') ?>
</aside>
<footer>
    <?= $Wcms->footer() ?>
</footer>
    <?= $Wcms->js() ?>
</body>
</html>

