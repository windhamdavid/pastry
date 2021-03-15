<?php
/**
 * Template Name: Press
 */
?>
<?php get_header(); ?>
		<div id="container" class="onecolumn">
			<div id="content">
				<?php the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="hide">
						<div class="entry-content">
							<h3>Press</h3>
							<img src="<?php bloginfo( 'template_url' ); ?>/images/sculpture.jpg" width="300"/>
							<p><a href="<?php bloginfo( 'template_url' ); ?>/docs/Kings_of_Pastry_pressbook.pdf"> Press Booklet</a> - <a href="http://www.flickr.com/photos/44309070@N07/"> Photos</a>
							
								<div class="separator"><img src="<?php bloginfo( 'template_url' ); ?>/images/separator_sb.png"/>
									</div>			
							<p>“Forget Masterchef. This is the culinary Hurt Locker.”<br />  <strong><em><a href="http://www.heraldscotland.com/arts-ents/film-tv-reviews/tv-food-docs-go-a-la-carte-1.1013805?localLinksEnabled=false">Herald Scotland</a></em></strong></p>
							<p>“Gripping, even for non-foodies. It’s not revealing too much to say that a disaster precipitates some of the pic’s most affecting moments.”<br /> <strong><em><a href="http://www.variety.com/review/VE1117942326.html?categoryid=31&amp;cs=1">Variety</a></em></strong></p>
							<p>“This is no MasterChef-style cook-off…The tension is almost unbearable.”<br /> <strong><em><a href="http://www.smh.com.au/news/entertainment/tv--radio/tv-reviews/tuesday-tv-survivor-samoa/2009/12/05/1259429501059.html">Sydney Morning Herald</a></em></strong></p>
							<p>“I never saw so many strong men sobbing at once.”<br />  <strong><em><a href="http://www.guardian.co.uk/tv-and-radio/2010/mar/19/lady-and-the-revamp-review">The Guardian</a></em></strong><a href="http://www.guardian.co.uk/tv-and-radio/2010/mar/19/lady-and-the-revamp-review"> </a></p>
							<p>“[G]astroporn of the highest quality…the last moments were as thrilling as any Olympic final. Who would have thought that the fate of a sugar sculpture could be heart-stopping? Exquisite.”<br /><strong><em><a href="http://www.independent.co.uk/arts-entertainment/tv/reviews/last-nights-television-masterchef-bbc1brkings-of-pastry-bbc4brthe-lady-and-the-revamp-channel-4-1923527.html">The Independent</a></em></strong></p>
							<p>“leaves viewers on the edge of their seats.”  <br /><strong><em><a href="http://www.latimes.com/news/nation-and-world/la-fg-france-pastry7-2010mar07,0,1973156.story">The LA Times</a></em></strong></p>
							<p></em></p>
							<br />
							<h3><a href="<?php echo home_url( '/' ); ?>press">Read More...</a></h3>
						</div><!-- .entry-content -->
					</div>
					<p><a href="<?php bloginfo( 'template_url' ); ?>/docs/Kings_of_Pastry_pressbook.pdf"><img src="<?php bloginfo( 'template_url' ); ?>/images/acrobat.png"/> Press Booklet</a> - <a href="http://www.flickr.com/photos/44309070@N07/"> Photos</a></p>
					<div class="separator"><img src="<?php bloginfo( 'template_url' ); ?>/images/separator_sb.png"/>
						</div>
					<?php the_content(); ?>
				</div><!-- #post-<?php the_ID(); ?> -->
			</div><!-- #content -->
		</div><!-- #container -->
<?php get_footer(); ?>