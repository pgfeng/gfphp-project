<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2017/4/20
 * Time: 0:31
 */
include '../server.php';
\GFPHP\Router::all('.*','Home/Index@index');
\GFPHP\GFPHP::run();