<?php
/**
 * Plugin Name: SW Daily Message
 * Plugin URI: http://www.beaverlodgehq.com
 * Description: Add a daily mesage to your site.
 * Version: 1.0.0
 * Author: Jon Mather
 * Author URI: http://www.simplewebsiteinaday.com.au
 */

define( 'SW_DAILY_MESSAGE_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'SW_DAILY_MESSAGE_MODULE_URL', plugins_url( '/', __FILE__ ) );

function sw_daily_message_module() {
    if ( class_exists( 'FLBuilder' ) ) {
        require_once 'includes/bb-sw-daily-message-module.php';
    }
}
add_action( 'init', 'sw_daily_message_module' );