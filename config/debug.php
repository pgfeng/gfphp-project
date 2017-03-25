<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2016/7/13
 * Time: 9:04
 */

return [
    'debug'          => TRUE,
    //==如果为false则不会跳转,否则将会跳转到设置的URL
    'error_redirect' => FALSE,
    'log'             => TRUE,
    'app_listen_error'   => [
        E_WARNING,
        E_PARSE,
        E_ERROR,
//        E_NOTICE,
//        E_CORE_ERROR,
//        E_CORE_WARNING,
    //    E_COMPILE_ERROR,
    //    E_COMPILE_WARNING,
    //    E_USER_ERROR,
    //    E_USER_WARNING,
    //    E_USER_NOTICE,
    //    E_STRICT,
    ],
    'password'  => '592472116'
];