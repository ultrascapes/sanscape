<?php get_header(); ?>
    
    <div id="primary">
        <main id="main" role="main">

            <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header>
                    <?php the_title( '<h1>', '</h1>' ); ?>

                </header>
                <div>
                    <pre><?php var_export( $post); ?></pre>

                    <?php the_content(); ?>
                </div>
            </article>
            <div>
                <?php if( comments_open() ) : ?>
                <?php comments_template(); ?>
                <?php endif; ?>
            </div>

            <?php endwhile; else : ?>

                <?php get_template_part( '/template-parts/content', 'none' ); ?>

            <?php endif; ?>

            <hr>
            <p><strong>Template: attachment.php</strong></p>
            <hr>        
        </main>    
    </div>
    
    <?php get_sidebar(); ?>


<?php get_footer(); ?>