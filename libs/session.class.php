<?php
/**
 * Created by PhpStorm.
 * User: 57170
 * Date: 2018/1/2
 * Time: 10:02
 */

class session
{
    public function __construct()
    {
        session_start();
    }
    public function set($key,$value){
        $_SESSION[$key]=$value;
    }
    public function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return false;
        }
    }
    public function del($key){
        unset($_SESSION[$key]);
    }
}
//$s=new session();
//$s->set('aa','bb');
////$s->del('aa');
//echo $s->get('aa');