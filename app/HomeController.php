<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2017/3/25
 * Time: 1:35
 */

namespace app;


use GFPHP\Controller;

/**
 * Class HomeController
 * @package app
 */
class HomeController extends Controller
{
    protected $layout = false;
    public function indexAction(){
        $this->Assign('title','欢迎您的使用!');
        $this->Assign(array(
            'hello' =>'Hello Word!',
            'content' => 'GFPHP 简单,迅捷的PHP框架.',
        ));
        return $this->Display();
    }
}