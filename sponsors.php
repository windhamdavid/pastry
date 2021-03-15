<?php
/**
 * Template Name: Sponsors
 */
?>
<?php get_header(); ?>

		<div id="container" class="onecolumn">
			<div id="content">

<?php the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<div class="entry-content">
						<div class="sponsors">
							<h3>Sponsors</h3>
							<img src="<?php bloginfo( 'template_url' ); ?>/images/support.jpg" width="300"/>
						<?php the_content(); ?>
						</div>
					</div><!-- .entry-content -->
				</div><!-- #post-<?php the_ID(); ?> -->

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>