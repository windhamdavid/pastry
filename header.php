<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty Ten
 * @since 3.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php
	// Returns the title based on the type of page being viewed
		if ( is_single() ) {
			bloginfo( 'name' ); echo ' | '; single_post_title();
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' ); twentyten_the_page_number();
		} elseif ( is_page() ) {
			bloginfo( 'name' ); echo ' | '; single_post_title();
		} elseif ( is_search() ) {
			printf( __( 'Search results for "%s"', 'twentyten' ), esc_html( $s ) ); twentyten_the_page_number(); echo ' | '; bloginfo( 'name' );
		} elseif ( is_404() ) {
			_e( 'Not Found', 'twentyten' ); echo ' | '; bloginfo( 'name' );
		} else {
			wp_title( '' ); echo ' | '; bloginfo( 'name' ); twentyten_the_page_number();
		}
	?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo home_url();?>/favicon.ico" />
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding">
				<?php if ( is_home() || is_front_page() ) { ?>
					<h1 id="site-title"><span><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
				<?php } else { ?>	
					<div id="site-title"><span><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></div>
				<?php } ?>
				
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>

				<?php
					// Retrieve the dimensions of the current post thumbnail -- no teensy header images for us!
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail');
					list($src, $width, $height) = $image;
					
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() && has_post_thumbnail( $post->ID ) && $width >= HEADER_IMAGE_WIDTH ) :		
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else : ?>
						<a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" /></a>
					<?php endif; ?>
			</div><!-- #branding -->

			<div id="access">
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
			</div><!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">
