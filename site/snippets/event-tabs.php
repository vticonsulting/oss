<!-- ## MOB NAV ## -->
<div id="qcMbTrigger"></div>

<!-- ## TABS ## -->
<div id="qcTabs" class="tabs">

  <!-- ## TAB NAV ## -->
  <ul id="qcTabNav" class="clearfix">
    <?php foreach ($page->tabs()->toStructure() as $tab): ?>
    <li>
      <a href="#<?= $tab->tab_nav_title() ?>">
        <i class="icon-picture icon"></i> 
        <span><?= $tab->tab_nav_title() ?></span>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
  <?php snippet('event-tabs-about') ?>
  <?php snippet('event-tabs-venue') ?>
  <?php snippet('event-tabs-gallery') ?>
</div>
<!-- ## TABS END ## -->