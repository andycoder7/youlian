<?php
class Youlian {

	//启用插件
	public static function plugin_activation() {
	}

	//停用插件
	public static function plugin_deactivation() {
	}

	//初始化
	public static function init() {
		if( is_admin() ) {
			/*  利用 admin_menu 钩子，添加菜单 */
			add_action('admin_menu', 'display_copyright_menu');
		}

		function display_copyright_menu() {
			/* add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function);  */
			/* 页名称，菜单名称，访问级别，菜单别名，点击该菜单时的回调函数（用以显示设置页面） */
			add_options_page('Set Copyright', '参数配置', 'administrator','youlian_config', 'display_copyright_html_page');
		}
		function display_copyright_html_page() {
		echo '111';
		exit;
		}
	}
}
