<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2017/3/25
 * Time: 17:47
 */

namespace model;


use GFPHP\Model;

/**
 * Class testModel
 * @package model
 */
class testModel extends Model
{
    public function test(){
        return $this->getOne();
    }
}