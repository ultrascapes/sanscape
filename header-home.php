<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="sans-pg-fold-r3">
        <header id="masthead" role="banner">
            <?php get_template_part( '/template-parts/header', 'nav' ); ?>
            <div class="sans-top-brand-home">
                <div class="sans-cont">
                    <a href="<?php echo esc_url( home_url( '/') ) ;?>" rel="home">
                        <?php
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                        ?>
                    </a>
                </div>
            </div>
        </header>
        <div class="sans-cont sans-txt-ctr sans-grd-ctr">
            <div>
                <h1><?php bloginfo( 'name' ); ?></h1>
                <h2><?php bloginfo( 'description' ); ?></h2>
            </div>
        </div>
        <div class="sans-cont sans-txt-ctr">
            Learn More
        </div>
    </div>


