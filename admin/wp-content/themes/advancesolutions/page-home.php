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
		<hr class="parts-break">
		<div class="services">
		<h3 style="text-align: center;"><strong>Ser</strong>vices</h3>
		<p><?php the_field('services_description'); ?></p>
		</div>
		<div class="service-swiper">
			<!-- Add Pagination -->
			<div class="service-pagination"></div>
			<div class="swiper-wrapper" style="height: auto;">
			<div class="swiper-slide service-slide">
				<h3><?php the_field('machine_title'); ?></h3>
				<p><?php the_field('machine_description'); ?></p>
				<?php 
					$link = get_field('machine_link');
					if( $link ): ?>
						<a class="button" href="<?php echo $link; ?>">Continue Reading</a><?php endif; ?>
			</div>
			<div class="swiper-slide service-slide">
				<h3><?php the_field('assembly_title'); ?></h3>
				<p><?php the_field('assembly_description'); ?></p>
				<?php 
					$link = get_field('assembly_link');
					if( $link ): ?>
						<a class="button" href="<?php echo $link; ?>">Continue Reading</a><?php endif; ?>
			</div>
			<div class="swiper-slide service-slide">
				<h3><?php the_field('3d_printing_title'); ?></h3>
				<p><?php the_field('3d_printing_description'); ?></p>
				<?php 
					$link = get_field('3d_printing_link');
					if( $link ): ?>
						<a class="button" href="<?php echo $link; ?>">Continue Reading</a><?php endif; ?>
			</div>
			</div>
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
