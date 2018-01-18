<?php
/* Smarty version 3.1.30, created on 2018-01-16 04:00:26
  from "C:\Users\lenovo\Desktop\three\zhuang\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5d78da143928_93595607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8bc2a285134127a4153ebc56108b277475c1d08' => 
    array (
      0 => 'C:\\Users\\lenovo\\Desktop\\three\\zhuang\\template\\admin\\login.html',
      1 => 1514946978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5d78da143928_93595607 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
main.css">
</head>
<style>
    .loginpage {
        position: absolute;
        width:100%;
        height:100%;
    }
    .form-group{
        height: 40px;
    }
    .my-img{
        position: relative;
    }
    .my-img input{
        width: 60%;
    }
    .my-img img{
        display: block;
        position: absolute;
        top:0;
        right: 0;
    }
    .my-img img:hover{
        cursor:pointer;
    }
</style>
<body class="loginpage">
<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                <div class="left">
                    <div class="content">
                        <div class="header">
                            <!--<div class="logo text-center">个人博客管理系统</div>-->
                            <p class="lead">企业站后台</p>
                        </div>
                        <form class="form-auth-small" action="index.php?m=admin&a=check" method="post">
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="text" name="user" autocomplete="off" class="form-control" id="signin-email"
                                       placeholder="请您输入账号">
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only" >Password</label>
                                <input type="password" name="pass"  autocomplete="off" class="form-control"
                                       id="signin-password" placeholder="请输入密码">
                            </div>
                            <div class="form-group my-img">
                                <label for="signin-password" class="control-label sr-only" >Password</label>
                                <input type="text" name="code"  autocomplete="off" class="form-control"
                                       id="signin-code" placeholder="请输入验证码" required>
                                <img src="index.php?m=admin&a=code" title="点击更换验证码"
                                     onclick="this.src='index.php?m=admin&a=code&'+Math.random()">
                            </div>
                            <!--<div class="form-group clearfix"></div>-->
                            <button type="submit" class="btn btn-primary btn-lg btn-block">登陆</button>
                            <div class="bottom"></div>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="overlay"></div>
                    <div class="content text">
                        <h1 class="heading">欢迎登录企业后台</h1>
                        <p>工程师管理后台</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

</body>
</html><?php }
}
