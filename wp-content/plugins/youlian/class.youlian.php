<?php
class Youlian {

	//启用插件
	public static function plugin_activation() {
		add_option("dingju_key_1", "435", '', 'yes');
		add_option("dingju_value_1", "60", '', 'yes');
		add_option("dingju_key_2", "415", '', 'yes');
		add_option("dingju_value_2", "50", '', 'yes');
		add_option("dingju_key_3", "425", '', 'yes');
		add_option("dingju_value_3", "55", '', 'yes');
		add_option("dingju_key_4", "445", '', 'yes');
		add_option("dingju_value_4", "62", '', 'yes');

		add_option("zhanju_key_1", "1", '', 'yes');
		add_option("zhanju_value_1", "4", '', 'yes');
		add_option("zhanju_key_2", "0.98", '', 'yes');
		add_option("zhanju_value_2", "3", '', 'yes');
		add_option("zhanju_key_3", "0.985", '', 'yes');
		add_option("zhanju_value_3", "3.5", '', 'yes');
		add_option("zhanju_key_4", "1.025", '', 'yes');
		add_option("zhanju_value_4", "4.5", '', 'yes');

		add_option("hexinshebeijiage", "350000", '', 'yes');
		add_option("yinhangnianlilv", "8", '', 'yes');
		add_option("shoufuzhekou", "9.6", '', 'yes');
		add_option("fahuoqianfudaozhekou", "9.8", '', 'yes');

		global $wpdb;
		$table_name = $wpdb->prefix . "youlian_config";
		if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
			$sql = "CREATE TABLE `wp_youlian_logs` (
						`id` int(11) NOT NULL AUTO_INCREMENT,
						`name` varchar(20) DEFAULT NULL,
						`tel` varchar(11) DEFAULT NULL,
						`email` varchar(30) DEFAULT NULL,
						`ip` varchar(20) DEFAULT NULL,
						`city` varchar(20) DEFAULT NULL,
						`create_time` datetime DEFAULT NULL,
						`jizhong` varchar(30) DEFAULT NULL,
						`taishu` int(11) DEFAULT NULL,
						`dingshu` int(11) DEFAULT NULL,
						`dingju` varchar(5) DEFAULT NULL,
						`zhanju` varchar(5) DEFAULT NULL,
						`shoufu` varchar(5) DEFAULT NULL,
						`fahuoqianzaifu` varchar(5) DEFAULT NULL,
						`anzhuangtiaoshiwan` varchar(5) DEFAULT NULL,
						`youhuiqianzongjia` double DEFAULT NULL,
						`shoufukuan` double DEFAULT NULL,
						`fahuoqianfukuan` double DEFAULT NULL,
						`anzhuangtiaoshiwanfukuan` double DEFAULT NULL,
						`zhibaojin` double DEFAULT NULL,
						`youhuihouzongjia` double DEFAULT NULL,
						`youhui` double DEFAULT NULL,
						PRIMARY KEY (`id`)
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

			require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
			dbDelta($sql);
		}
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
		add_options_page('Set Logs', '访客日志', 'administrator','logs', array('youlian', 'display_logs_html_page'));
	}

	//显示配置页面
	public static function display_config_html_page() {
?>
	   <div>
		    <h2>参数配置</h2>
				<form method="post">
					<?php
						if ( '保存配置' == $_REQUEST['action'] ) {
							foreach($_POST as $key => $value) {
								update_option($key, $value);
							}
						}
					?>
				<p>
					<label>锭距</label>
				</p>
				<p>
					<input type="text" name="dingju_key_1" style="width:60px" value=<?php echo get_option('dingju_key_1');?>>=>
					<input type="text" name="dingju_value_1" style="width:60px" value=<?php echo get_option('dingju_value_1');?>>P（默认）
					<br />
					<input type="text" name="dingju_key_2" style="width:60px" value=<?php echo get_option('dingju_key_2');?>>=>
					<input type="text" name="dingju_value_2" style="width:60px" value=<?php echo get_option('dingju_value_2');?>>P
					<br />
					<input type="text" name="dingju_key_3" style="width:60px" value=<?php echo get_option('dingju_key_3');?>>=>
					<input type="text" name="dingju_value_3" style="width:60px" value=<?php echo get_option('dingju_value_3');?>>P
					<br />
					<input type="text" name="dingju_key_4" style="width:60px" value=<?php echo get_option('dingju_key_4');?>>=>
					<input type="text" name="dingju_value_4" style="width:60px" value=<?php echo get_option('dingju_value_4');?>>P
					<br />
	            <p>

				<p>
					<label>展距</label>
				</p>
				<p>
					<input type="text" name="zhanju_key_1" style="width:60px" value=<?php echo get_option('zhanju_key_1');?>>=>
					<input type="text" name="zhanju_value_1" style="width:60px" value=<?php echo get_option('zhanju_value_1');?>>M（默认）
					<br />
					<input type="text" name="zhanju_key_2" style="width:60px" value=<?php echo get_option('zhanju_key_2');?>>=>
					<input type="text" name="zhanju_value_2" style="width:60px" value=<?php echo get_option('zhanju_value_2');?>>P
					<br />
					<input type="text" name="zhanju_key_3" style="width:60px" value=<?php echo get_option('zhanju_key_3');?>>=>
					<input type="text" name="zhanju_value_3" style="width:60px" value=<?php echo get_option('zhanju_value_3');?>>P
					<br />
					<input type="text" name="zhanju_key_4" style="width:60px" value=<?php echo get_option('zhanju_key_4');?>>=>
					<input type="text" name="zhanju_value_4" style="width:60px" value=<?php echo get_option('zhanju_value_4');?>>P
					<br />
	            <p>

				<p>
					<label style="display:inline-block;width:110px;">核心设备价格：</label>
					<input type="text" name="hexinshebeijiage" style="width:100px" value=<?php echo get_option('hexinshebeijiage');?>>元
				<p>

				<p>
					<label style="display:inline-block;width:110px;">银行年利率：</label>
					<input type="text" name="yinhangnianlilv" style="width:100px" value=<?php echo get_option('yinhangnianlilv');?>>%
				</p>

				<p>
					<label style="display:inline-block;width:110px;">首付折扣：</label>
					<input type="text" name="shoufuzhekou" style="width:100px" value=<?php echo get_option('shoufuzhekou');?>>折
				</p>

				<p>
					<label style="display:inline-block;width:110px;">发货前付到折扣：</label>
					<input type="text" name="fahuoqianfudaozhekou" style="width:100px" value=<?php echo get_option('fahuoqianfudaozhekou');?>>折
				</p>
                <input type="submit" name="action" value="保存配置" class="button-primary" />
				</p>
			</form>
		</div>
<?php
	}

	//显示配置页面
	public static function display_logs_html_page() {
		require_once( dirname( __FILE__ ) . '/admin.php' );

		if ( ! current_user_can( 'list_logs' ) )
			    wp_die( __( 'Cheatin&#8217; uh?' ), 403 );

		$wp_list_table = _get_list_table('WP_Logs_List_Table');
		$pagenum = $wp_list_table->get_pagenum();
		$title = __('logs');
		$parent_file = 'users.php';

		add_screen_option( 'per_page' );

?>
	   <div>
		    <h2>访客日志</h2>
<?php
	}
}
