<?php
use GFPHP\Config;

/**
 * 视图引入变量
 * 定义为$var,视图中可以使用
 * 在视图中需要的变量在这里添加
 */

return [
	
	'app_dir' => Config::config ( 'app_dir' ),

	'app_entry' => $_SERVER[ 'SCRIPT_NAME' ],

	'core_dir'    => Config::config ( 'coe_dir' ),

	//--公共文件存放位置
	'public_path' => Config::template ( 'public_path' ),

	//--CSS存放位置
	'css_path'    => Config::template ( 'css_path' ),

	//--js存放位置
	'js_path'     => Config::template ( 'js_path' ),
	'img_path'    => Config::template ( 'img_path' ),
];