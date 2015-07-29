<?php
/*
Plugin Name: 友联网站参数配置插件
Plugin URI: http://iat.net.cn
Description: 配置参数
Version: 0.1
Author: iat
Author URI: http://iat.net.cn
License: GPL2
*/
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'YOULIAN_VERSION', '0.1' );
define( 'YOULIAN_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'YOULIAN_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

register_activation_hook( __FILE__, array( 'youlian', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'youlian', 'plugin_deactivation' ) );

require_once( YOULIAN_PLUGIN_DIR . 'class.youlian.php' );
require_once( YOULIAN__PLUGIN_DIR . 'class.youlian-widget.php' );

add_action( 'init', array( 'youlian', 'init' ) );
