<?php
/* Smarty version 3.1.30, created on 2018-01-16 10:20:17
  from "C:\Users\lenovo\Desktop\three\zhuang\template\admin\content.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5dd1e1a57921_19660948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bc1c79e46ffaa1fada22f0340b605785797106e' => 
    array (
      0 => 'C:\\Users\\lenovo\\Desktop\\three\\zhuang\\template\\admin\\content.html',
      1 => 1516098012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5dd1e1a57921_19660948 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>-->
    <link rel="stylesheet" href="<?php echo SRC_PATH;?>
kindeditor/themes/default/default.css" />
    <link rel="stylesheet" href="<?php echo SRC_PATH;?>
kindeditor/plugins/code/prettify.css" />
    <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo SRC_PATH;?>
kindeditor/kindeditor-all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo SRC_PATH;?>
kindeditor/lang/zh-CN.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo SRC_PATH;?>
kindeditor/plugins/code/prettify.js"><?php echo '</script'; ?>
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
<?php echo '<script'; ?>
>
    KindEditor.ready(function(K) {
        var editor1 = K.create('textarea[name="content1"]', {
            cssPath : '<?php echo SRC_PATH;?>
kindeditor/plugins/code/prettify.css',
            uploadJson : '<?php echo SRC_PATH;?>
kindeditor/php/upload_json.php',
            fileManagerJson : '<?php echo SRC_PATH;?>
kindeditor/php/file_manager_json.php',
            allowFileManager : true,
            afterCreate : function() {
                var self = this;
                K.ctrl(document, 13, function() {
                    self.sync();
                    K('form[name=example]')[0].submit();
                });
                K.ctrl(self.edit.doc, 13, function() {
                    self.sync();
                    K('form[name=example]')[0].submit();
                });
            }
        });
        prettyPrint();
    });
<?php echo '</script'; ?>
>
<body>
<div class="panel-heading">
    <h3 class="panel-title">内容管理</h3>
</div>
<div id="myhide" class="alert alert-success col-md-8" role="alert">...</div>
<form id="myform" action="index.php?m=admin&f=content&a=addcontent&id=$curl" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <label for="select">请选择栏目</label>
        <select class="form-control" name="id" id="select">
            <!--<option value="0">作为一级栏目存在</option>-->
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

        </select>
    </div>
    <div class="form-group col-md-8">
        <label for="title">内容标题</label>
        <input type="text" class="form-control" name="title"  id="title" placeholder="请输入内容">
    </div>
    <div class="form-group col-md-8">
    <label for="title">内容</label>
        <textarea name="miao" id="se" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-8">
    <label for="title">内容图片</label>
        <textarea name="content1" class="content" style="width:700px;height:200px;visibility:hidden;"></textarea>
    </div>

    <div class="form-group div-btn col-md-10">
        <button class="btn btn-success go">添加</button>
    </div>
</form>
</body>
</html><?php }
}
