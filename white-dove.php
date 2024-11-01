<?php
/**
 * White Dove
 *
 * @package           White Dove
 * @author            White Rabbit
 * @copyright         2019 White Rabbit Consultancy
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       White Dove
 * Plugin URI:        https://consultantsussex.com/white-dove
 * Description:       Add a flying White Dove to your WordPress website. Great for wildlife and peace themed websites.
 * Version:           1.0.0
 * Requires at least: 4.6
 * Requires PHP:      5.2
 * Author:            White Rabbit
 * Author URI:        https://consultantsussex.com
 * Text Domain:       white-dove
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Include CSS file for White Dove.
 */
function white_dove_footer_styles() {
    wp_register_style( 'bird',  plugin_dir_url( __FILE__ ) . 'css/bird.css' );
    wp_enqueue_style( 'bird' );
}
add_action( 'wp_enqueue_scripts', 'white_dove_footer_styles' );

/**
 * Register WhiteDove Shortcode.
 */
function white_dove_shortcode() {
   return '<div class="bird-container bird-container--one">
<div class="bird bird--one"></div></div>';
}
add_shortcode( 'whitedove', 'white_dove_shortcode' );