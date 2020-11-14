<footer>
                <div class="sans-cont">
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                            <?php 
                                $args = [
                                    'theme_location' => 'footer-menu'
                                ];
                            wp_nav_menu( $args ); 
                            ?>
                    </nav>
                        <div class="sans-grd-cont">
                        <?php 
                        if ( is_active_sidebar( 'footer-one' ) ) {
                            dynamic_sidebar( 'footer-one' );
                        }
                        ?>
                        </div>
                    <div>
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