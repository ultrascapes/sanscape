<?php wp_footer(); ?>
    <footer>
        
            <div class="sans-cont sans-grd-cont">
                    <?php
                    if ( is_active_sidebar( 'footer-top' ) ) {
                        $widgets .= dynamic_sidebar( 'footer-top' );
                    }
                ?>
            </div>
            <div class="sans-cont sans-txt-ctr">
                <a href="<?php echo esc_url( home_url( '/contact/') ) ;?>" class="button-primary">Final Call To Action</a>
                <a href="<?php echo esc_url( home_url( '/contact/') ) ;?>" class="button-accent">Final Call To Action</a>
            </div>
            
                <div class="footer-middle">
                    <nav id="site-navigation" class="sans-cont main-navigation" role="navigation">
                            <?php 
                                $args = [
                                    'theme_location' => 'footer-menu'
                                ];
                            wp_nav_menu( $args ); 
                            ?>
                    </nav>
                        <div class="sans-cont sans-grd-cont">
                        <?php 
                        if ( is_active_sidebar( 'footer-main' ) ) {
                            dynamic_sidebar( 'footer-main' );
                        }
                        ?>
                        </div>
                    <div class="sans-cont">
                        <a href="<?php echo esc_url( home_url( '/') ) ;?>" rel="home">
                            <?php
                                if ( function_exists( 'the_custom_logo' ) ) {
                                    the_custom_logo();
                                }
                            ?>
                        </a>
                    </div>
                </div>
                <div class="footer-bottom">
                    &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>
                </div>
        </footer>
    </div>
</body>
</html>