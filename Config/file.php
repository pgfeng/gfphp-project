<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/2
 * Time: 19:28
 */
return [
    'upload_path' => 'Upload/',
    //最大4MB
    'allow_size'  => 1024 * 1024 * 40000,

    /**
     * 允许上传的格式
     */
    'allow_type'  => [
        'png', 'jpg', 'jpeg', 'gif', 'bmp',
    ],
];