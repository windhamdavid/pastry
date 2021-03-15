<?php
/**
 * Template Name: News
 */
?>

<?php get_header(); ?>

		<div id="container" class="onecolumn">
			<div id="content">
				<div class="hide">
				<div class="entry-content">
					<h3>News</h3>
					<img src="<?php bloginfo( 'template_url' ); ?>/images/pastry-1.jpg" width="300"/><div class="separator"><img src="<?php bloginfo( 'template_url' ); ?>/images/separator_sb.png"/>
						</div>
					<?php query_posts('showposts=3&category_name=news'); ?>
					<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt();?>
						</div><!-- #post-<?php the_ID(); ?> -->
					<?php endwhile; endif; ?>	
					<h3><a href="<?php echo home_url( '/' ); ?>news">More News</a></h3>							
				</div><!-- .entry-content -->
				</div>
				
				<?php query_posts('showposts=21&category_name=news&offset=3'); ?>
				<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<?php the_content();?>
					</div><!-- #post-<?php the_ID(); ?> -->
				<?php endwhile; endif; ?>
			</div><!-- #content -->
		</div><!-- #container -->
<div class="clear"></div>
<?php get_footer(); ?>