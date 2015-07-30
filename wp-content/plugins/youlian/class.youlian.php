<?php
class Youlian {

	//启用插件
	public static function plugin_activation() {
		add_option("display_copyright_text", "<p style='color:red'>本站点所有文章均为原创，转载请注明出处！</p>p>", '', 'yes');
	}

	//停用插件
	public static function plugin_deactivation() {
		 // delete_option('display_copyright_text');
	}

	//初始化
	public static function init() {
		if( is_admin() ) {
			//利用 admin_menu 钩子，添加菜单
			add_action('admin_menu', array('youlian', 'display_config_menu'));
		}

	}

	//显示配置菜单
	public static function display_config_menu() {
		//add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function);
		//页名称，菜单名称，访问级别，菜单别名，点击该菜单时的回调函数（用以显示设置页面）
		add_options_page('Set Config', '参数配置', 'administrator','config', array('youlian', 'display_config_html_page'));
	}

	//显示配置页面
	public static function display_config_html_page() {
?>
	   <div>
		    <h2>文章目录设置</h2>
				<form method="post">
					<?php /* 下面这行代码用来保存表单中内容到数据库 */
						if ( 'save' == $_REQUEST['action'] )
							update_option( ci_fontsize, $_REQUEST['ci_fontsize'] );
					?>
				<p>
					<label>锭距</label>
					<input type="text" name="dingju" value=<?php echo get_option('dingju');?>>
					<label>展距</label>
					<input type="text" name="zhanju" value=<?php echo get_option('zhanju');?>>
	            <p>

                <input type="submit" name="action" value="保存" class="button-primary" />
            </p>
        </form>
    </div>
<?php
}
}
