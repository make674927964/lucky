<?php
/**
 * Created by PhpStorm.
 * User: 57170
 * Date: 2018/1/2
 * Time: 10:33
 */

class index extends admin
{


    function init(){
//        模板引擎及性能页面呈现
       $this->s->display('login.html');
    }
    function code(){
//        var_dump(123456);
        $c=new code();
        $c->output();
    }
//    封装跳转页面  jump
    function jump($mess,$url){
        $this->s->assign('mess',$mess);
        $this->s->assign('url',$url);
        $this->s->display('mess.html');
    }
    function check(){
        $sess=new session();
        $user=$_REQUEST['user'];
        $pass=$_REQUEST['pass'];
        $code=$_REQUEST['code'];
//        var_dump($code);
        if(strtoupper($code)===strtoupper($sess->get('code'))){
            $db=new db('user');
            $row=$db->selOne('*',"zhanghao='$user'");
            if($row){
                $sess->set('user',$user);
                if($row['pass']===$pass){
                    $this->jump('登录成功','index.php?m=admin&a=main');
                }else{
                    $this->jump('密码错误','admin.php');
                }
            }else{
                $this->jump('账号不存在','admin.php');
            }
        }else{
            $this->jump('验证码错误','admin.php');
        }
        $db->close();
    }
    function main(){
        $sess=new session();
        if($sess->get('user')){
            $this->s->assign('user',$sess->get('user'));
            $this->s->display('main.html');
        }else{
            $this->jump('请先登录','admin.php');
        }
    }
    function exits(){
        $sess=new session();
        $sess->del('user');
        $sess->del('code');
        $this->jump('退出成功','admin.php');
    }
    function changepass(){
        $sess=new session();
        $this->s->assign('user',$sess->get('user'));
        $this->s->display('gengai.html');
    }
    function update(){
        $user=$_POST["user"];
        $pass=$_POST["pass"];
        $db=new db('user');
        $rows=$db->update("pass='$pass'","zhanghao='$user'");
        if($rows===1){
            echo "修改成功";
        }else{
            echo "更改失败";
        }
    }


}