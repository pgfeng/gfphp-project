<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2017/3/25
 * Time: 13:07
 */

/**
 * 数据库配置
 * 如果需要数据库则需要配置此文件
 * 注意:创建表及字段需为-----[小写字母]
 */
return [
    'default' => [
        //--IP
        'host' => '127.0.0.1',
        //-- 端口
        'port' => '3306',
        //--驱动
        'driver' => \GFPHP\Database\PDO::class,     //参考drives/databases目录下文件
        //--库名
        'name' => 'test',
        //--用户名
        'user' => 'root',
        //--表名前缀
        'table_pre' => 'p_',
        //--密码
        'pass' => 'root',
        //--编码
        'charset' => 'utf8',
    ],
];
