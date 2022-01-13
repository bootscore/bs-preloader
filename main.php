<?php
/*Plugin Name: bS Preloader
Plugin URI: https://bootscore.me/plugins/bs-preloader/
Description: This plugin adds a preloader to bootScore
Version: 5.0.1.3
Author: bootScore
Author URI: https://bootscore.me
License: MIT License
*/

// Update checker
require 'update/update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://bootscore.me/wp-content/plugins/bs-preloader-main/update/plugin.json',
	__FILE__, //Full path to the main plugin file or functions.php.
	'bs-preloader-main'
);


// Register Styles and Scripts
function bs_preloader_scripts() {

    wp_enqueue_script( 'preloader-js', plugins_url( '/js/preloader.js' , __FILE__ ), array( 'jquery' ), '1.0', true );
    
    wp_register_style( 'preloader-css', plugins_url('/css/preloader.css', __FILE__) );
    wp_enqueue_style( 'preloader-css' );
        
    }
    
add_action('wp_enqueue_scripts','bs_preloader_scripts');


/**
 * Locate template.
 *
 * Locate the called template.
 * Search Order:
 * 1. /themes/theme/bs-preloader-main/$template_name
 * 2. /themes/theme/$template_name
 * 3. /plugins/bs-preloader-main/templates/$template_name.
 *
 * @since 1.0.0
 *
 * @param 	string 	$template_name			Template to load.
 * @param 	string 	$string $template_path	Path to templates.
 * @param 	string	$default_path			Default path to template files.
 * @return 	string 							Path to the template file.
 */
function bs_preloader_locate_template( $template_name, $template_path = '', $default_path = '' ) {

	// Set variable to search in bs-preloader-main folder of theme.
	if ( ! $template_path ) :
		$template_path = 'bs-preloader-main/';
	endif;

	// Set default plugin templates path.
	if ( ! $default_path ) :
		$default_path = plugin_dir_path( __FILE__ ) . 'templates/'; // Path to the template folder
	endif;

	// Search template file in theme folder.
	$template = locate_template( array(
		$template_path . $template_name,
		$template_name
	) );

	// Get plugins template file.
	if ( ! $template ) :
		$template = $default_path . $template_name;
	endif;

	return apply_filters( 'bs_preloader_locate_template', $template, $template_name, $template_path, $default_path );

}


/**
 * Get template.
 *
 * Search for the template and include the file.
 *
 * @since 1.0.0
 *
 * @see bs_preloader_locate_template()
 *
 * @param string 	$template_name			Template to load.
 * @param array 	$args					Args passed for the template file.
 * @param string 	$string $template_path	Path to templates.
 * @param string	$default_path			Default path to template files.
 */
function bs_preloader_get_template( $template_name, $args = array(), $tempate_path = '', $default_path = '' ) {

	if ( is_array( $args ) && isset( $args ) ) :
		extract( $args );
	endif;

	$template_file = bs_preloader_locate_template( $template_name, $tempate_path, $default_path );

	if ( ! file_exists( $template_file ) ) :
		_doing_it_wrong( __FUNCTION__, sprintf( '<code>%s</code> does not exist.', $template_file ), '1.0.0' );
		return;
	endif;

	include $template_file;

}


/**
 * Preloader.
 *
 * The preloader will output the template
 * file from the /templates.
 *
 * @since 1.0.0
 */

function bs_header_preloader() {

	return bs_preloader_get_template( 'preloader.php' );

}
add_action('wp_head', 'bs_header_preloader');
