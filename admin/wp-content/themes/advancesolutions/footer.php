<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Advancesolutions
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="footer-content">

		<div class="site-info">
        <img src="<?php echo get_template_directory_uri();?>/assets/APS_logo_sm.png">
		<div class="footer-navs">
            <?php wp_nav_menu( array( 'theme_location' => 'menu-2' ) ); ?>
            <nav class="menu-social-media-container">
                <ul id="menu-social-media" class="social-menu">
                    <li><a href="https://www.facebook.com/"><img class="social-img" src="<?php echo get_template_directory_uri();?>/assets/f-logo.png"></a></li>
                    <li><a href="https://www.linkedin.com/"><img class="social-img" src="<?php echo get_template_directory_uri();?>/assets/linked-logo.png"></a></li>
                    <li><a href="https://www.instagram.com/"><img class="social-img" src="<?php echo get_template_directory_uri();?>/assets/IG-logo.png"></a></li>
                </ul>
			</nav>
		</div>
		</div><!-- .site-info -->
        </div><!-- .footer-content -->
        <p class="built-by">content &copy; 2018 APSMACHINE.COM. All Rights Reserved. Site built by <a href="http://potpie.digital">Pot Pie Digital, LLC</a></p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
