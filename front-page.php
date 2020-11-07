<?php get_header(); ?>
    
    <div class="sans-cont" id="primary">
        <main id="main" role="main">
        <h2>front-page.php</h2>
            <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>
            
                <?php get_template_part( '/template-parts/content', 'page' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( '/template-parts/content', 'none' ); ?>

            <?php endif; ?>       
        </main>    
    </div>
    
    <?php // get_sidebar(); ?>


<?php get_footer(); ?>