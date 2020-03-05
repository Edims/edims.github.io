<?php
return array(
	//网站路径
	'web_path' => '/',
	//Cookie配置
	'cookie_domain' => '.home.com', //Cookie 作用域
	'cookie_path' => '', //Cookie 作用路径
	'cookie_pre' => 'WgvxyG_', //Cookie 前缀，同一域名下安装多套系统时，请修改Cookie前缀
	'cookie_ttl' => 0, //Cookie 生命周期，0 表示随浏览器进程
	//模板相关配置
	'tpl_root' => 'templates/', //模板保存物理路径
	'tpl_name' => 'default', //当前模板方案目录
	'tpl_css' => 'default', //当前样式目录
	'tpl_referesh' => 1,

	'js_path' => 'http://www.home.com/statics/js/', //CDN JS
	'css_path' => 'http://www.home.com/statics/css/', //CDN CSS
	'img_path' => 'http://www.home.com/statics/images/', //CDN img
	'app_path' => 'http://www.home.com/',//动态域名配置地址
	'auth_key' => 'zpbv5awr3jnimg7c2he94qys6utdkfx1',
	'charset' => 'utf-8', //网站字符集
	'timezone' => 'Etc/GMT-8', //网站时区（只对php 5.1以上版本有效），Etc/GMT-8 实际表示的是 GMT+8
	'debug' => 1, //是否显示调试信息
	'errorlog' => 1, //1、保存错误日志到 caches/error_log.php | 0、在页面直接显示
	'gzip' => 1, //是否Gzip压缩后输出
	'lang' => 'zh-cn',  //网站语言包
	'lock_ex' => '1',  //写入缓存时是否建立文件互斥锁定（如果使用nfs建议关闭）
);
?>