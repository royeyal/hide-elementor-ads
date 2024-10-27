<?php
/**
 * Plugin Name:       Hide Elementor Ads
 * Plugin URI:        https://github.com/royeyal/hide-elementor-ads
 * Description:       Hide Elementor’s Image optimization & AI ads. CSS code by foxscribbler.com
 * Version:           1.0.3
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

function hide_elementor_ads_for_elementor_editor() {
    wp_register_style('hea_elementor_editor_css', plugins_url('/css/hide-nag-backend.css', __FILE__), false, '1.0.3');
    wp_enqueue_style('hea_elementor_editor_css');
}
add_action('elementor/editor/after_enqueue_styles', 'hide_elementor_ads_for_elementor_editor');
