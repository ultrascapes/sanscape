<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part( '/template-parts/content', 'icons' ); ?>
    <div id="page-header" class="sans-pg-fold-r3"
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
        <?php get_template_part( '/template-parts/custom/page-header', 'home'); ?>
    </div>


