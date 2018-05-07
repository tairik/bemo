<?php snippet('header') ?>
<?php snippet('menu') ?>
  <main role="main">
    <?= $page->images()->first() ?>
    <?= $page->text()->kirbytext() ?>
  </main>
<?php snippet('footer') ?>