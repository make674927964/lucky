<?php

header('content-type:text/html;charset=utf8');      /*放乱码*/


//http://www.baidu.com    定义网络路径
//var_dump($_SERVER);   /* 查看localhost*/
$str=substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],'/'));
define("WEB_PATH","http://".$_SERVER['HTTP_HOST'].$str.'/');
//var_dump(WEB_PATH);


//本地路径
//var_dump(__DIR__);   /*文件根目录*/
define("ROOT_PATH",__DIR__.'/');
define('LIBS_PATH',ROOT_PATH.'libs/');     /*路径定义为常量*/
define("JS_PATH",WEB_PATH."src/js/");
define("SRC_PATH",WEB_PATH."src/");
define("IMG_PATH",WEB_PATH."src/img/");
define("CSS_PATH",WEB_PATH."src/css/");
define("ICONFONT_PATH",WEB_PATH."src/iconfont/");
//var_dump(CSS_PATH);


include_once LIBS_PATH.'router.class.php';
require_once LIBS_PATH.'code.class.php';
require_once LIBS_PATH.'db.class.php';
require_once LIBS_PATH.'session.class.php';
require_once LIBS_PATH.'admin.php';
require_once LIBS_PATH.'indexMain.php';

include_once LIBS_PATH.'smarty/Smarty.class.php';
//var_dump(include_once LIBS_PATH.'smarty/Smarty.class.php');
//实例化路由  实现路由方法
$r=new router();
$r->getInfo();
