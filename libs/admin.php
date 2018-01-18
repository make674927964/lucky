<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/3
 * Time: 15:54
 */

class admin
{
    public $s;   /*定义的是Smarty*/
    function __construct()
    {
        $this->s=new Smarty();
        $this->s->setCompileDir(ROOT_PATH.'compile/');   /*定义编译目录路径*/
        $this->s->setTemplateDir(ROOT_PATH.'template/admin/');
    }
    function jump($mess,$url){
        $this->s->assign('mess',$mess);
        $this->s->assign('url',$url);
        $this->s->display('mess.html');
    }
}