<?php get_header(); ?>

    <header>
        <div style="background-image: url('<?= get_the_post_thumbnail_url(); ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="entry-header container-fluid d-flex h-100">
                <div class="row justify-content-center align-self-center mx-auto">
                    <?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
               </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row px-4 px-md-0 my-5">
            <div class="col-md-12">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->

<?php get_footer(); ?>
