<?php
/*Plugin Name: bS5 Preloader
Plugin URI: https://bootscore.me/plugins/bs-preloader/
Description: This plugin adds a preloader to bootScore 5
Version: 5.0.0.1
Author: Bastian Kreiter
Author URI: https://crftwrk.de
License: GPLv2
*/


// Register Styles and Scripts
function bs_preloader_scripts() {

    wp_enqueue_script( 'preloader-js', plugins_url( '/js/preloader.js' , __FILE__ ), array( 'jquery' ), '1.0', true );
        
        }
    
add_action('wp_enqueue_scripts','bs_preloader_scripts');



function bs_header_preloader() {

    ?>

        <div id="preloader" class="align-items-center justify-content-center position-fixed">
            <div id="status" class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <style>
            #preloader {
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 1070;
                display: flex;
                background-color: inherit;
            }
        </style>


    <?php

}

add_action('wp_head', 'bs_header_preloader');


