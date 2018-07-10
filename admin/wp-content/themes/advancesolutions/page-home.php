<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advancesolutions
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="products">
		<h3 style="text-align: center;"><strong>Our</strong> Products</h3>
		<p><?php the_field('our_products'); ?></p>
		</div>
		<?php 
			$images = get_field('parts_gallery');
			$size = 'large'; // (thumbnail, medium, large, full or custom size)

		if( $images ): ?>
		<div class="swiper-container">
    			<ul class="swiper-wrapper">
        			<?php foreach( $images as $image ): ?>
            	<li class="swiper-slide">
				<a href="<?php echo $image['url']; ?>" data-lightbox="parts" data-title="<?php echo $image['caption']; ?>" >
            		<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
				</a>
            	</li>
        	<?php endforeach; ?>
    			</ul>
			<?php endif; ?>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
