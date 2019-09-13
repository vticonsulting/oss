<!DOCTYPE html>
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
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- ## LOAD STYLSHEETS ## -->
  <link rel="stylesheet" media="all" href="./includes/css/style.css" />

  <!-- ## GOOGLE FONTS ## -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>

  <!-- custom css -->
  <?= css($page->files()->filterBy('extension', 'css')->pluck('url')) ?>

  <!-- custom javascript -->
  <?= js($page->files()->filterBy('extension', 'js')->pluck('url')) ?>
</head>

<body>
  <?php snippet('site-header') ?>

  <?php if (! $page->isHomePage()): ?>
    <!-- ## CONTENT WRAPPER ## -->
    <div id="qcContentWrapper">
  <?php endif ?>