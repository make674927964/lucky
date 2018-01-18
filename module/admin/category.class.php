<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/3
 * Time: 15:58
 */

class category extends admin
{
    public $str='';
    public $btr='';
    function init(){
        $db=new db('users');
//        $arr=$db->selAll();
        $this->gettable($db);
//        echo $this->btr;
        $this->s->assign("btr",$this->btr);
        $this->s->display('category.html');
    }
    function gettable($db,$pid=0,$a=0){
        $arr=$db->selAll("*","pid=$pid");
        $a=str_repeat('-',$a);
//        var_dump($arr);
        if($arr){
            foreach ($arr as $item){
                $this->btr.="
                <tr>
                    <td>{$item['id']}</td>
                    <td>{$a}{$item['name']}</td>
                    <td>{$item['img']}</td>
                    <td>{$item['pid']}</td>
                    <td>
                        <a href='index.php?m=admin&f=category&a=del&id={$item['id']}'>
                            <button type=\"button\" class=\"btn btn-danger del\">删除</button>
                        </a>
                        <a href='index.php?m=admin&f=category&a=update&id={$item['id']}'>
                            <button type=\"button\" class=\"btn btn-info change\">修改</button>
                        </a>
                    </td>
                </tr>
                ";
                $this->gettable($db,$item['id'],$a+1);
            }
        }
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
//
//
    function addcategory(){
        $db=new db('users');
       $this->gettree($db);
       $this->s->assign('str',$this->str);
//       echo $this->str;
        $this->s->display('addcategory.html');
    }
    function add(){
        date_default_timezone_set('Asia/Shanghai');
        $pid=$_REQUEST['id'];
//        var_dump($pid);
        $title=$_REQUEST['name'];
        $curl=$_REQUEST['curl'];
//        var_dump($title);
        $arr=($_FILES['img']['size']['0'])?$_FILES['img']:'';
        $img=$_FILES['img'];
//        var_dump($arr);
//        exit;
        if($arr){

            $type=['image/png','image/gif','image/jpeg'];
            $size=1024*1024*1;
            $path='upload';
            $t=$arr['type'];
            foreach ($t as $item){
                if(!in_array($item,$type)){
                    $this->jump('请输入正确的图片格式','index.php?m=admin&f=category&a=addcategory');
                    exit;
                }
            }
            $s=$arr['size'];
            foreach ($s as $item){
                if($item>$size){
                    $this->jump('请输入图片大小','index.php?m=admin&f=category&a=addcategory');
                    exit;
                }
            }
            if(!is_dir($path)){
                mkdir($path);
            }
            $img='';
            $n=$arr['name'];
            foreach ($n as $key=>$item){
                $d=explode('.',$item)[1];
                $name=microtime(true).'.'.$d;
                if(is_uploaded_file($arr['tmp_name'][$key])){
                    $result=move_uploaded_file($arr['tmp_name'][$key],$path.'/'.$name);
                    $img.=WEB_PATH.$path.'/'.$name.'--';
                }
            }
            $img=mb_substr($img,0,strlen($img)-2);
        }else{
            $img='';
        }


        $db=new db('users');
        $row=$db->add("name,img,curl,pid","'$title','$img','$curl','$pid'");
        if($row==1){
            $this->jump('插入成功','index.php?m=admin&f=category&a=addcategory');
        }else{
            $this->jump('插入失败','index.php?m=admin&f=category&a=addcategory');
        }
    }

    function del(){
        $db=new db('users');
        $id=$_REQUEST['id'];
//        var_dump($id);
        $row=$db->del("id=$id");
        if($row==1){
            $this->jump('删除成功','index.php?m=admin&f=category');
        }else{
            $this->jump('删除失败','index.php?m=admin&f=category');
        }
    }
    function update(){
        $id=$_REQUEST['id'];
        $db=new db('users');
        $arr=$db->selOne('*',"id=$id");
//        var_dump($arr);
        $pid=$arr['pid'];
        $this->gettree($db,0,0,$pid);
        $this->s->assign('str',$this->str);
        $this->s->assign('arr',$arr);
        $this->s->display('updatecategory.html');
    }

}