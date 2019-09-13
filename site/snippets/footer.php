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
				<img src="/assets/img/placeholder/logo-footer.png" alt="LOGO" />
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
<script src="/assets/js/2.1.1.jquery.min.js" type="text/javascript"></script>
<script src="/assets/js/owl.carousel.min.js" type="text/javascript"></script>

<?php if ($page->isHomePage()): ?>
<script src="/assets/js/supersized.3.2.7.min.js" type="text/javascript"></script>
<script src="/assets/js/countdown.js" type="text/javascript"></script>
<script src="/assets/js/jquery.marquee.min.js" type="text/javascript"></script>
<?php endif ?>

<script src="/assets/js/library.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;ver=3.5" type="text/javascript"></script>
<script src="/assets/js/init.js" type="text/javascript"></script>

<?php if ($page->isHomePage()): ?>
<?php endif ?>

</body>
</html>