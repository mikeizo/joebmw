<?php get_header(); ?>

    <header class="page-header text-center py-3">
        <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="archive-description text-muted">', '</div>' );
        ?>
    </header>

    <div class="container">
        <div class="row">

            <div class="col-md-8">

                <?php if ( have_posts() ) : ?>
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;

                    the_posts_navigation( array(
                        'next_text' => esc_html__( 'Newer Posts', 'wp-bootstrap-4' ),
                        'prev_text' => esc_html__( 'Older Posts', 'wp-bootstrap-4' ),
                    ));
                else : ?>
                    No Content
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->

<?php get_footer(); ?>
