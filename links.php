<?php
/**
 * Template Name: Links
 */
?>
<?php get_header(); ?>

		<div id="container" class="onecolumn">
			<div id="content">
				<div class="entry-content">
				<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
				</div>
			</div><!-- #content -->
		</div><!-- #container -->
<?php get_footer(); ?>