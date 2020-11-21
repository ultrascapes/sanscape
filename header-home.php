<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part( '/template-parts/content', 'icons' ); ?>
    <div id="site-header" class="sans-pg-fold-r3"
    <?php if ( get_header_image() ) : ?>
        style="background-image: url('<?php header_image(); ?>');"
    <?php endif; ?>
    >
        <header id="masthead" role="banner">
            <?php get_template_part( '/template-parts/header', 'nav' ); ?>
            <div class="sans-top-brand-home">
                <div class="sans-cont">
                        <?php
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                        ?>
                </div>
            </div>
        </header>
        <div id="home-header-r2" class="sans-txt-ctr sans-grd-ctr">
            <div id="home-site-intro" class="sans-cont">
                <span class="site-name"><?php bloginfo( 'name' ); ?></span>
                <span class="site-desc"><?php bloginfo( 'description' ); ?></span>
            </div>
        </div>
        <div id="home-header-r3" class="sans-txt-ctr">
            <a id="learn-more" class="sans-cont" href="#home-main">
                Learn More<br>
                <svg class="sans-tri-dwn"><use href="#sans-tri-down"></use></svg>
            </a>
        </div>
    </div>


