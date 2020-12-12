<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part( '/template-parts/content', 'icons' ); ?>
    <div class="sans-pg-fold-r3">
        <header id="masthead" role="banner">
            <?php get_template_part( '/template-parts/header', 'nav' ); ?>
            <div class="sans-top-brand">
                <div class="sans-cont">
                        <?php
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                        ?>
                </div>
            </div>
        </header>
        <div class="arch" style="background-image:url(<?php echo(get_stylesheet_directory_uri()); ?>/img/arch-4.svg);"></div>
        <div class="sans-pg-content">

