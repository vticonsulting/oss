<!doctype html>
<html>
<head>
  <!-- ## SITE META ## -->
  <meta charset="utf-8">
  <?php if ($page->isHomePage()): ?>
    <title><?= $site->title() ?></title>
  <?php else: ?>
    <title><?= $page->title() . ' – ' . $site->title() ?></title>
  <?php endif ?>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="/favicon.ico">

  <!-- ## LOAD STYLSHEETS ## -->
  <link rel="stylesheet" media="all" href="/assets/css/style.css" />

  <!-- ## GOOGLE FONTS ## -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>

  <!-- custom css -->
  <?= css($page->files()->filterBy('extension', 'css')->pluck('url')) ?>

  <!-- custom javascript -->
  <?= js($page->files()->filterBy('extension', 'js')->pluck('url')) ?>
  <script>
  var site = {
    day: '<?= $site->day() ?>',
    month: '<?= $site->month() ?>',
    year: '<?= $site->year() ?>',
    hour: 0,
    min: 0,
    sec: 0
  };
  </script>
</head>

<body>

  <!-- ## HEADER ## -->
  <?php if ($page->isHomePage()): ?>
  <header id="qcHomeHeader">
  <?php else: ?>
  <header id="qcHeader">
  <?php endif ?>
    <div class="row">
      <?php snippet('logo') ?>
      <?php snippet('site_navigation') ?>
    </div>

    <?php if ($page->isHomePage()): ?>
    <div class="row">
      <?php snippet('countdown_timer') ?>
      <?php snippet('event_banner') ?>
    </div>
    <?php endif ?>
  </header>
  <!-- ## HEADER END ## -->

  <?php if (! $page->isHomePage()): ?>
  <!-- ## CONTENT WRAPPER ## -->
  <div id="qcContentWrapper">
  <?php endif ?>