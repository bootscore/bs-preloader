<?php
/*Plugin Name: bs Preloader
Plugin URI: https://bootscore.me/plugins/bs-preloader/
Description: Plugin adds a preloader to Bootscore theme.
Version: 5.5.1
Tested up to: 6.9
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
require 'inc/update/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/bootscore/bs-preloader/',
	__FILE__,
	'bs-preloader'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');


/**
 * Load required files
 */
require_once plugin_dir_path( __FILE__ ) . 'inc/locate-template.php'; // Template overrides
require_once plugin_dir_path( __FILE__ ) . 'inc/enqueue.php';         // Scripts & styles
