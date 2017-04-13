<?php
include 'vendor/autoload.php';
\GFPHP\GFPHP::init('App');
\GFPHP\Router::GET('Page-(.*?).html','Home/index@page');
\GFPHP\Router::all('1-(.+).html', 'Home/Index@index');
\GFPHP\GFPHP::run();