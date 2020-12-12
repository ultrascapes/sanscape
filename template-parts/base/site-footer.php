<div class="sans-cont sans-grd-cont">
                    <?php
                    if ( is_active_sidebar( 'footer-top' ) ) {
                        $widgets .= dynamic_sidebar( 'footer-top' );
                    }
                ?>
            </div>
            <div class="sans-cont sans-txt-ctr">
                <nav class="sans-footer-top-menu" role="navigation">
                            <?php 
                                $args = [
                                    'theme_location' => 'footer-top-menu'
                                ];
                            wp_nav_menu( $args ); 
                            ?>
                </nav>
            </div>
            
                <div class="footer-middle">
                    <nav class="sans-cont main-navigation" role="navigation">
                            <?php 
                                $args = [
                                    'theme_location' => 'footer-main-menu'
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