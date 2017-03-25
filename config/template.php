<?php

use GFPHP\Config;

/**
 * 项目基本配置
 * 创建项目需要首先配置此文件
 * 所有文件夹配置需要以'/'开头
 */

return [

	//--视图(模板)所在文件夹，相对于项目所在目录,如果在此目录下存在模板,将不会调用当前Module的模板
	'view_dir'          => 'view',

	//--模板名称
	'default_view_name' => 'default',

//	//--模板名称
//	'view_name'         => 'default',

	//--编译好的模板存放的位置,相对于缓存存放位置

	'view_c_dir'     => Config::config ( 'app_dir' ) . '/view_c',

	//静态视图缓存文件夹，相对于缓存存放位置
	'view_cache_dir' => Config::config ( 'app_dir' ) . '/view',

	//--模板文件后缀
	'view_suffix'    => '.html',

	//--是否开启模板静态化,默认关闭

	'view_cache' => 1,

	//--模板标签配置
	'leftDelim'  => '\{',

	'rightDelim'      => '\}',

	//--默认静态缓存时间
	'view_cache_time' => 0,

	//--公共文件存放位置
	'public_path'     => Config::router ( 'url_path' ) . '/public/' ,

	//--CSS存放位置
	'css_path'        => Config::router ( 'url_path' ) .'/public/css/',

	//--js存放位置
	'js_path'         => Config::router ( 'url_path' ) .'/public/js/',

	//--img存放位置
	'img_path'        => Config::router ( 'url_path' ) . '/public/images/',

];