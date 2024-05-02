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

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hide-elementor-ads-activator.php
 */
function activate_hide_elementor_ads() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hide-elementor-ads-activator.php';
	Hide_Elementor_Ads_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hide-elementor-ads-deactivator.php
 */
function deactivate_hide_elementor_ads() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hide-elementor-ads-deactivator.php';
	Hide_Elementor_Ads_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hide_elementor_ads' );
register_deactivation_hook( __FILE__, 'deactivate_hide_elementor_ads' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hide-elementor-ads.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hide_elementor_ads() {

	$plugin = new Hide_Elementor_Ads();
	$plugin->run();

}
run_hide_elementor_ads();
