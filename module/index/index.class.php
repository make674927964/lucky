<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/5
 * Time: 16:17
 */
class index extends indexMain{
    function init(){
////        使用数据库
//        $db=new db('users');
////        var_dump($db);
////        获取数据库一级标题数据
//        $arr=$db->selAll('*','pid=0');
//        $a=array();
////        var_dump($arr);
//        foreach ($arr as $v){
//            $brr=$db->selAll('*',"pid={$v['id']}");
//            $v['text']=$brr;
//            array_push($a,$v);
//        }
//        $this->s->assign('a',$a);
        $this->fen();
        $this->s->display('index.html');
    }
    function fen(){
        $db=new db('users');
        $arr=$db->selAll('*','pid=0');
        $a=array();
        foreach ($arr as $v){
            $brr=$db->selAll('*',"pid={$v['id']}");
            $v['text']=$brr;
            array_push($a,$v);
        }
        $this->s->assign('a',$a);
        $db->close();
    }
    function  guanyu(){
        $this->fen();
        $db=new db('users');
        $id=$_REQUEST['id'];
//        var_dump($id);
        $row=$db->selOne('*',"id=$id");
        $this->s->assign('row',$row);
        $this->s->display('guanyu.html');
    }
    function  xinwen(){
        $this->fen();
        $db=new db('users');
        $id=$_REQUEST['id'];
        $row=$db->selOne('*',"id=$id");
        $this->s->assign('row',$row);

        $db->close();

        $db=new db('cantent');
        $sow = $db->selAll('*', "cid=$id");
//        var_dump($sow);
        $this->s->assign('sow',$sow);

        $this->s->display('xinwen.html');
    }
    function xw(){
        $this->fen();
        $db=new db('users');
        $id=$_REQUEST['id'];
        $row=$db->selOne('*',"id=$id");
        $this->s->assign('row',$row);
        $db->close();


        $db=new db('cantent');
        $id=$_REQUEST['id'];
//        var_dump('$id');
        $sow=$db->selOne('*',"id=$id");
//        var_dump($row);
        $this->s->assign('sow',$sow);
        $this->s->display('xw.html');
    }
    function  zhanshi(){
        $this->fen();
        $db=new db('users');
        $id=$_REQUEST['id'];
        $row=$db->selOne('*',"id=$id");
        $this->s->assign('row',$row);
        $db->close();

        $db=new db('cantent');
        $sow = $db->selAll('*', "cid=$id");
//        var_dump($sow);
        $this->s->assign('sow',$sow);


        $this->s->display('zhanshi.html');
    }
    function xiangmux(){
        $this->fen();
        $db=new db('users');
        $id=$_REQUEST['id'];
        $row=$db->selOne('*',"id=$id");
        $this->s->assign('row',$row);
        $db->close();


        $db=new db('cantent');
        $id=$_REQUEST['id'];
//        var_dump('$id');
        $sow=$db->selOne('*',"id=$id");
//        var_dump($row);
        $this->s->assign('sow',$sow);
        $this->s->display('xiangmux.html');
    }
    function  wenhua(){
        $this->fen();
        $db=new db('users');
        $id=$_REQUEST['id'];
        $row=$db->selOne('*',"id=$id");
        $this->s->assign('row',$row);
        $this->s->display('wenhua.html');
    }
    function  rli(){
        $this->fen();
        $db=new db('users');
        $id=$_REQUEST['id'];
        $row=$db->selOne('*',"id=$id");
        $this->s->assign('row',$row);
        $db->close();


        $db=new db('cantent');
        $sow = $db->selAll('*', "cid=$id");
//        var_dump($sow);
        $this->s->assign('sow',$sow);



        $this->s->display('rli.html');
    }
    function  lianxi(){
        $this->fen();
        $db=new db('users');
        $id=$_REQUEST['id'];
        $row=$db->selOne('*',"id=$id");
        $this->s->assign('row',$row);
        $this->s->display('lianxi.html');
    }

}