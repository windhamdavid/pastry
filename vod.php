<?php
/**
 * Template Name: VOD
 */
?>
<?php get_header(); ?>
		<div id="container" class="onecolumn">
			<div id="content">
				<?php the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
							<h3 class="light" align="center">Now available through video-on-demand</h3>
							<br />
								<a href=""><img src="<?php bloginfo( 'template_url' ); ?>/images/vod.jpg" width="668" height="478" border="0" id="vod" usemap="#m_vod" alt="" /></a>
								<map name="m_vod" id="m_vod">
								<area shape="rect" coords="463,257,653,352" href="http://www.rcn.com/new-york/digital-cable-tv/digital-extras/on-demand-movies" target="_blank" alt="" />
								<area shape="rect" coords="463,372,653,467" href="http://mediacomcable.com/cable_ppv.html" target="_blank" alt="" />
								<area shape="rect" coords="242,372,432,467" href="http://www.suddenlink.com/television/" target="_blank" alt="" />
								<area shape="rect" coords="242,251,432,346" href="http://www.myinsight.com/Product-Cable-OND.asp" target="_blank" alt="" />
								<area shape="rect" coords="19,372,209,467" href="http://www.bresnan.com/services/digital_cable_with_on_demand/on_demand" target="_blank" alt="" />
								<area shape="rect" coords="18,14,208,109" href="http://xfinitytv.comcast.net/ondemand/browse#pageType=search&term=kings%20of%20pastry&pageNum=1" target="_blank" alt="" />
								<area shape="rect" coords="20,253,210,348" href="http://uverseonline.att.net/uverse/ondemand " target="_blank" alt="" />
								<area shape="rect" coords="20,135,210,230" href="http://www.cox.com/digitalcable/ondemand/default.asp" target="_blank" alt="" />
								<area shape="rect" coords="242,135,432,230" href="http://tvlistings.optimum.net/search.jsp?query=on%20demand&cat=Movies+On+Demand" target="_blank" alt="" />
								<area shape="rect" coords="466,136,656,231" href="http://www22.verizon.com/ResidentialHelp/FiOSTV/Guide/Video+On+Demand/QuestionsOne/84853.htm" target="_blank" alt="" />
								<area shape="rect" coords="464,15,654,110" href="http://www.charter.net/vod/index.php?page=vod" target="_blank" alt="" />
								<area shape="rect" coords="241,15,431,110" href="http://www.twondemand.com/movies/kings-of-pastry" target="_blank" alt="" />
								</map>
				</div><!-- #post-<?php the_ID(); ?> -->
			</div><!-- #content -->
		</div><!-- #container -->
<?php get_footer(); ?>