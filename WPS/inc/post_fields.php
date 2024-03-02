<?php
// if ( ! function_exists( 'is_plugin_active' ) ) {
//     include_once ABSPATH . 'wp-admin/includes/plugin.php';
// }

// // Check if ACF PRO is active
// if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
//     // Abort all bundling, ACF PRO plugin takes priority
//     return;
// }

define( 'MY_ACF_PATH', get_stylesheet_directory() . '/WPS/inc/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/WPS/inc/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the URL setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// // Check if ACF free is installed
// if ( ! file_exists( WP_PLUGIN_DIR . '/advanced-custom-fields/acf.php' ) ) {
//     // Free plugin not installed
//     // Hide the ACF admin menu item.
//     add_filter( 'acf/settings/show_admin', '__return_false' );
//     // Hide the ACF Updates menu
//     add_filter( 'acf/settings/show_updates', '__return_false', 100 );
// }








// fields #1
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_65e1db9ae04e4',
	'title' => 'Special_attch_img',
	'fields' => array(
		array(
			'key' => 'field_65e1db9a675db',
			'label' => 'استفاده به عنوان',
			'name' => 'Use_for',
			'aria-label' => '',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'گواهینامه' => 'گواهینامه',
				'تغدیرنامه' => 'تغدیرنامه',
			),
			'default_value' => array(
			),
			'return_format' => 'value',
			'allow_custom' => 0,
			'layout' => 'vertical',
			'toggle' => 0,
			'save_custom' => 0,
			'custom_choice_button_text' => 'Add new choice',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'attachment',
				'operator' => '==',
				'value' => 'image',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
    ) );
    } );

// end field #1