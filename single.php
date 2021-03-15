<?php
/**
 * The Template used to display all single posts
 *
 * @package WordPress
 * @subpackage Twenty Ten
 * @since 3.0.0
 */
?>

<?php get_header(); ?>

		<div id="container" class="onecolumn">
			<div id="content">

					<?php the_post(); ?>
				

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>

<div class="entry-content">
	<?php the_content(); ?>
</div><!-- .entry-content -->
						<div class="hide">
						<div id="content_video">
						<div id='contentInner'>
						<?php the_content(); ?>
						</div>
						</div>
						</div>
					


				


				</div><!-- #post-<?php the_ID(); ?> -->



				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
