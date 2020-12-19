<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part( '/template-parts/content', 'icons' ); ?>

    <div class="sans-pg-fold-r2">

        <div class="page-header-general"   
            <?php if( has_post_thumbnail() ): ?>
            <?php $img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                style="background-image: url('<?php echo($img_url); ?>');"
            <?php else : ?>
                <?php if ( get_header_image() ) : ?>
                    style="background-image: url('<?php header_image(); ?>');"
                <?php endif; ?>
            <?php endif; ?>
        >
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
        </div>
        
        <div class="sans-pg-content">

