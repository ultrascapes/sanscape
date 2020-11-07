<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="masthead" role="banner">
        <div class="sans-cont sans-flx">
            <div id="site-brand">
                <a href="<?php echo esc_url( home_url( '/') ) ;?>" rel="home">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </a>
            </div>
            <div class="sans-flx-col">
                <span class="sans-txt-rt"><?php bloginfo( 'description' ); ?></span>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php 
                        $args = [
                            'theme_location' => 'main-menu'
                        ];
                    wp_nav_menu( $args ); 
                    ?>
                </nav>
            </div>

        </div>
    </header>
    <div class="sans-pg-content">

