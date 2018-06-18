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
        <img src="<?php echo get_template_directory_uri();?>/assets/APS_logo_sm.png">
		<div class="site-info">
            <?php wp_nav_menu( array( 'theme_location' => 'menu-2' ) ); ?>
            <hr>
            <?php wp_nav_menu( array( 'theme_location' => 'menu-3' ) ); ?>
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'advancesolutions' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'advancesolutions' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'advancesolutions' ), 'advancesolutions', '<a href="http://potpie.digital/">Pot Pie Digital, LLC</a>' );
				?> -->
		</div><!-- .site-info -->
        </div>
        <p class="built-by">Built and designed by <a href="http://potpie.digital">Pot Pie Digital, LLC</a></p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
