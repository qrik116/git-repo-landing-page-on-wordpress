<?php

function style_script_load(){
    wp_enqueue_script('jquery-1.11.0.min', get_template_directory_uri() . '/libs/jquery/jquery-1.11.0.min.js', array(),'', true);
    wp_enqueue_script('parallax.min', get_template_directory_uri() . '/libs/parallax/parallax.min.js', array(),'', true);
    wp_enqueue_script('jquery.magnific-popup.min', get_template_directory_uri() . '/libs/magnific-popup/jquery.magnific-popup.min.js', array(),'', true);
    wp_enqueue_script('mixitup.min', get_template_directory_uri() . '/libs/mixitup/mixitup.min.js', array(),'', true);
    wp_enqueue_script('PageScroll2id.min', get_template_directory_uri() . '/libs/scroll2id/PageScroll2id.min.js', array(),'', true);
    wp_enqueue_script('waypoints.min', get_template_directory_uri() . '/libs/waypoints/waypoints.min.js', array(),'', true);    
    wp_enqueue_script('jqBootstrapValidation', get_template_directory_uri() . '/libs/jqBootstrapValidation/jqBootstrapValidation.js', array(),'', true);
    wp_enqueue_script('animate-css', get_template_directory_uri() . '/libs/animate/animate-css.js', array(),'', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(),'', true);
    
    //Стили
    wp_enqueue_style('bootstrap-grid-3.3.1.min', get_template_directory_uri() . '/libs/bootstrap/bootstrap-grid-3.3.1.min.css');
    wp_enqueue_style('font-awesome.min', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('styles', get_template_directory_uri() . '/libs/linea/styles.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/libs/magnific-popup/magnific-popup.css');
    wp_enqueue_style('animate.min', get_template_directory_uri() . '/libs/animate/animate.min.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('my_media', get_template_directory_uri() . '/css/my_media.css');
    
}
add_action('wp_enqueue_scripts', 'style_script_load');
//миниатюры
add_theme_support( 'post-thumbnails' );

//header_menu
register_nav_menu('menu', 'Главное Меню');

//виджеты (логотип)
function widget_logo() {
    register_sidebar( array(
        'name' => 'Логотип SVG',
        'id' => 'logo-1',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<div class="hidden">',
        'after_title'   => '</div>',
    ) );
}
add_action( 'widgets_init', 'widget_logo' );

require_once ( get_stylesheet_directory() . '/theme-options.php');

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
add_filter('show_admin_bar', '__return_false');
?>