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
	 	'ویرایش پروژه ها',
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
				$ID = absint( $_GET['id']);
				$data =[
					// 'id' =>			sanitize_text_field( $_GET['id'] ),
					'employer' =>	sanitize_text_field( $_POST['employer'] ),
					'place' =>		sanitize_text_field( $_POST['place'] ),
					'contract' =>	sanitize_text_field( $_POST['contract'] ),
					'status' =>		sanitize_text_field( $_POST['status'] ),
					'volume' =>		sanitize_text_field( $_POST['volume'] ),
					'date' =>		sanitize_text_field( $_POST['date'] ),
				];


				global $wpdb;
				$table_projects = $wpdb->prefix . 'pk_projects';
				
				if($ID){
					$updated_rows=$wpdb->update(
						$table_projects,
						$data,
						[
							'id' => $ID,
						]
					);

					if($updated_rows === false){
						wp_redirect(  
							admin_url( 'admin.php?page=wps_custom_prj_edit&edit_status=error')
						);
						exit;
					}else{
						wp_redirect(  
							admin_url( 'admin.php?page=wps_custom_prj&edit_status=edited')
						);
						// wp_redirect(  
						// 	admin_url( 'admin.php?page=wps_custom_prj_edit&edit_status=edited')
						// );
						exit;

					}
				}

				
				$inserted = $wpdb->insert(
					$table_projects,
					$data
				);
				if($inserted){
					wp_redirect(  
						admin_url( 'admin.php?page=wps_custom_prj&edit_status=edited')
					);
					exit;
					//success
				}else{
					wp_redirect(  
						admin_url( 'admin.php?page=wps_custom_prj_edit&edit_status=error')
					);
					exit;
					//error
				}
			


		}
		if(isset($_GET['actions'] ) && $_GET['actions']=='delete'){
			print_r('delete item number :'.$_GET['id']);exit;
		}
	}
}
add_action( 'admin_menu', 'wpdocs_register_theme_setting' );
add_action( 'admin_init', 'dy_from_submit' );
add_action( 'admin_notices', 'dyme_notices' );
function dyme_notices(){
	$type = '';
	$message = '';
	if(isset($_GET['edit_status'])){
		$status = sanitize_text_field( $_GET['edit_status'] );
		if($status == 'success'){
			$message = 'اطلاعات با موفقیت ثبت شد';
			$type = 'success';
		}
		elseif($status == 'error'){
			$message = 'خطا در ثبت اطلاعات';
			$type = 'error';
		}
		elseif($status == 'edited'){
			$message = 'اطلاعات با موفقیت ویرایش شد';
			$type = 'success';
		}
	}
	if($type && $message){
		?>
		<div class="notice notice-<?php echo $type;?> is-dismissible">
			<p><?php echo $message;	?></p>
		</div>
		<?php
	}
}
function wps_custum_menu_content (){

    include wps_tpl."admin_main_page.php";
	
}
function wps_sub_project_edit (){
	global $wpdb;
	$table_name= $wpdb->prefix . 'pk_projects';
	$projects = false;
	if(isset( $_GET['actions']) && $_GET['actions']=='edit' && isset($_GET['id'])){
		$project_id = absint( $_GET['id'] );
		if($project_id){
			$projects = $wpdb->get_row(
				"SELECT * FROM $table_name WHERE id = $project_id"
			);
		}
	}

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