<nav class="menu cf" role="navigation">
  <ul class="cf">
    <?php foreach($pages->visible() as $item): ?>
    <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>
