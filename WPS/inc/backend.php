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
	add_submenu_page( 
		'wps_custom_admin',
	 	'sub menu title',
	 	'پروژه جدید',
	  	'read',
		'wps_custom_prj_edit',
	    'wps_sub_project_edit',
	);
}
function dy_from_submit(){
	global $pagenow;
	if($pagenow == 'admin.php' && isset($_GET['page'] )&& $_GET['page'] == 'wps_custom_prj_edit' ){

		if(isset($_POST['save_project'])){
			print_r('edit item number :'.$_GET['id']);
			$data =[
				'id' =>			sanitize_text_field( $_GET['id'] ),
				'employer' =>	sanitize_text_field( $_POST['employer'] ),
				'place' =>		sanitize_text_field( $_POST['place'] ),
				'contract' =>	sanitize_text_field( $_POST['contract'] ),
				'status' =>		sanitize_text_field( $_POST['status'] ),
				'volume' =>		sanitize_text_field( $_POST['volume'] ),
				'date' =>		sanitize_text_field( $_POST['date'] ),
			];
			print_r($data);exit();
			//TODO: fix save data in to sql
		}
		if($_GET['actions']=='delete'){
			print_r('delete item number :'.$_GET['id']);exit;
		}
	}
}
add_action( 'admin_menu', 'wpdocs_register_theme_setting' );
add_action( 'admin_init', 'dy_from_submit' );

function wps_custum_menu_content (){

    include wps_tpl."admin_main_page.php";
	
}
function wps_sub_project_edit (){

    include wps_tpl."admin_projects_edit.php";
	
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