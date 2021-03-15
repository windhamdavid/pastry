<?php
/**
 * Template Name: Blogs
 */
?>

<?php get_header(); ?>
		<div id="container" class="onecolumn">
			<div id="content">
				<div class="hide">
				<div class="entry-content">
					<h3>Blog</h3>
					<div class="separator"><img src="<?php bloginfo( 'template_url' ); ?>/images/separator_sb.png"/>
						</div>
					<?php query_posts('showposts=4&category_name=blog'); ?>
					<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt();?>
						</div><!-- #post-<?php the_ID(); ?> -->
					<?php endwhile; endif; ?>	
					<h3><a href="<?php echo home_url( '/' ); ?>blog">Read More</a></h3>							
				</div><!-- .entry-content -->
				</div>				
				<?php query_posts('showposts=21&category_name=blog'); ?>
				<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<?php the_content();?>
					<p><?php comments_popup_link('No comments yet', '1 comment so far', 
					'% comments so far', 'comments-link', 'Comments are 
					off for this post'); ?></p>
					</div><!-- #post-<?php the_ID(); ?> -->
					<div class="blog_separator"><img src="<?php bloginfo( 'template_url' ); ?>/images/separator_sb.png"/>
						</div>
				<?php endwhile; endif; ?>
			</div><!-- #content -->
		</div><!-- #container -->
<div class="clear"></div>
<?php get_footer(); ?>