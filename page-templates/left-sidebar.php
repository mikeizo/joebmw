<?php
/*
* Template Name: Left Sidebar
*/

get_header(); ?>

    <header class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
                <hr>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>

            <div class="col-md-8">
                <?php while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content', 'page' );
                endwhile; ?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->

<?php get_footer(); ?>
