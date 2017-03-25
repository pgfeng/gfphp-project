<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2017/3/24
 * Time: 21:23
 */

namespace app\Home;


use GFPHP\Controller;

class Index extends Controller
{
    /**
     *
     */
    public function index($category_id = 0,$id=0){
        var_dump($category_id);
        var_dump($id);
        echo 'isController';
    }
}