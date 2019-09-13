<?php if (! $page->isHomePage()): ?>
</div>
<!-- ## CONTENT WRAPPER END ## -->
<?php snippet('site-footer') ?>
<?php endif ?>

<!-- ## LOAD JAVASCRIPTS ## -->
<?php snippet('scripts/global') ?>

<?php if ($page->isHomePage()): ?>
<?php snippet('scripts/supersized') ?>
<?php snippet('scripts/countdown') ?>
<?php snippet('scripts/marquee') ?>
<?php snippet('scripts/slideshow') ?>
<?php endif ?>

<script src="./includes/js/library.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;ver=3.5" type="text/javascript"></script>
<script src="./includes/js/init.js" type="text/javascript"></script>

</body>
</html>