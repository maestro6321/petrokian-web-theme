<?php
/////
defined('ABSPATH') || exit() ;
class wps_create_tables{
  static function cr_tbl_projects(){
    global $wpdb;
    $table_projects = $wpdb->prefix . 'pk_projects_test';
    $sql= "CREATE TABLE `$table_projects` (
      `id` INT NOT NULL,
      `employer` VARCHAR(25) NOT NULL,
      `place` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
      `contract` LONGTEXT NOT NULL,
      `status` VARCHAR(15) NOT NULL,
      `volume` VARCHAR(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
      `date` VARCHAR(10) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci";
  
  
  // // die($sql);
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta( $sql );
  }
  static function test(){

    global $wpdb;

    $sql = "CREATE TABLE `wps_test2` (
      `id` int(11) NOT NULL,
      `cp_name` text NOT NULL,
      `cm_tittle` text NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta( $sql );
  }
  
}
