<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2017/4/20
 * Time: 0:31
 */

use GFPHP\GFPHP;
//ini_set('display_errors','on');
include '../server.php';
try {
    GFPHP::run();
} catch (Exception $e) {
    dump($e);
}