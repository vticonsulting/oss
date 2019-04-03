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

  <!-- ## HEADER ## -->
  <?php if ($page->isHomePage()): ?>
  <header id="qcHomeHeader">
  <?php else: ?>
  <header id="qcHeader">
  <?php endif ?>
    <div class="row">
      <!-- ## LOGO ## -->
      <div id="qcLogo" class="col-6 col">
        <a href="/"><img src="./assets/images/oss-logo.png" alt="" /></a>
      </div>

      <!-- ## SITE NAVIGATION ## -->
      <nav id="qcPriNav" class="col-6 col">
        <ul class="clearfix">
          <li>
            <a href="event">
              <i class="icon-calendar-2 icon"></i> 
              <span>Event Details</span>
            </a>
          </li>
          <li class="current">
            <a href="ticket">
              <i class="icon-ticket icon"></i> 
              <span>Buy Tickets</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <?php if ($page->isHomePage()): ?>
    <div class="row">
      <!-- ## COUNTDOWN TIMER ## -->
      <div id="qcEventCountDown" class="col-6 col">
        <!-- ## DAYS ## -->
        <div class="dash days_dash">
          <div class="dash_title">days</div>
          <div class="digits clearfix">
            <div class="digit digit-1">0</div>
            <div class="digit digit-2">0</div>
            <div class="digit digit-3">0</div>
          </div>
        </div>
        <!-- ## HOURS ## -->
        <div class="dash hours_dash">
          <div class="dash_title">hours</div>
          <div class="digits clearfix">
            <div class="digit digit-1">0</div>
            <div class="digit digit-2">0</div>
          </div>
        </div>
        <!-- ## MINUTES ## -->
        <div class="dash minutes_dash">
          <div class="dash_title">minutes</div>
          <div class="digits clearfix">
            <div class="digit digit-1">0</div>
            <div class="digit digit-2">0</div>
          </div>
        </div>
        <!-- ## SECONDS ## -->
        <div class="dash seconds_dash">
          <div class="dash_title">seconds</div>
          <div class="digits clearfix">
            <div class="digit digit-1">0</div>
            <div class="digit digit-2">0</div>
          </div>
        </div>
      </div>

      <!-- ## EVENT BANNER ## -->
      <div id="qcEventBanner" class="col-6 col">
        <ul>
          <li><b>Next Event</b> Dec-17-2016 @ The Sheraton</li>
          <li><b>Discount $10 Tix</b> Selling Now</li>
          <li><b>#All80s #All90s</b> Your Music.</li>
          <li><b>#OldSchoolEXPERIENCE.</b> The Soundtrack Of You Life.</li>
        </ul>
      </div>
    </div>
    <?php endif ?>
  </header>
  <!-- ## HEADER END ## -->

  <?php if (! $page->isHomePage()): ?>
  <!-- ## CONTENT WRAPPER ## -->
  <div id="qcContentWrapper">
  <?php endif ?>