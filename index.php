<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2017/3/24
 * Time: 20:14
 */
use Psr\Log\NullLogger;

include 'vendor/autoload.php';
GFPHP\GFPHP::init('app');

GFPHP\GFPHP::run();
