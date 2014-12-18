<?php
/**
 * Plugin Name: FotoWeb
 * Plugin URI: http://www.fotoware.com
 * Description: A Plugin to insert images from FotoWeb into Wordpress
 * Version: 0.1
 * Author: Jan-Vidar Bakke
 * Author URI: http://www.fotoware.com
 * License: GPL2
 */

include( plugin_dir_path( __FILE__ ) . 'options.php');
include( plugin_dir_path( __FILE__ ) . 'functions.php');

defined('ABSPATH') or die("No script kiddies please!");

if(get_option('fw_url')) {
	add_action('media_buttons', 'add_fotoweb_button', 15);
	wp_register_script('fw-javascript', WP_PLUGIN_URL.'/fotoware/script.js', array('jquery'));
	wp_enqueue_script('fw-javascript');
	$script_params = array(
    	'fwUrl' => get_option('fw_url')
	);

	// Make fwParams available in Javascript
	wp_localize_script( 'fw-javascript', 'fwParams', $script_params );
}






