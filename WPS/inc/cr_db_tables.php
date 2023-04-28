<?php
/////
defined('ABSPATH') || exit() ;
class wps_create_tables{
  static function cr_tbl_projects(){
    global $wpdb;
    $table_name = $wpdb->prefix . 'pk_projects';
    $sql= "CREATE TABLE `$table_name` (
      `id` int NOT NULL AUTO_INCREMENT,
      `employer` varchar(25) COLLATE utf8mb3_persian_ci NOT NULL,
      `place` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
      `contract` longtext COLLATE utf8mb3_persian_ci NOT NULL,
      `status` varchar(15) COLLATE utf8mb3_persian_ci NOT NULL,
      `volume` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
      `date` varchar(10) COLLATE utf8mb3_persian_ci NOT NULL,
      PRIMARY KEY (`id`),
      KEY `id` (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci";
  

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta( $sql );
  }
  static function cr_tbl_options(){
    global $wpdb;
    $table_name = $wpdb->prefix . 'pk_options';
    $sql= "CREATE TABLE `$table_name` (
      `option_id` bigint unsigned NOT NULL AUTO_INCREMENT,
      `option_name` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
      `option_value` longtext COLLATE utf8mb4_persian_ci NOT NULL,
      PRIMARY KEY (`option_id`)
      ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci";

    $sql_data = "INSERT INTO `$table_name` (`option_id`, `option_name`, `option_value`) VALUES
    (1, 'company_name', 'شرکت پردیس پتروکیان پارسیان'),
    (2, 'company_tittle', 'مجری انواع مخازن ذخیره، پایپینگ پالایشگاه های نفت و گاز'),
    (3, 'company_address', 'شیراز ، بلوار شهید بهشتی (سیاحتگر) روبروی بانک صادرات ، پلاک 77'),
    (4, 'company_tel', '07138215536'),
    (5, 'company_fax', '07138301560'),
    (6, 'company_map', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d306.5992688816662!2d52.513278788606016!3d29.610233487390687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1672212809286!5m2!1sen!2s');
    COMMIT;";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta( $sql );
    dbDelta( $sql_data );
  }

  static function cr_tbl_social(){
    global $wpdb;
    $table_name = $wpdb->prefix . 'pk_social';
    $sql= "CREATE TABLE `$table_name` (
       `id` int NOT NULL AUTO_INCREMENT,
        `social_name` varchar(100) COLLATE utf8mb3_persian_ci NOT NULL,
        `social_link` longtext COLLATE utf8mb3_persian_ci NOT NULL,
        `social_icon` varchar(250) COLLATE utf8mb3_persian_ci NOT NULL,
        PRIMARY KEY (`id`)
         ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci";

    $sql_data = "INSERT INTO `$table_name` (`id`, `social_name`, `social_link`, `social_icon`) VALUES
    (1, 'whatsapp', 'watsapp.com', 'fa-whatsapp'),
    (2, 'instagram', 'instagram.com', 'fa-instagram'),
    (3, 'google', 'google.com', 'fa-google'),
    (4, 'telegram', 'telegram.com', 'fa-telegram');
    COMMIT;";
      
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta( $sql );
    dbDelta( $sql_data );
  }
  
}
