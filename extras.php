<?php
/**
 * Template Name:Extras
 */
?>

<?php get_header(); ?>
		<div id="container" class="onecolumn">
			<div id="content">
				<div class="hide">
				<div class="entry-content">
					<div class="separator"><img src="<?php bloginfo( 'template_url' ); ?>/images/separator_sb.png"/></div>
						<p>Kings of Pastry" is now available on DVD.  Orders can be made by following the link below.</p>
					<h3><a href="http://firstrunfeatures.com/kingsofpastrydvd.html">Purchase the DVD</a></h3>
					<br />
					<?php query_posts('showposts=4&category_name=extras'); ?>
					<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt();?>
						</div><!-- #post-<?php the_ID(); ?> -->
					<?php endwhile; endif; ?>	
					<h3><a href="<?php echo home_url( '/' ); ?>extras">More Extras</a></h3>							
				</div><!-- .entry-content -->
				</div>				
				<?php query_posts('showposts=21&category_name=extras'); ?>
				<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<?php the_content();?>
					</div><!-- #post-<?php the_ID(); ?> -->
					<div class="blog_separator"><img src="<?php bloginfo( 'template_url' ); ?>/images/separator_sb.png"/>
						</div>
				<?php endwhile; endif; ?>
			</div><!-- #content -->
		</div><!-- #container -->
<div class="clear"></div>
<?php get_footer(); ?>