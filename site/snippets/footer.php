	</div><!-- scene -->
</div><!-- main -->

<footer class="box center" role="contentinfo">
	<div class="copyright">
		<?php echo $site->copyright()->kirbytext() ?>
	</div>
	<div class="colophon">
		<a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b>♥</b></a>
	</div>
</footer>

<!-- Scripts -->
<?php echo js('assets/js/app.js') ?>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-59689951-1');ga('send','pageview');
</script>

</body>
</html>