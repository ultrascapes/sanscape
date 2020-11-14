        <?php wp_footer(); ?>
            <div class="sans-cont sans-grd-cont">
                    <?php
                    if ( is_active_sidebar( 'home-two' ) ) {
                        $widgets .= dynamic_sidebar( 'home-two' );
                    }
                ?>
            </div>
            <div class="sans-cont sans-txt-ctr">
                <a href="<?php echo esc_url( home_url( '/contact/') ) ;?>" class="button-primary">Final Call To Action</a>
            </div>
            <?php get_template_part( '/template-parts/content', 'footer' ); ?>
   
    </div>
</body>
</html>