<?php get_header(); ?>
    
    <div class="sans-bkgd-pg" id="primary">
        <main class="sans-cont" id="main" role="main">
            <h1><?php wp_title(''); ?></h1>

            <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( '/template-parts/content', 'posts' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( '/template-parts/content', 'none' ); ?>

            <?php endif; ?>

            <?php echo paginate_links(); ?>     
        </main>   
        <small>home.php</small> 
    </div>
    
<?php get_footer(); ?>