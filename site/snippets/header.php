<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>

    <?= css('assets/css/site.css') ?>
    <?php if($page->noIndex() == '1'): ?>
        <meta name="robots" content="noindex, nofollow">
    <?php endif ?>
      <link rel="icon" href="https://bemoacademicconsulting.com/assets/images/favico.ico" type="image/x-icon">
    <?php if($page->description() != ''): ?>
    <meta name="description" content="<?= $page->description()->html() ?>">
    <?php else: ?>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <?php endif ?>

    <meta name="apple-mobile-web-app-title" content="<?= $site->title()->html() ?>">
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= $site->ga()->html() ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '<?= $site->ga()->html() ?>');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
      n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
      document,'script','https://connect.facebook.net/en_US/fbevents.js');
    // Insert Your Facebook Pixel ID below.
    fbq('init', '<?= $site->facebook()->html() ?>');
    fbq('track', 'PageView');
    </script>
    <!-- Insert Your Facebook Pixel ID below. -->
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= $site->facebook()->html() ?>&amp;ev=PageView&amp;noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->
  </head>
  <body>

    <header class="site-header" role="banner">
      <a href="<?= url() ?>/home-bemo"><?= $site->title()->html() ?></a>
      <p><?= $site->description()->html() ?></p>
    </header>
