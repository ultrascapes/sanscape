    <?php get_header('home'); ?>
    <div class="sans-pg-fold-r1 sans-row-bg-1">
        <div class="sans-cont sans-grd-cont">
            <?php
            if ( is_active_sidebar( 'home-one' ) ) {
                $widgets .= dynamic_sidebar( 'home-one' );
            }
            ?>
        </div>
    </div>
    <div class="sans-pg-fold-r3 sans-row-bg-2">
        <div class="sans-cont" id="primary">
            <main id="main" role="main">
            <h3>front-page.php</h3>
                <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>
                
                    <?php get_template_part( '/template-parts/content', 'page' ); ?>

                <?php endwhile; else : ?>

                    <?php get_template_part( '/template-parts/content', 'none' ); ?>

                <?php endif; ?>       
            </main>    
        </div>
    </div>
    <?php get_footer('home'); ?>