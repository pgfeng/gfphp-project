<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2017/3/24
 * Time: 21:23
 */

namespace App\Home;

use GFPHP\Controller;
/**
 * Class IndexController
 * @package app\Home
 */
class IndexController extends Controller
{
    /**
     * @return mixed|String
     */
    public function indexAction()
    {
        $this->assign('title', '欢迎您的使用!');

        $this->assign(array(
            'hello' => 'Hello Word!',
            'content' => 'GFPHP 简单,迅捷的PHP框架.',
        ));
        return $this->display();
    }
}