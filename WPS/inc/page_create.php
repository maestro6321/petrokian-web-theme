<?php
/////
defined('ABSPATH') || exit() ;
class wps_create_pages{
    static function cr_pg_about() {
        $page_slug = 'About-us'; // Slug of the Post
      $new_page = array(
          'post_type'     => 'page', 				// Post Type Slug eg: 'page', 'post'
          'post_title'    => $page_slug	,	// Title of the Content
          'post_content'  => 'Test Page Content',	// Content
          'post_status'   => 'publish',			// Post Status
          'post_author'   => 1,					// Post Author ID
          'post_name'     => $page_slug			// Slug of the Post
      );
      if (!get_page_by_path( $page_slug, OBJECT, 'page')) { // Check If Page Not Exits
          $new_page_id = wp_insert_post($new_page);
          $page_id=get_page_id_by_title($page_slug);
          global $wpdb;
          add_post_meta( $page_id, '_wp_page_template', 'pages/about-us.php', true );
      }
    }
    static function cr_pg_projects() {
        $page_slug = 'Projects'; // Slug of the Post
      $new_page = array(
          'post_type'     => 'page', 				// Post Type Slug eg: 'page', 'post'
          'post_title'    => $page_slug	,	// Title of the Content
          'post_content'  => 'Test Page Content',	// Content
          'post_status'   => 'publish',			// Post Status
          'post_author'   => 1,					// Post Author ID
          'post_name'     => $page_slug			// Slug of the Post
      );
      if (!get_page_by_path( $page_slug, OBJECT, 'page')) { // Check If Page Not Exits
          $new_page_id = wp_insert_post($new_page);
          $page_id=get_page_id_by_title($page_slug);
          global $wpdb;
          add_post_meta( $page_id, '_wp_page_template', 'pages/projects.php', true );
      }
    }
    static function cr_pg_post() {
        $page_slug = 'posts'; // Slug of the Post
      $new_page = array(
          'post_type'     => 'page', 				// Post Type Slug eg: 'page', 'post'
          'post_title'    => $page_slug	,	// Title of the Content
          'post_content'  => 'Test Page Content',	// Content
          'post_status'   => 'publish',			// Post Status
          'post_author'   => 1,					// Post Author ID
          'post_name'     => $page_slug			// Slug of the Post
      );
      if (!get_page_by_path( $page_slug, OBJECT, 'page')) { // Check If Page Not Exits
          $new_page_id = wp_insert_post($new_page);
          $page_id=get_page_id_by_title($page_slug);
          global $wpdb;
          add_post_meta( $page_id, '_wp_page_template', 'pages/posts.php', true );
      }
    }
    static function cr_pg_certificate() {
        $page_slug = 'certificate'; // Slug of the Post
      $new_page = array(
          'post_type'     => 'page', 				// Post Type Slug eg: 'page', 'post'
          'post_title'    => $page_slug	,	// Title of the Content
          'post_content'  => 'Test Page Content',	// Content
          'post_status'   => 'publish',			// Post Status
          'post_author'   => 1,					// Post Author ID
          'post_name'     => $page_slug			// Slug of the Post
      );
      if (!get_page_by_path( $page_slug, OBJECT, 'page')) { // Check If Page Not Exits
          $new_page_id = wp_insert_post($new_page);
          $page_id=get_page_id_by_title($page_slug);
          global $wpdb;
          add_post_meta( $page_id, '_wp_page_template', 'pages/certificate.php', true );
      }
    }
}