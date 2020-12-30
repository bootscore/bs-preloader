<?php
/*Plugin Name: bS5 Preloader
Plugin URI: https://bootscore.me/plugins/bs-cookie-consent/
Description: This plugin adds a preloader to bootScore 5
Version: 5.0.0
Author: Bastian Kreiter
Author URI: https://crftwrk.de
License: GPLv2
*/


// Register Styles and Scripts
function bs_preloader_scripts() {

    wp_enqueue_script( 'preloader-js', plugins_url( '/js/preloader.js', __FILE__ ));

    wp_register_style( 'preloader-css', plugins_url('/css/preloader.css', __FILE__) );
        wp_enqueue_style( 'preloader-css' );
        
        }
    
add_action('wp_enqueue_scripts','bs_preloader_scripts');





function bs_header_preloader() {

    ?>

        <div id="preloader" class="align-items-center justify-content-center position-fixed">
            <div id="status" class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>


    <?php

}

add_action('wp_head', 'bs_header_preloader');


