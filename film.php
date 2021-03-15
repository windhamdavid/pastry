<?php
/**
 * Template Name: Film
 */
?>
<?php get_header(); ?>
		<div id="container" class="onecolumn">
			<div id="content">
				<?php the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="hide">
						<div class="entry-content">
							<h3>Making Kings of Pastry</h3>
							<br />
							<div class="synop_thumb"><img src="<?php bloginfo( 'template_url' ); ?>/images/synop_tb.jpg" width="150"/></div><?php the_excerpt(); ?>
							<div class="separator"><img src="<?php bloginfo( 'template_url' ); ?>/images/separator_sb.png"/>
								</div>
						</div><!-- .entry-content -->
					</div>
					
					<?php the_content(); ?>
				</div><!-- #post-<?php the_ID(); ?> -->
			</div><!-- #content -->
		</div><!-- #container -->
<?php get_footer(); ?>