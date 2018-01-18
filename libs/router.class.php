<?php
/**
 * Created by PhpStorm.
 * User: 57170
 * Date: 2017/12/29
 * Time: 11:04
 */

class router
{
    private $m;     /*模块*/
    private $f;     /*类文件*/
    private $a;     /*方法*/
    function getInfo(){
//      分别判断，是否传入值($_REQUEST['m'])，没有传入就给默认值，三元表达式
        $this->m=isset($_REQUEST['m'])? $_REQUEST['m']:'index';
        $this->f=isset($_REQUEST['f'])? $_REQUEST['f']:'index';
        $this->a=isset($_REQUEST['a'])? $_REQUEST['a']:'init';
        $path='module/'.$this->m;    /*组合模块路径*/
//      判断模块路径  modul/index     modul/admin
        if(is_dir($path)){
            /* 判断模块里面的类文件手否存在   modul/index/index.class.php*/
            $file=$path.'/'.$this->f.'.class.php';     /*组合文件路径*/
            if(is_file($file)){
                include_once $file;
                if(class_exists($this->f)){
                    $class=$this->f;    /*保存f方法*/
                    $c=new $class();    /*实例化这个方法*/
                    if(method_exists($c,$this->a)){
                        $fun=$this->a;
                        $c->$fun();
                    }else{
                        echo $this->a.'方法不存在';
                        exit();
                    }
                }else{
                    echo $this->f.'类不存在';
                    exit();
                }
            }else{
                echo $this->f.'.class.php文件不存在';
                exit();
            }
        }else{
            echo $this->m.'模块不存在';
            exit();
        }
    }
}
//$r=new router();
//$r->getInfo();