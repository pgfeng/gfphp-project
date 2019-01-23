<?php

return array(

    //-- Default Cache Space
    'default_space' => 'public',

    //======= CACHE DRIVER CONFIG START =====//                                             可以参考drivers下的缓存驱动

//    'driver' => \GFPHP\Cache\memcached::class,
//    'driver' => \GFPHP\Cache\DB::class,
//
    'driver' => \GFPHP\Cache\File::class,
//    'driver' => \GFPHP\Cache\redis::class,

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
    'create' => '1',
    //=======   DB CONFIG OVER  =======//


    //========== redis CONFIG START =======//
    //-- redis host
    'redis_host' => '127.0.0.1',

    //-- redis port
    'redis_port' => '6379',
    //=======   redis CONFIG OVER  =======//
);