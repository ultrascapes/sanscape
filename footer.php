<?php wp_footer(); ?>

<footer>
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php 
            $args = [
                'theme_location' => 'footer-menu'
            ];
        wp_nav_menu( $args ); 
        ?>
    </nav>
    <?php 
    $widgets = '';
    if ( is_active_sidebar( 'footer-one' ) ) {
        $widgets .= dynamic_sidebar( 'footer-one' );
    }
    if ( is_active_sidebar( 'footer-two' ) ) {
        $widgets .= dynamic_sidebar( 'footer-two' );
    }
    if ( is_active_sidebar( 'footer-three' ) ) {
        $widgets .= dynamic_sidebar( 'footer-three' );
    }
    if ( is_active_sidebar( 'footer-four' ) ) {
        $widgets .= dynamic_sidebar( 'footer-four' );
    }
    ?>
</footer>

</body>
</html>