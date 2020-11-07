<?php get_header(); ?>
    
    <div class="sans-cont" id="primary">
        <main id="main" role="main">
        <h2>home.php</h2>
            <h1><?php wp_title(''); ?></h1>

            <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( '/template-parts/content', 'posts' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( '/template-parts/content', 'none' ); ?>

            <?php endif; ?>

            <?php echo paginate_links(); ?>     
        </main>    
    </div>
    
    <?php //get_sidebar(); ?>


<?php get_footer(); ?>