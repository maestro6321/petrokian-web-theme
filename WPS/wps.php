<?php
/*
Plugin Name: pk plugin
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: save visitors information.
Author: Ali
Version: 1.0.0
Author URI: http://tt.tt/
*/
defined('ABSPATH') || exit() ;
//define constracts for wps
define('wps_dir',trailingslashit( plugin_dir_path(__FILE__) ));
// define('wps_url',trailingslashit( plugin_dir_url(__FILE__) ));
define('wps_url',get_template_directory_uri().'/WPS'.'/');
define('wps_inc',trailingslashit( wps_dir.'inc' ));
define('wps_tpl',trailingslashit( wps_dir.'tpl' ));
define('wps_css',trailingslashit( wps_url.'assets'.'/'.'css' ));
define('wps_js',trailingslashit( wps_url.'assets'.'/'.'js' ));
define('wps_images',trailingslashit( wps_url.'assets'.'/'.'images' ));
define('wps_fonts',trailingslashit( wps_url.'assets'.'/'.'fonts' ));
include wps_inc."page_create.php";
include wps_inc."cr_db_tables.php";

// write activation && deactivation hook callback
add_action( 'wps_load_style_admin', 'loading_style_script_admin' );
function loading_style_script_admin() {
    
	wp_enqueue_style( 'bootstrap-wps', wps_css . 'bootstrap.css');
	// wp_enqueue_script( 'jquery_admin', wps_js . 'jquery-3.6.3.min.js', array(), '1.0.0', true );
	// wp_enqueue_script( 'popper_admin', wps_js . 'popper.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap_admin', wps_js . 'bootstrap.bundle.js', array(), '1.0.0', true );
    // define('CONCATENATE_SCRIPTS', false);
}

function wps_activation(){
    cr_tbl_projects();
}
function wps_deactivation(){}
register_activation_hook( __FILE__, 'wps_activation' );
register_deactivation_hook( __FILE__, 'wps_deactivation' );
// create_page_wp("test");
//
if(is_admin()){
    include wps_inc."backend.php";
    
    do_action( 'wps_load_style_admin');
    

}else{
    include wps_inc."frontend.php";
    // include wps_inc."backend.php";
}

?>