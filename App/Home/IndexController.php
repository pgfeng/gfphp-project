<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2017/3/24
 * Time: 21:23
 */

namespace App\Home;


use GFPHP\Config;
use GFPHP\Controller;

/**
 * Class IndexController
 * @package app\Home
 */
class IndexController extends Controller
{
    /**
     *
     */
    public function indexAction(){
        return $this->Display();
    }
}