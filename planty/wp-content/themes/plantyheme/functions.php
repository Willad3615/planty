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

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   
}

function theme_get_header($name=null, $args=array()){
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

function theme_get_footer($name=null, $args=array()){
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

function plantytheme_link_attributes(array $attrs): array{
    $attrs[] = 'nav-link';
    return $attrs;
}

add_action('after_setup_theme', 'plantytheme_supports');
add_action( 'wp_enqueue_style', 'theme_enqueue_styles' );
add_action('wp_head', 'theme_get_header');
add_action('wp_footer', 'theme_get_footer');
add_filter('nav_menu_class', 'plantytheme_menu_class');
add_filter('nav_link_attributes', 'plantytheme_link_attributes');

