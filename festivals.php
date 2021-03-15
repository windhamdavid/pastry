<?php
/**
 * Template Name: Festivals
 */
?>
<?php get_header(); ?>

		<div id="container" class="onecolumn">
			<div id="content">
				<div class="hide">
				<div class="entry-content">
					<h3>Festival Screenings</h3>
					<img src="<?php bloginfo( 'template_url' ); ?>/images/screenings.jpg" width="300"/>
					<h3><a href="<?php echo home_url( '/' ); ?>theatricalpremiere">THEATRICAL PREMIERE</h3>
					<p>Film Forum, NYC<br />
					September 15, 2010</p>

					<div class="separator"><img src="<?php bloginfo( 'template_url' ); ?>/images/separator_sb.png"/>
						</div>
					<?php query_posts('showposts=7&order=asc&category_name=festivals&offset=1'); ?>
					<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); if( $post->ID == '189' ) continue; ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h3><a href="<?php echo home_url( '/' ); ?>screenings"><?php the_title(); ?></a></h3>
						<?php the_excerpt();?>
						</div><!-- #post-<?php the_ID(); ?> -->
					<?php endwhile; endif; ?>	
					<h3><a href="<?php echo home_url( '/' ); ?>screenings">See More</a></h3>						
				</div><!-- .entry-content -->
				</div>
				<?php query_posts('category_name=festivals&posts_per_page=-1'); ?>
				<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h3><?php the_title(); ?></h3>
					<div class="excerpt"><?php the_excerpt();?></div>
					<?php the_content();?>
					</div><!-- #post-<?php the_ID(); ?> -->
				<?php endwhile; endif; ?>
				
				<p><a href="<?php echo home_url( '/' ); ?>screenings/"> - Screenings</a></p>
				
			</div><!-- #content -->
		</div><!-- #container -->
<div class="clear"></div>
<?php get_footer(); ?>