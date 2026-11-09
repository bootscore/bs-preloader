<?php

/**
 * Enqueue styles & scripts
 *
 * @author   Bootscore
 * @package  bs Preloader
 * @version  6.0.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Register Styles and Scripts
 */
function bs_preloader_scripts() {

  // Base plugin directory (go up one level from /inc/)
  $plugin_dir = plugin_dir_path( __DIR__ );
  $plugin_url = plugin_dir_url( __DIR__ );

  // File paths
  $script_file = $plugin_dir . 'assets/js/preloader.min.js';

  // Timestamps as version numbers
  $script_ver = file_exists($script_file) ? date('YmdHi', filemtime($script_file)) : false;

  // Enqueue script
  // No dependency: the preloader doesn't use Bootstrap's JavaScript
  wp_enqueue_script(
    'bs-preloader',
    $plugin_url . 'assets/js/preloader.min.js',
    [],
    $script_ver,
    true
  );

}

add_action('wp_enqueue_scripts', 'bs_preloader_scripts');
