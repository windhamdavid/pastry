<?php get_header(); ?>
		<div id="container">		
			<div id="content">
				<div class="content_video">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/quotes.png"/>
					<iframe src="https://player.vimeo.com/video/13181134?color=ffabe3&title=0&byline=0&portrait=0" width="480" height="318" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<div class="poster">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/credits.png"/>
				<img src="<?php bloginfo( 'template_url' ); ?>/images/kop_poster_credits.png"/>	
				</div>
				<div class="phfilms_logo">
				<a href="http://phfilms.com">&nbsp;</a>
				</div>
				<div class="right_col_home">
					<div class="links alink">
					<p><a href="<?php echo home_url( '/' ); ?>contact/">CONTACTS</a></p>
					</div>
					<div class="links alink">
					<p><a href="<?php echo home_url( '/' ); ?>sponsors/">SPONSORS</a></p>
					</div>			
					<div class="links">
					<p><a href="<?php bloginfo( 'template_url' ); ?>/docs/Kings_of_Pastry_pressbook.pdf">PRESS KIT</a></p>	
					</div>
					<div class="links alink">
					<p><a href="<?php echo home_url( '/' ); ?>links/">LINKS</a></p>
					</div>
					<div class="links">
					<div class="facebook">
					<a href="http://www.facebook.com/KingsofPastry"></a>
					<p class="no">Facebook</p>
					</div>
					<div class="twitter">
					<a href="http://twitter.com/kingsofpastry"></a>
					<p class="no">Twitter</p>
					</div>
					<div class="flickr">
					<a href="http://www.flickr.com/photos/44309070@N07/"></a>
					<p class="no">Flickr</p>
					</div>
					</div>					
				</div>
				
			</div><!-- #content -->
		</div><!-- #container -->
<?php include (TEMPLATEPATH . '/sidebar-home.php'); ?>
<?php get_footer(); ?>
