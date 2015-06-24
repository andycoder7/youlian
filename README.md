# 项目安装配置说明
### clone代码

代码地址：git@git.oschina.net:iatboy/youlian.git

checkout dev分支，测试无误后合并到master

修改wp-config.php数据库相关配置

数据库导出文件为doc/youlian.sql，可自行导入

### 配置伪静态

	sudo a2enmod rewrite

apache的配置文件/etc/apache2/apache2.conf中设置站点的AllowOverride 为ALL，顺便去掉Options的Indexes，从而静止访问文件目录

	<Directory PROJECT_ROOT> //PROJECT_ROOT为项目的绝对路径，下同
		Options FollowSymLinks
		AllowOverride ALL
		Require all granted
	</Directory>

### 配置虚拟主机

在/etc/apache2/sites-available中新建youlian.conf，添加如下内容

	<VirtualHost *:80>
		DocumentRoot PROJECT_ROOT
		ServerName youlian.com
		ServerAlias admin.youlian.com
	</VirtualHost>

执行

	sudo a2ensite youlian
	sudo service apache2 reload
	sudo service apache2 restart

在/etc/hosts中添加如下内容

	127.0.0.1   youlian.com
	127.0.0.1   admin.youlian.com

### 上线时需要注意的

#### 将正式网站的地址添加至数据库中

修改**wp_options**表`option_name`为site_url和home的option_value为网站地址

