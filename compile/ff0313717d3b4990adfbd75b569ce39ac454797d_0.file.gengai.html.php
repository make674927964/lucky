<?php
/* Smarty version 3.1.30, created on 2018-01-16 05:39:08
  from "C:\Users\lenovo\Desktop\three\zhuang\template\admin\gengai.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5d8ffc816312_00350733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff0313717d3b4990adfbd75b569ce39ac454797d' => 
    array (
      0 => 'C:\\Users\\lenovo\\Desktop\\three\\zhuang\\template\\admin\\gengai.html',
      1 => 1515026735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5d8ffc816312_00350733 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="panel-heading">
    <h3 class="panel-title">admin</h3>
</div>
<div id="wo">ok</div>
<form class="form-horizontal" id="gai">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">账号</label>
        <div class="col-sm-10">
            <input type="text" name="user" vlaue="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" class="form-control" id="inputEmail3" placeholder="请输入账号">
            <!--            <div class="box"></div>-->
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password"  name="pass" class="form-control" id="inputPassword3" placeholder="请输入6-10位数">
            <!--            <div class="box"></div>-->
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">再次输入密码</label>
        <div class="col-sm-10">
            <input type="password" name="passwor" class="form-control" id="inputPassword4" placeholder="请输入6-10位数">
            <!--            <div class="box"></div>-->
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">提交</button>
        </div>
    </div>
</form>
</body>
<style>
    #wo{
        width: 300px;
        height: 150px;
        border-radius: 10px;
        background: rgba(0,0,0,0.7);
        font-size: 32px;
        color: red;
        text-align: center;
        line-height: 150px;
        position: absolute;
        left: 50%;
        margin-left: -150px;
        top:30px;
        z-index: 999;
        display: none;
    }

    form{
        width: 220px;
        height: 250px;
        background: #0f91f5;
        padding: 50px;
    }
    input{
        width: 200px;
        height: 30px;
    }
</style>
</html>
<?php echo '<script'; ?>
>
    console.log($("form"))
    $("form").validate({
        rules:{
            user:{
                required:true,         //输入框不能为空
                rangelength:[5,10],    //数据长度
            },
            pass:{
                required:true,
                rangelength:[3,10],
            },
            passwor:{
                required:true,
                equalTo: "#inputPassword3",
            }
        },

        submitHandler:function(){
            $.ajax({
                url:"index.php?m=admin&a=update",
                data:$("#gai").serialize(),
                type:"post",
                success:function (text) {
                    $("#wo").html(text).show(200).delay(2000).hide(200);
                }
            })
        }

    });

<?php echo '</script'; ?>
>
<?php }
}
