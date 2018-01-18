<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/4
 * Time: 18:15
 */

class content extends admin
{
    public $str='';
    function init(){

    }
    function gettree($db,$pid=0,$n=1,$current=null){
        $arr=$db->selAll("*","pid=$pid");
//        var_dump($arr);
        $a=str_repeat('-',$n);
        if($arr){
            foreach ($arr as $item){
                if($current==$item['id']){
                    $this->str.="<option selected value='{$item['id']}'>{$a}{$item['name']}</option>";
                }else{
                    $this->str.="<option value='{$item['id']}'>{$a}{$item['name']}</option>";
                }
                $this->gettree($db,$item['id'],$n+2);
            }
        }
    }
    function add(){
        $db=new db('users');
        $this->gettree($db);
        $this->s->assign('str',$this->str);
        $this->s->display('content.html');
    }
    function addcontent(){
        $id=$_REQUEST['id'];
        $title=$_REQUEST['title'];
        $miao=$_REQUEST['miao'];
        $content=$_REQUEST['content1'];
        var_dump($content);
        $db=new db('cantent');
        $row=$db->add("title,miao,content,cid","'$title','$miao','$content',$id");
        if($row==1){
            $this->jump('插入成功','index.php?m=admin&f=content&a=add');
        }else{
            $this->jump('插入失败','index.php?m=admin&f=content&a=add');
        }
    }
}