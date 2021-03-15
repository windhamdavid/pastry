<?php
/**
 * The template used to display the footer
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets
 *
 * @package WordPress
 * @subpackage Twenty Ten
 * @since 3.0.0
 */
?>

	</div><!-- #main -->

	<div id="footer">
		<div id="colophon">

<?php get_sidebar( 'footer' ); ?>

			<div id="site-info">
				<a href="http://phfilms.com">&copy; 2010 PENNEBAKER HEGEDUS FILMS</a>
			</div>

			<div id="site-generator">
				<p><a href="http://phfilms.com">www.phfilms.com</a></p>

			</div>

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1906067-31']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
