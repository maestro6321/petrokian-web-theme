<?php
/**
 * Register a custom menu page.
 */
function wpdocs_register_theme_setting() {
	add_menu_page(
		'Site theme Setting',
		'تنظیمات سایت',
		'manage_options',
		'wps_custom_admin',
		'wps_custum_menu_content',
		// plugins_url( 'myplugin/images/icon.png' ),
        'dashicons-chart-line',
		6
	);

	add_submenu_page( 
		'wps_custom_admin',
	 	'sub menu title',
	 	'مدیریت پروژه ها',
	  	'read',
		'wps_custom_prj',
	    'wps_sub_project_content',
	);
}
add_action( 'admin_menu', 'wpdocs_register_theme_setting' );

function wps_custum_menu_content (){

    include wps_tpl."admin_main_page.php";
	
}
function wps_sub_project_content(){
	include wps_tpl."admin_project_page.php";
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