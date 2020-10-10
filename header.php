<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="masthead" role="banner">

        <a href="<?php echo esc_url( home_url( '/') ) ;?>" rel="home">
            <?php bloginfo( 'name' ); ?>
        </a>
        <p><?php bloginfo( 'description' ); ?></p>

        <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php 
            $args = [
                'theme_location' => 'main-menu'
            ];
        wp_nav_menu( $args ); 
        ?>
        </nav>
    </header>

