<!doctype html>
<html lang="en-US">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <!-- navbar-expand-lg navbar-dark bg-dark -->
        <nav class="navbar navbar-expand-lg navbar-custom py-3 fixed-top">
            <div class="container">
                <?php the_custom_logo(); ?>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu-wrap" aria-controls="primary-menu-wrap" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'main-menu',
                        'menu_id'         => 'primary-menu',
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'primary-menu-wrap',
                        'menu_class'      => 'navbar-nav ml-auto',
                        'fallback_cb'     => '__return_false',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 2,
                        'walker'          => new zeppieri_walker_nav_menu()
                    ) );
                ?>
            </div>
        </nav>
    </header>
