<?php
function get_pk_options($option_name){
	global $wpdb;
	$mylink = $wpdb->get_row( "SELECT * FROM wp_pk_options WHERE option_name = '$option_name'" );
	return $mylink->option_value;
  } 

function get_page_id_by_title($title){
	global $wpdb;
	$rows = $wpdb->get_row("select id from wp_posts where( post_type = 'page') and (post_name='$title')");
	return $rows->id;
  }

function get_pk_projects($id){
	$message =null;
	global $wpdb;
	if ($id=='1') {
		$rows = $wpdb->get_results( "SELECT * FROM `wp_pk_projects` WHERE `status`='تکمیل'	");
	}elseif ($id==2){
		$rows = $wpdb->get_results( "SELECT * FROM `wp_pk_projects` WHERE `status`='در حال انجام'	");
	}elseif ($id==3){
		$rows = $wpdb->get_results( "SELECT * FROM `wp_pk_projects`");
	}else{
		return 434;
	}
    foreach ( $rows as $row )
	{
		$message .='<tr>';
		$message .= '<th scope="row">'.$row->id.'</th>';
		$message .= '<th>'.$row->employer.'</th>';
		$message .= '<th>'.$row->place.'</th>';
		$message .= '<th>'.$row->contract.'</th>';
		$message .= '<th>'.$row->status.'</th>';
		$message .= '<th>'.$row->volume.'</th>';
		$message .= '<th>'.$row->date.'</th>';

		$message .='</tr>';
	}
	 
	// Output needs to be return
	return $message;
}

?>