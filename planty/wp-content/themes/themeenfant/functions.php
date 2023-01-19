<?php
/**
** activation theme
**/

function plantytheme_supports(){
    add_theme_support('menus');
    add_theme_support('title-tag');
    register_nav_menu('header', 'En tête de page');
    register_nav_menu('footer', 'En Pied de page');
}

function add_extra_item_to_nav_menu( $items, $args=array(['theme_location'=>'header'])) {
	
    if (is_user_logged_in() && $args) {
        $items .= "<li class='menu-admin'><a href='http://localhost/repositories/planty/planty/wp-admin/index.php'>Admin</a></li>";
    }
    return $items;
}

function plantytheme_enqueue_styles() {
    wp_enqueue_style('themeenfant', get_stylesheet_directory_uri() . '/style.css' );
   
}
/*
function my_function_admin_bar($show) {
	return ( current_user_can( 'administrator' ) ) ? $show : false;
}

function show_top_admin_menu_bar() {
    if (current_user_can('some_role')) {
        show_admin_bar(true);
    }
  }*/

function plantytheme_get_header($name=null, $args=array()){
    do_action('get_header', $name, $args);
    $template = array();
    $name      = (string) $name;
	if ( '' !== $name ) {
		$templates[] = "header-{$name}.php";
	}

	$templates[] = 'header.php';

	if ( !locate_template( $templates, true, true, $args ) ) {
		return false;
	}
}

function plantytheme_get_footer($name=null, $args=array()){
    do_action('get_footer', $name, $args);
    $template = array();
    $name      = (string) $name;
	if ( '' !== $name ) {
		$templates[] = "footer-{$name}.php";
	}

	$templates[] = 'footer.php';

	if ( !locate_template( $templates, true, true, $args ) ) {
		return false;
	}
}


function plantytheme_menu_class(array $classes) : array{

    $classes[] = 'nav-item';
    return $classes;
}

function plantytheme_link_class(array $attrs): array{
    $attrs[] = 'nav-link';
    return $attrs;
}

add_action('after_setup_theme', 'plantytheme_supports');
add_action('wp_enqueue_scripts', 'plantytheme_enqueue_styles', 10);
//add_action('wp_head', 'show_top_admin_menu_bar', 100);
add_action('wp_head', 'plantytheme_get_header');
add_action('wp_footer', 'plantytheme_get_footer');
add_filter('nav_menu_css_class', 'plantytheme_menu_class');
add_filter('nav_menu_link_attributes', 'plantytheme_link_class');
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu');
//add_filter( 'show_admin_bar' , 'my_function_admin_bar');

