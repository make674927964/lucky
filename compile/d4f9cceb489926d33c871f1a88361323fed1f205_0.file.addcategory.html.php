<?php
/* Smarty version 3.1.30, created on 2018-01-16 05:39:11
  from "C:\Users\lenovo\Desktop\three\zhuang\template\admin\addcategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5d8fff47ab79_00749463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f9cceb489926d33c871f1a88361323fed1f205' => 
    array (
      0 => 'C:\\Users\\lenovo\\Desktop\\three\\zhuang\\template\\admin\\addcategory.html',
      1 => 1515209918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5d8fff47ab79_00749463 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<style>
    #myform{
        margin-top:5%;
        margin-left:5%;
    }
    #myhide{
        position: fixed;
        top: 0;
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
<div class="panel-heading">
    <h3 class="panel-title">添加栏目</h3>
</div>
<div id="myhide" class="alert alert-success col-md-8" role="alert">...</div>
<form id="myform" action="index.php?m=admin&f=category&a=add" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <label for="select">请选择上级栏目</label>
        <select class="form-control" name="id" id="select">
            <option value="0">作为一级栏目存在</option>
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

        </select>
    </div>
    <div class="form-group col-md-8">
        <label for="title">栏目名称</label>
        <input type="text" class="form-control" name="name"  id="title" placeholder="请输入内容">
    </div>
    <div class="form-group col-md-8">
        <label for="title">栏目地址</label>
        <input type="text" class="form-control" name="curl"  id="curl" placeholder="请输入栏目地址">
    </div>
    <div class="form-group col-md-8">
        <label for="file">栏目图片</label>
        <input type="file" name="img[]" id="file" multiple>
    </div>
    <div class="form-group div-btn col-md-10">
        <button class="btn btn-success go">添加</button>
    </div>
</form>
</body>
</html>
<?php }
}
