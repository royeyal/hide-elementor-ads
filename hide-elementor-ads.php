<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://royeyal.studio
 * @since             1.0.0
 * @package           Hide_Elementor_Ads
 *
 * @wordpress-plugin
 * Plugin Name:       Hide Elementor Ads
 * Plugin URI:        https://github.com/royeyal/hide-elementor-ads
 * Description:       Hide Elementor’s Image optimization & AI ads. CSS code by foxscribbler.com
 * Version:           1.0.0
 * Author:            Roy Eyal
 * Author URI:        https://royeyal.studio/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       hide-elementor-ads
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Frontend styles
function hide_elementor_ads_enqueue_styles() {
    wp_enqueue_style('hide-elementor-ads-enqueue-styles', plugin_dir_url(__FILE__) . 'css/elementor-nag.css');
}
add_action('wp_enqueue_scripts', 'hide_elementor_ads_enqueue_styles');

// Backend styles
function load_custom_admin_style() {
    wp_register_style('custom_admin_css', plugins_url('/css/admin-style.css', __FILE__), false, '1.0.0');
    wp_enqueue_style('custom_admin_css');
}
add_action('admin_enqueue_scripts', 'load_custom_admin_style');


function hide_elementor_ads_admin() {
        wp_register_style(
            'elementor-nag-removal','/css/hide-nag-backend.css', 'array()', '1.0.0', 'all'); 
       // Enqueue the registered style and script files
        wp_enqueue_style('elementor-nag-removal');
    }
add_action('admin_head', 'hide_elementor_ads_admin');
