<div class="sans-top-bar">
                <div class="sans-cont sans-flx sans-alg-it-ctr">
                    <span class="sans-txt-rt"><?php bloginfo( 'name' ); ?></span>
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <?php 
                            $args = [
                                'theme_location' => 'main-menu'
                            ];
                        wp_nav_menu( $args ); 
                        ?>
                    </nav>
                </div>
            </div>