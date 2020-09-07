<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <?php while ( have_posts() ) : the_post();
                    the_content();

                    the_post_navigation(array(
                        'prev_text' => esc_html__( '&laquo; Previous Post', 'wp-bootstrap-4' ),
                        'next_text' => esc_html__( 'Next Post &raquo;', 'wp-bootstrap-4' ),
                    ));
                endwhile; ?>
            </div>

            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->

<?php get_footer(); ?>
