<?php

function zeppieri_setup() {

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Enable Post formats
    add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'status', 'quote', 'link' ) );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'main-menu' => esc_html__( 'Primary', 'zeppieri' ),
    ) );

    // Switch default core markup for search form, comment form, and comments
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Add support for core custom logo.
    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    // Enable support for woocommerce.
    //add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'zeppieri_setup' );




/**
 * Enqueue scripts and styles.
 */
function zeppieri_scripts() {
    if(!is_admin()) {
        //wp_deregister_script('jquery');
    }
    wp_enqueue_style( 'zeppieri-style', get_template_directory_uri() . '/assets/css/frontend.css', array(), 1.0, 'all' );
    wp_enqueue_script('zeppieri-scripts', get_template_directory_uri() . '/assets/js/frontend.js', array(), 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'zeppieri_scripts' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zeppieri_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'zeppieri_content_width', 800 );
}
add_action( 'after_setup_theme', 'zeppieri_content_width', 0 );



/**
 * Register widget area.
 *
 */
function zeppieri_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-4' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
        'before_widget' => '<section id="%1$s" class="widget border-bottom %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    /*
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 1', 'wp-bootstrap-4' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
        'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 2', 'wp-bootstrap-4' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
        'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 3', 'wp-bootstrap-4' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
        'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 4', 'wp-bootstrap-4' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
        'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ) );
    */
}
add_action( 'widgets_init', 'zeppieri_widgets_init' );



/**
 * Remove Actions
 */
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
// Remove emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');



/**
* Return shorter excerpt
*/
function zeppieri_get_short_excerpt( $length = 40, $post_obj = null ) {
    global $post;
    if ( is_null( $post_obj ) ) {
        $post_obj = $post;
    }
    $length = absint( $length );
    if ( $length < 1 ) {
        $length = 40;
    }
    $source_content = $post_obj->post_content;
    if ( ! empty( $post_obj->post_excerpt ) ) {
        $source_content = $post_obj->post_excerpt;
    }
    $source_content = preg_replace( '`\[[^\]]*\]`', '', $source_content );
    $trimmed_content = wp_trim_words( $source_content, $length, '...' );
    return $trimmed_content;
}



// Custom Navbar
require get_template_directory() . '/inc/custom-navbar.php';

// Load WooCommerce compatibility file.
/*
if ( class_exists( 'WooCommerce' ) ) {
    //require get_template_directory() . '/inc/woocommerce.php';
}
*/
