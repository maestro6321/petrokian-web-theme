<?php
function get_pk_options($option_name){
	global $wpdb;
	$mylink = $wpdb->get_row( "SELECT * FROM WP_pk_options WHERE option_name = '$option_name'" );
	return $mylink->option_value;
  } 
?>