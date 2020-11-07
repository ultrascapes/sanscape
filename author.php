<?php get_header(); ?>
    
    <div id="primary">
        <main id="main" role="main">
        <h2>author.php</h2>
            <div>
                <h1><?php the_archive_title(); ?></h1>
                <p>
                    <?php echo the_author_meta( '', $post->post_author ) ?>
                </p>
            </div>

            

            <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( '/template-parts/content', 'posts' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( '/template-parts/content', 'none' ); ?>

            <?php endif; ?>

            <?php echo paginate_links(); ?>

            <hr>
            <p><strong>Template: author.php</strong></p>
            <hr>        
        </main>    
    </div>
    
    <?php get_sidebar(); ?>


<?php get_footer(); ?>