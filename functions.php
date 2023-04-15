<?php
function loading_style_script() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . 'css/fontawesome.css');
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_script( 'particles', get_template_directory_uri() . '/js/particles.js', array(), '1.0.0', true );
	wp_enqueue_script( 'app-particles', get_template_directory_uri() . '/js/app particles.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery22', get_template_directory_uri() . '/js/jquery-3.6.3.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.js', array(), '1.0.0', true );
	wp_enqueue_script( 'fontawesomejs', get_template_directory_uri() . '/js/fontawesome.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-easy-ticker', get_template_directory_uri() . '/js/jquery.easy-ticker.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'loading_style_script' );


define('style_dir',trailingslashit( get_template_directory() ));
// define('wps_url',trailingslashit( plugin_dir_url(__FILE__) ));
// define('wps_url',get_template_directory_uri().'/wps'.'/');
define('style_inc',trailingslashit( style_dir.'WPS' ));
// require_once dirname( __FILE__ ) . '/wps/wps.php';
include style_inc."wps.php";
// include dirname( __FILE__ ) . '/wps/wps.php';
