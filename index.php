<?php get_header(); ?>
    
    <div id="primary">
        <main id="main" role="main">

            <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( '/template-parts/content' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( '/template-parts/content', 'none' ); ?>

            <?php endif; ?>

            <hr>
            <p><strong>Template: index.php</strong></p>
            <hr>        
        </main>    
    </div>
    
    <?php get_sidebar(); ?>


<?php get_footer(); ?>