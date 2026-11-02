<?php
/**
 * Compile swiper asstes to theme
 * Requires modified ts and scss compiler
 * https://github.com/crftwrk/compile-plugin-assets-to-bootscore
 *
 * @author  Bootscore
 * @package bs Preloader
 * @version 6.0.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;

add_filter('bootscore/compiler/plugin_sources', function ($sources) {
  $sources['bs-preloader'] = [
    'dir'           => plugin_dir_path(__FILE__),
    'url'           => plugin_dir_url(__FILE__),
    'version'       => '6.0.0',          // use your plugin's version constant
    'ts'            => '../assets/ts/preloader.ts',
    'script_handle' => 'preloader-js',    // handle used in wp_enqueue_script()
  ];
  return $sources;
});
