<?php
/* Smarty version 3.1.30, created on 2018-01-18 03:49:24
  from "C:\Users\lenovo\Desktop\three\zhuang\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6019442d1b04_29122469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03fe41d14dd0d8d47755e4d0d0bfca3383d424a2' => 
    array (
      0 => 'C:\\Users\\lenovo\\Desktop\\three\\zhuang\\template\\admin\\main.html',
      1 => 1516247362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6019442d1b04_29122469 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>myblog-admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
style.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
main.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!--    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
font-awesome.min.css">-->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
linearicons/style.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
klorofil-common.js"><?php echo '</script'; ?>
>
</head>
<style>
    body,html{
        width:100%;
        height:100%;
    }
    #wrapper{
        width:100%;
        height:100%;
        overflow: hidden;
    }
    .myframe{
        width: 100%;
        height:100%;
        overflow: hidden;
    }
    /*.main-content*/
    iframe{
        /*background: rgba(0,0,0,.4);*/
        background: #fff;
        opacity: 0.94;
    }
</style>
<body>
<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
            <a href="index.php">
                <img src="<?php echo IMG_PATH;?>
logo-dark.png" alt="Klorofil Logo" class="img-responsive logo">
            </a>
        </div>
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth">
                    <i class="lnr lnr-arrow-left-circle"></i>
                </button>
            </div>
            <div style="margin-left:20px" class="navbar-btn navbar-btn-right">
                <a class="btn btn-success update-pro" href="index.php?m=admin&a=exits" title="Upgrade to Pro" target="_blank">
                    <i class="fa fa-rocket"></i>
                    <span>退出</span>
                </a>
            </div>
            <div class="navbar-btn navbar-btn-right">
                <h2 style="padding:0;margin:0;"> 欢迎登录！<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h2>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <!--<li>-->
                        <!--<a href="index.php?m=admin&a=main" class="active">-->
                            <!--<i class="lnr lnr-home"></i>-->
                            <!--<span>首页</span>-->
                        <!--</a>-->
                    <!--</li>-->

                    <li>
                        <a href="index.php?m=admin&f=xw&a=add" target="content" class="">
                            <i class="lnr lnr-code"></i>
                            <span>新闻管理</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?m=admin&f=category" target="content" class="">
                            <i class="lnr lnr-chart-bars"></i>
                            <span>导航管理</span>
                        </a>
                    </li>
                    <!--<li>-->
                        <!--<a href="index.php?m=admin&f=category&a=addcategory" target="content" class="">-->
                            <!--<i class="lnr lnr-cog"></i>-->
                            <!--<span>添加栏目</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#subPages" data-toggle="collapse" class="collapsed">-->
                            <!--<i class="lnr lnr-file-empty"></i>-->
                            <!--<span>内容管理</span>-->
                            <!--<i class="icon-submenu lnr lnr-chevron-left"></i>-->
                        <!--</a>-->
                        <!--<div id="subPages" class="collapse ">-->
                            <!--<ul class="nav">-->
                                <!--<li>-->
                                    <!--<a href="index.php?m=admin&f=xw&a=add" target="content" class="">新闻管理</a>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<a href="index.php?m=admin&f=content&a=add" target="content" class="">添加内容</a>-->
                                <!--</li>-->
                            <!--</ul>-->
                        <!--</div>-->
                    <!--</li>-->
                    <!--<li>   <a href="index.php?m=admin&f=xw&a=add" target="content" class="">新闻管理</a></li>-->
                    <!--<li><a href="php/AddImage.php" class="" target="content1"><i class="lnr lnr-text-format"></i> <span>添加图片</span></a></li>-->
                    <!--<li>-->
                        <!--<a href="#img" data-toggle="collapse" class="collapsed">-->
                            <!--<i class="lnr lnr-dice"></i>-->
                            <!--<span>图片</span>-->
                            <!--<i class="icon-submenu lnr lnr-chevron-left"></i>-->
                        <!--</a>-->
                        <!--<div id="img" class="collapse ">-->
                            <!--<ul class="nav">-->
                                <!--<li>-->
                                    <!--<a href="img.php" target="content" class="">图片管理</a>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<a href="addimg.php" target="content" class="">添加图片</a>-->
                                <!--</li>-->
                            <!--</ul>-->
                        <!--</div>-->
                    <!--</li>-->
                </ul>
            </nav>
        </div>
    </div>
    <div class="main" style="height:100%;">
        <div class="main-content" style="height:100%;">
            <div class="container-fluid"   style="height:100%">
                <iframe src="" frameborder="0" class="myframe" name="content"></iframe>
            </div>
        </div>
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
</div>

</body>
</html><?php }
}
