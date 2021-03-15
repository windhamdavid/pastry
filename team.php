<?php
/**
 * Template Name: Team
 */
?>
<?php get_header(); ?>
		<div id="container" class="onecolumn">
			<div id="content">
				<?php the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="hide">
						<div class="entry-content">
							<h3>The Team</h3>
							<img src="<?php bloginfo( 'template_url' ); ?>/images/macoroons.jpg" width="300"/>
							
							<h3><a href="<?php echo home_url( '/' ); ?>team">Team Bios</a></h3>
							<div class="separator"><img src="<?php bloginfo( 'template_url' ); ?>/images/separator_sb.png"/>
								</div>
							<br />
							<div class="roster">
							<p>Directors</p>
							<p>Chris Hegedus</p>
							<p>D A Pennebaker</p>
							<br />
							<p>Executive Producer</p>
							<p>Frazer Pennebaker</p>

							<br />
							<p>Producers</p>
							<p>Frazer Pennebaker</p>
							<p>Flora Lazar</p>
								<br />
							<p>Associate Producers</p>
							<p>Rebecca Lando</p>
							<p>Patricia Soussloff</p>
								<br />
							<p>Camera, Sound, Editing</p>
							<p>Chris Hegedus</p>
							<p>D A Pennebaker</p>
							
							<br />
							<p>Additonal Camera</p>
							<p>Nick Doob</p>
							<br />
							<p>Featuring</p>
							<p>Sebastien Canonne, M.O.F.</p>
							<p>Jacquy Pfeiffer</p>
							<p>Rachel Beaudry</p>
							<p>Philippe Rigollot</p>
							<p>Stephane Glacier, M.O.F.</p>
							<p>Regis Lazard</p>
							<p>Frederique Lazard</p>
							<p>Philippe Urraca, MOF</p>
							<br />
							<p>Musicians</p>
							<p>Alex Toledano, Music Supervisor</p>
							<p>Sebastien Giniaux, composor</p>
							<p>Guillaume Singer</p>
							<p>Jeremie Arranger</p>
							<p>Corentin Giniaux</p>
							
							<br />
							<p>A co-production with</p>
							<p>BBC</p>
							<p>Nick Frazer</p> 
							<p>executive producer</p>
							<p>VPRO</p>
							<p>Barbara Truyen </p>
							<p>commissioning editor</p>
							<br />
							<p>Generous Support</p>
							<p>The Richard H. Driehaus Charitable Lead Trust</p>
							<p>The Florence Gould Foundation</p>
							<p>The Grand Marnier Foundation</p>
							
							</div>
						</div><!-- .entry-content -->
					</div>
					
					<?php the_content(); ?>
				</div><!-- #post-<?php the_ID(); ?> -->
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>