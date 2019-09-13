<!-- ## HEADER ## -->
<?php if ($page->isHomePage()): ?>
<header id="qcHomeHeader">
<?php else: ?>
<header id="qcHeader">
<?php endif ?>

  <div class="row">
    <?php snippet('site-header-logo') ?>
    <?php snippet('site-header-nav') ?>
  </div>

  <?php if ($page->isHomePage()): ?>
  <div class="row">
    <?php snippet('home-countdown') ?>
    <?php snippet('home-marquee') ?>
  </div>
  <?php endif ?>
</header>
<!-- ## HEADER END ## -->