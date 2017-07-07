<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2017/5/4
 * Time: 13:22
 */
\GFPHP\Router::all('index.html','Home/Index@index');
\GFPHP\Router::all('favicon.ico',function (){
    return '';
});