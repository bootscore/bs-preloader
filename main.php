<?php
/*Plugin Name: bs Preloader
Plugin URI: https://bootscore.me/plugins/bs-preloader/
Description: Plugin adds a preloader to Bootscore theme.
Version: 5.5.0
Tested up to: 6.6
Requires at least: 5.0
Requires PHP: 7.4
Author: Bootscore
Author URI: https://bootscore.me
License: MIT License
*/


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Update checker
 */
require 'update/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/bootscore/bs-preloader/',
	__FILE__,
	'bs-preloader'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');


/**
 * Register Styles and Scripts
 */
function bs_preloader_scripts() {

  wp_enqueue_script('preloader-js', plugins_url('/assets/js/preloader.js', __FILE__), array('jquery'), '1.0', true);

  wp_register_style('preloader-css', plugins_url('/assets/css/preloader.css', __FILE__));
  wp_enqueue_style('preloader-css');
}

add_action('wp_enqueue_scripts', 'bs_preloader_scripts');


/**
 * Locate template.
 *
 * Locate the called template.
 * Search Order:
 * 1. /themes/theme/bs-preloader/$template_name
 * 2. /themes/theme/bs-preloader-main/$template_name
 * 3. /themes/theme/$template_name
 * 4. /plugins/bs-preloader-main/templates/$template_name.
 *
 * @since 5.2.0
 *
 * @param 	string 	$template_name			Template to load.
 * @param 	string 	$string $template_path	Path to templates.
 * @param 	string	$default_path			Default path to template files.
 * @return 	string 							Path to the template file.
 */
function bs_preloader_locate_template($template_name, $template_path = '', $default_path = '') {

  // Set default plugin templates path.
  if (!$default_path) :
    $default_path = plugin_dir_path(__FILE__) . 'templates/'; // Path to the template folder
  endif;

  // Check if 'bs-preloader/' exists in the theme.
  $bs_preloader_path = get_theme_file_path('bs-preloader/' . $template_name);
  if (file_exists($bs_preloader_path)) {
    return $bs_preloader_path;
  }

  // Check if 'bs-preloader-main/' exists in the theme.
  // Fallback for existing 'bs-preloader-main/' folders in child theme
  $bs_preloader_main_path = get_theme_file_path('bs-preloader-main/' . $template_name);
  if (file_exists($bs_preloader_main_path)) {
    return $bs_preloader_main_path;
  }

  // If neither 'bs-preloader/' nor 'bs-preloader-main/' exists, return the default path.
  return $default_path . $template_name;
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
function bs_preloader_get_template($template_name, $args = array(), $tempate_path = '', $default_path = '') {

  if (is_array($args) && isset($args)) :
    extract($args);
  endif;

  $template_file = bs_preloader_locate_template($template_name, $tempate_path, $default_path);

  if (!file_exists($template_file)) :
    _doing_it_wrong(__FUNCTION__, sprintf('<code>%s</code> does not exist.', $template_file), '1.0.0');
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
 * @since 5.5.0
 */

function bs_header_preloader() {

  return bs_preloader_get_template('preloader.php');
}
// Priority lower than 99 will remove the favicon if this is selected via the Customizer
// See https://github.com/bootscore/bs-preloader/issues/22
// See https://github.com/bootscore/bs-preloader/pull/24
add_action('wp_head', 'bs_header_preloader', 99);
