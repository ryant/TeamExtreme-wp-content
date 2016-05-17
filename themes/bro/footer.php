<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BRO
 */

?>

	</div><!-- #content -->
	<!-- menu -->
	<div id="footer" class="site-footer">
		<div class="left-side">
		<nav id="footer_menu" class="secondary-navigation"> <!--class="main-navigation" role="navigation"-->
			<?php wp_nav_menu( array( 'theme_location' => 'secondary')); ?>
			
		</nav>
		</div>
			
		<div class="right-side">
		<div class="footer-content">
		<a href="http://www.townsville.qld.gov.au"><img src="http://ethanh.sgedu.site/stagingassignment2/wp-content/uploads/2016/04/townsville-council-logo.jpg" alt="townsville-council-logo" width="96" height="124" class="alignnone size-full wp-image-105" />

		<a href="http://www.signsofexcellence.com.au/"><img src="http://ethanh.sgedu.site/stagingassignment2/wp-content/uploads/2016/04/SOE-new-logo-3-300x300.jpg" alt="SOE new logo 3" width="124" height="124" class="alignnone size-medium wp-image-103" />

		<a href="http://www.groovygraphics.com.au/"><img src="http://ethanh.sgedu.site/stagingassignment2/wp-content/uploads/2016/04/GG-logo-for-email-300x76.jpg" alt="GG logo for email" width="300" height="76" class="alignnone size-medium wp-image-102" />
		
		<a href="http://www.sturtbc.com.au/"><img src="http://ethanh.sgedu.site/stagingassignment2/wp-content/uploads/2016/04/sturt-business-centre-logo-300x42.png" alt="sturt-business-centre-logo" width="300" height="42" class="alignnone size-medium wp-image-104" />

		<a href="http://www.truelocal.com.au/business/asap-printers/garbutt"><img src="http://ethanh.sgedu.site/stagingassignment2/wp-content/uploads/2016/04/asap-logo.png" alt="asap-logo" width="265" height="131" class="alignnone size-full wp-image-101" />

		<a href="http://www.afcm.com.au"/><img src="http://ethanh.sgedu.site/stagingassignment2/wp-content/uploads/2016/04/AFCMlogo-25th.gif" alt="AFCMlogo-25th" width="250" height="100" class="alignnone size-full wp-image-100" />

		<a href="http://www.acvc.com.au"/><img src="http://ethanh.sgedu.site/stagingassignment2/wp-content/uploads/2016/04/ACVClogo-300x131.jpg" alt="ACVClogo" width="250" height="131" class="alignnone size-medium wp-image-99" />
	<!--<footer id="colophon" class="site-footer" role="contentinfo">

	</footer><!-- #colophon -->
		</div>
		</div>
		
	</div>
	<div class="footer-copyright">
			<p>Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></p>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
