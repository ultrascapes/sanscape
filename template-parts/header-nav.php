<div class="sans-top-bar">
                <div class="sans-cont sans-flx sans-alg-it-ctr">
                    <span class="sans-txt-rt"><?php bloginfo( 'name' ); ?></span>
                    <div class="sans-main-menu">
                        <svg class="main-menu" viewBox="0 0 100 80" width="30" height="30" onclick="OpenMenu();">
                            <rect width="100" height="20" rx="10" ry="10"></rect>
                            <rect y="30" width="100" height="20"  rx="10" ry="10"></rect>
                            <rect y="60" width="100" height="20"  rx="10" ry="10"></rect>
                        </svg>
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
            </div>