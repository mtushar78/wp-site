<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       new-custom-plugin
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */
define('PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ));
define('PLUGIN_URL', plugins_url());
//echo plugins_url('style.css',__FILE__ );
//exit();

 function admin_menu_func(){
     add_menu_page( 'custom_plugin', 'new custom plugin', 'manage_options', 'custom_plugin', 'callBackFunc', 'dashicons-visibility', 2 );
     add_submenu_page( 'custom_plugin', 'submenu of custom_plugin', 'submenu', 'manage_options', 'custom_plugin_sub', 'callbackfuncSub' );
 }
 function callBackFunc(){
    require_once 'display.php';
 }
 function callbackfuncSub(){
     echo "this is a submenu";
 }

function your_namespace() {
    echo
    "<link rel='stylesheet' type='text/css' href='assets/css/style.css' >";
//    wp_register_script( 'your_namespace', plugins_url('your_script.js',__FILE__ ));
//    wp_enqueue_script('your_namespace');
}

add_action( 'admin_head','your_namespace');

add_action( 'admin_menu', 'admin_menu_func' );
//add_action( 'wp_enqueue_scripts', 'custom_plugin_assets' );


?>