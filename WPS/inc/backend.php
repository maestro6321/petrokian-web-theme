<?php
/**
 * Register a custom menu page.
 */
function wpdocs_register_theme_setting() {
	add_menu_page(
		'Site theme Setting',
		'Site theme Setting',
		'manage_options',
		'wps/wps-stat.php',
		'wps_admin_menu',
		// plugins_url( 'myplugin/images/icon.png' ),
        'dashicons-chart-line',
		6
	);
}
add_action( 'admin_menu', 'wpdocs_register_theme_setting' );

function wps_admin_menu (){

    include wps_tpl."admin_main_page.php";
	
}
include wps_inc."frontend.php";

// ###########################################

if ( isset( $_POST['submit_top_header'] ) ){
	$cp_name=$_POST['company_name'];
	$cp_tittle=$_POST['company_tittle'];
	global $wpdb;
	// $wpdb->update( 'wp_pk_options',array('option_value'=>$cp_name,array('option_name'>='company_name') ));
	$wpdb->update(
        $wpdb->prefix . 'pk_options',
        array('option_value' => $cp_name),
        array('option_name' => 'company_name')
		);
	$wpdb->update(
		$wpdb->prefix . 'pk_options',
		array('option_value' => $cp_tittle),
		array('option_name' => 'company_tittle')
		);	
}