<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2017/3/25
 * Time: 13:57
 */
return [

    //-- 项目URL根目录
    'url_path'           => ( isset( $_SERVER[ 'HTTPS' ] ) && $_SERVER[ 'HTTPS' ] == 'on' ) ? 'https:' : 'http:' . '//' . $_SERVER[ 'SERVER_NAME' ] . ( $_SERVER[ "SERVER_PORT" ] == '80' ? '' : ':' . $_SERVER[ "SERVER_PORT" ]  .'/' ),

    //-----默认404
    'default_404'        => '',

    //--控制器后缀
    'controllerSuffix'  => 'Controller',

    //--行为后缀
    'methodSuffix'       => 'Action',

];