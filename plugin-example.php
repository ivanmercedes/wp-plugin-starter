<?php 
/**
 * Plugin Name:       Ejemplo de Plugin
 * Plugin URI:        https://github.com/ivanmercedes/wp-plugin-starter
 * Description:       Plugin de ejemplo para iniciar a crear nuevos
 * Version:           1.0
 * Requires at least: 5.8
 * Requires PHP:      7.4
 * Author:            Ivan Mercedes
 * Author URI:        https://ivanmercedes.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       example
*/

define('PLUGIN_NAME_PATH', plugin_dir_path(__FILE__));

// API REST
require_once PLUGIN_NAME_PATH.'/includes/api/api-example.php';
 

// Shortcode
require_once PLUGIN_NAME_PATH.'/public/shortcode/example.php';
 


function example_plugin_activate(){
     // code 
}

register_activation_hook(__FILE__, 'example_plugin_activate');


function example_plugin_deactivate(){
  // code 
}

register_deactivation_hook(__FILE__, 'example_plugin_deactivate');

