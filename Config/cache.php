<?php

return array(

    //-- Default Cache Space
    'default_space' => 'public',

    //-- default lifetime

    'lifetime'      => '0',       //过期设置为一个小时，过期后自动清除

    //======= CACHE DRIVER CONFIG START =====//                                             可以参考drivers下的缓存方法

    'driver' => 'memcacheDriver',           //目前不可以将SESSION存放，原因不明
    'driver' => 'dbCache',

    'driver' => 'fileCache',

    //======= CACHE DRIVER CONFIG OVER  =====//



    //======= FILESYSTEM CONFIG START =======//

    'cache_dir' => 'runtime/cache',

    //======= FILESYSTEM CONFIG OVER  =======//


    //======= MEMCACHED CONFIG START  =====//

    'memcached_host' => '127.0.0.1',
    'memcached_port' => '11211',

    //=======  MEMCACHED CONFIG OVER  =====//







    //========== DB CONFIG START =======//
    //-- cache table
    'table' => 'caches',

    //-- cache table create status
    'create'=>'1'
    //=======   DB CONFIG OVER  =======//
);
