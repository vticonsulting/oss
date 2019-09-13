<!-- ## EVENT BANNER ## -->
<div id="qcEventBanner" class="col-6 col">
  <ul>
    <?php foreach ($site->marquee()->toStructure() as $item): ?>
    <li><?= $item->highlight() ?></li>
    <?php endforeach ?>
  </ul>
</div>