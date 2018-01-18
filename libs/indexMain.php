<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/5
 * Time: 15:11
 */

class indexMain
{
    public $s;   /*定义的是Smarty*/
    function  __construct()
    {
        $this->s=new Smarty();
        $this->s->setCompileDir(ROOT_PATH.'compile/');   /*定义编译目录路径*/
        $this->s->setTemplateDir(ROOT_PATH.'template/index/');
    }
}