<?php snippet('header') ?>
<?php snippet('menu') ?>
  Our Main Office: <?=  $page->street()->html() ?>, <?=  $page->postal()->html() ?>, <?=  $page->location()->html() ?><br><br>
  Our Phone Number: <?=  $page->phone()->html() ?><br><br>
  Our Email: <a href="mailto:<?=  $page->email()->html() ?>"><?=  $page->email()->html() ?></a><br><br>
  Our Twitter: <?=  $page->twitter()->html() ?><br><br>

<?php snippet('footer') ?>