<?php

/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2017/4/6
 * Time: 16:30
 */
include 'D:\works/G-freamwork/vendor/autoload.php';
class GFPHPTest extends \PHPUnit\Framework\TestCase
{
    public function testA(){

        \GFPHP\Router::init();
    }
}