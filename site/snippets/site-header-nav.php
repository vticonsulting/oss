<!-- ## SITE NAVIGATION ## -->
<!-- <nav id="qcPriNav" class="col-6 col">
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
</nav> -->

<nav id="qcPriNav" class="col-6 col">
  <ul class="clearfix">
    <?php foreach ($site->children()->listed() as $subpage): ?>
    <li>
      <a href="<?= $subpage->url() ?>">
        <i class="icon <?= $subpage->icon_name() ?>"></i>
        <span><?= $subpage->nav_text() ?></span>
      </a>
    </li>
    <?php endforeach ?>
  </ul>

</nav>