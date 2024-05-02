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
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hide-elementor-ads
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'HIDE_ELEMENTOR_ADS_VERSION', '1.0.0' );


function elementor_nag_frontend() {
        wp_register_style(
            'elementor-nag-removal','/css/elementor-nag.css', 'array()', '1.0.41', 'all'); 
        // Enqueue the registered style and script files
        wp_enqueue_style('elementor-nag-removal');
    }

add_action('elementor/editor/before_enqueue_styles', 'elementor_nag_frontend');

function elementor_nag_admin() {
        wp_register_style(
            'elementor-nag-removal','/css/hide-nag-backend.css', 'array()', '1.0.0', 'all'); 
       // Enqueue the registered style and script files
        wp_enqueue_style('elementor-nag-removal');
    }
add_action('admin_head', 'elementor_nag_admin');
