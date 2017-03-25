<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2017/3/25
 * Time: 17:47
 */

namespace model;


use GFPHP\Model;

class test extends Model
{
    public function test(){
        return $this->getOne();
    }
}