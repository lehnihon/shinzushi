<?php
/**
 * site functions and definitions
 *
 * @package site
 */

if ( ! function_exists( 'site_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function site_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on site, use a find and replace
	 * to change 'site' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'site', get_template_directory() . '/languages' );
	add_theme_support( 'post-thumbnails' );

	add_image_size('home',600,600,true);
}
endif; // site_setup
add_action( 'after_setup_theme', 'site_setup' );


/**
 * Enqueue scripts and styles.
 */
function site_scripts() {
	wp_enqueue_style( 'site-style-owl', get_template_directory_uri() ."/owl.carousel.min.css" );
	wp_enqueue_style( 'site-style-owl-theme', get_template_directory_uri() ."/owl.theme.default.min.css" );
	wp_enqueue_style( 'site-style-animate', get_template_directory_uri() ."/animate.css" );
	wp_enqueue_style( 'site-style', get_stylesheet_uri() );

	wp_enqueue_script( 'site-script-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
	wp_enqueue_script( 'site-script-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js');
	wp_enqueue_script( 'site-script-wow', get_template_directory_uri() . '/js/wow.min.js',array());
	wp_enqueue_script( 'site-script-modernizr', get_template_directory_uri() . '/js/modernizr.js',array());
	wp_enqueue_script( 'site-script-banner', get_template_directory_uri() . '/js/banner.js',array());
	wp_enqueue_script( 'site-script-owl', get_template_directory_uri() . '/js/owl.carousel.min.js',array());
	wp_enqueue_script( 'site-script-site', get_template_directory_uri() . '/js/script.js',array(),false,true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );

function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Chef';
    $submenu['edit.php'][5][0] = 'Chefs';
    $submenu['edit.php'][10][0] = 'Adicionar Chefs';
    echo '';
}
function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Chefs';
        $labels->singular_name = 'Chef';
        $labels->add_new = 'Adicionar Chef';
        $labels->add_new_item = 'Adicionar Chef';
        $labels->edit_item = 'Editar Chef';
        $labels->new_item = 'Chef';
        $labels->view_item = 'Ver Chef';
        $labels->search_items = 'Procurar Chef';
        $labels->not_found = 'Chef não encontrado';
        $labels->not_found_in_trash = 'Sem Chefs na lixeira';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

function get_the_twitter_excerpt(){
	$excerpt = get_the_content();
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$the_str = substr($excerpt, 0, 140)." [...]";
	return $the_str;
}


