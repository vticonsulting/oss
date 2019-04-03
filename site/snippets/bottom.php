<?php if (! $page->isHomePage()): ?>
</div>
<!-- ## CONTENT WRAPPER END ## -->


<!-- ## FOOTER ## -->
<footer id="qcFooter" class="clearfix">
	<div class="qcContainer">

		<!-- ## FOOTER NAV ## -->
		<div class="col-5 col">
			<nav id="qcFooterNav">
				<ul class="clearfix">
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>

		<!-- ## FOOTER LOGO ## -->
		<div id="qcFooterLogo" class="col-2 col">
			<a href="#">
				<img src="./includes/img/placeholder/logo-footer.png" alt="LOGO" />
			</a>
		</div>

		<!-- ## FOOTER COPYRIGHTS ## -->
		<div id="qcFooterPara" class="col-5 col">
			<p>EVENTICKA is the property of Macula Internet, Mumbai. <br /> <span>&copy;Copyrights QuadCodes 2014</span></p>
		</div>

	</div>
</footer>
<!-- ## FOOTER END ## -->
<?php endif ?>

<!-- ## LOAD JAVASCRIPTS ## -->
<script src="./includes/js/2.1.1.jquery.min.js" type="text/javascript"></script>
<script src="./includes/js/owl.carousel.min.js" type="text/javascript"></script>

<?php if ($page->isHomePage()): ?>
<script src="./includes/js/supersized.3.2.7.min.js" type="text/javascript"></script>
<script src="./includes/js/countdown.js" type="text/javascript"></script>
<script src="./includes/js/jquery.marquee.min.js" type="text/javascript"></script>
<?php endif ?>

<script src="./includes/js/library.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;ver=3.5" type="text/javascript"></script>
<script src="./includes/js/init.js" type="text/javascript"></script>

<?php if ($page->isHomePage()): ?>
<!-- ## FULLSCREEN SLIDESHOW ## -->
<script type="text/javascript">
  function slide_fullscreen() {
    jQuery(function($) {
      $.supersized({
        // Functionality
        slide_interval: 8000,
        transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        transition_speed: 1000,
        // Components
        slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
        progress_bar: 1,
        slides: [
          {
            image : 'http://placehold.it/1280x1024&text=Slide+1'
          },
          {
            image : 'http://placehold.it/1280x1024&text=Slide+2'
          }
        ]
      });
    });
  }
  window.onload = slide_fullscreen;
</script>
<?php endif ?>

</body>
</html>