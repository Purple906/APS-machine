<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Advancesolutions
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'advancesolutions' ); ?></a>
	<header id="masthead" class="site-header">
    <div class="top-navigation">
        <?php the_custom_logo(); ?>
        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
            <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'advancesolutions' ); ?></button> -->
        </nav><!-- #site-navigation -->
        <div id="menuToggle" aria-controls="primary-menu">
            <!--A fake / hidden checkbox is used as click reciever, so you can use the :checked selector on it.-->
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <!--Too bad the menu has to be inside of the button but hey, it's pure CSS magic.-->
            <ul id="menu">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    ) );
                ?>
            </ul>
        </div>     
    </div>

    <div class="header-info">
            <?php 
                $images = get_field('header_gallery');
                $size = 'medium'; // (thumbnail, medium, large, full or custom size)

                if( $images ): ?>
                <ul class="header-products">
                <?php foreach( $images as $image ): ?>
                    <li class="head-product">
            	        <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                    </li>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>


            <div class="site-branding">
            <?php
            if ( is_front_page() && is_home() ) :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
            endif;
            $advancesolutions_description = get_bloginfo( 'description', 'display' );
            if ( $advancesolutions_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo $advancesolutions_description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>
        </div><!--.site-branding -->
    </div>
    </header><!-- #masthead -->




	<div id="content" class="site-content">
