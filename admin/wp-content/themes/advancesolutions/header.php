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
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'advancesolutions' ); ?></button>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
            </nav><!-- #site-navigation -->
            
            </div>
            <div class="header-info">
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
            <div class="header-btns">
            <a class="header-btn" href="#">Our Products</a>
            <a class="header-btn" href="#">News</a>
            </div>
        </div><!-- .site-branding -->
        <div class="header-photos">
            <img src="<?php echo get_template_directory_uri();?>/assets/part_1.png">
            <img src="<?php echo get_template_directory_uri();?>/assets/part_2.png">
            <img src="<?php echo get_template_directory_uri();?>/assets/part_2.png">
            <img src="<?php echo get_template_directory_uri();?>/assets/part_4.png">
        </div>
        </div>
        </header><!-- #masthead -->




	<div id="content" class="site-content">
