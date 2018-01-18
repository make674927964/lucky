<?php
/* Smarty version 3.1.30, created on 2018-01-16 05:39:09
  from "C:\Users\lenovo\Desktop\three\zhuang\template\admin\category.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5d8ffdcfb913_89027911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '546fbcbdaea41ce909a6f8b0cbbdccdfeeec65dc' => 
    array (
      0 => 'C:\\Users\\lenovo\\Desktop\\three\\zhuang\\template\\admin\\category.html',
      1 => 1515053104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5d8ffdcfb913_89027911 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<style>
    .panel-title{
        text-align: left;
    }
    button.btn{
        padding: 3px 5px;
    }
    tr td{
        text-align: center;
    }
    tr td{
        text-align: center;
        width:20%;
    }
    button.add{
        margin-left:35%;
        width:20%;
        padding:6px 8px;
        margin-bottom:20px;
    }
    #myhide{
        position: fixed;
        right: 0;
        left: 0;
        margin:auto;
        z-index: 999999;
        display: none;
        text-align: center;
        font-size: 18px;
    }
</style>
<body>
<div id="myhide" class="alert alert-success col-md-8" role="alert">...</div>
<div class="col-md-10">
    <!-- BASIC TABLE -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">分类管理</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <td>id</td>
                    <td>栏目名称</td>
                    <td>栏目图片</td>
                    <td>上级栏目</td>
                    <td>操作</td>
                </tr>
                </thead>
                <tbody>
                <?php echo $_smarty_tpl->tpl_vars['btr']->value;?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- END BASIC TABLE -->
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    $("body").on("click",".del",function(){
        var par=$(this).closest("tr");
        var id=par.attr("id");
        $.ajax({
            url:"",
            success:function (res) {
                if(res==="ok"){
                    $("#myhide").text("删除成功").slideDown().delay(1000).slideUp();
                    var t=setInterval(function () {
                        par.empty();
                    },2200);
                }else{
                    $("#myhide").text(res).removeClass("alert-success").addClass("alert-danger").slideDown().delay(1000).slideUp();
                }
            }
        });
    })
<?php echo '</script'; ?>
><?php }
}
