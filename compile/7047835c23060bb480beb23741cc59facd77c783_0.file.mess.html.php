<?php
/* Smarty version 3.1.30, created on 2018-01-18 02:50:03
  from "C:\Users\lenovo\Desktop\three\zhuang\template\admin\mess.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a600b5b848536_56931256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7047835c23060bb480beb23741cc59facd77c783' => 
    array (
      0 => 'C:\\Users\\lenovo\\Desktop\\three\\zhuang\\template\\admin\\mess.html',
      1 => 1516243758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a600b5b848536_56931256 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
</head>
<style>
    .box{
        width:600px;
        height:400px;
        position: fixed;
        left:0;
        top:0;
        right:0;
        bottom: 0;
        margin:auto;
        box-shadow: 0 0 30px rgba(0,0,0,0.3);
    }
    p{
        text-align: center;
        font-size: 20px;
    }
    p.h{
        font-size: 40px;
        height:200px;
        line-height: 200px;
        margin-bottom: 20px;
        background:rgba(99, 156, 185, 0.92);
        color: #fff;
    }
    p > span{
        color: red;
        font-size: 24px;
    }
</style>
<body>
    <div class="box">
        <p class="h" >
          <?php echo $_smarty_tpl->tpl_vars['mess']->value;?>

        </p>
        <p class="text-muted">
            <span>3</span>秒钟之后，自动跳转，<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">点击立即跳转</a>
        </p>
    </div>
</body>
</html>
<?php echo '<script'; ?>
>
    let s=3;
    let span=document.querySelector('p > span');
    let a=span.nextElementSibling;
    function change() {
        s--;
        span.innerHTML=s;
        if(s==0){
            location.href=a.href;
        }
    }
    let t=setInterval(change,1000);
<?php echo '</script'; ?>
><?php }
}
