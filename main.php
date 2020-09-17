<?php
/*Plugin Name: bS Crossfade
Plugin URI: https://bootscore.me/plugins/animate-on-scroll-wp/
Description: This plugin adds a fade-out effect by clicking internal links.
Version: 1.0.0
Author: Bastian Kreiter
Author URI: https://crftwrk.de
License: GPLv2
*/

// Register Styles and Scripts
function pcf_scripts() {

    wp_enqueue_script( 'pcf-js', plugins_url( '/js/pagecrossfade.js', __FILE__ ));
    
    wp_enqueue_script( 'pcf-initialize', plugins_url( '/js/pcf-initialize.js', __FILE__ ));
    
    wp_register_style( 'pcf-css', plugins_url('css/pagecrossfade.css.css', __FILE__) );
        wp_enqueue_style( 'pcf-css' );
        
        }
    
add_action('wp_enqueue_scripts','pcf_scripts');
