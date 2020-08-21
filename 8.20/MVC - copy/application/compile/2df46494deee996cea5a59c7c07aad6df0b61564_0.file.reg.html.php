<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-21 01:05:44
  from 'E:\Wampservicer\www\server\8.20\MVC - copy\application\template\admin\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3f1de8261a80_50815069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2df46494deee996cea5a59c7c07aad6df0b61564' => 
    array (
      0 => 'E:\\Wampservicer\\www\\server\\8.20\\MVC - copy\\application\\template\\admin\\reg.html',
      1 => 1597971942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3f1de8261a80_50815069 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin.js"><?php echo '</script'; ?>
>
</head>
<body>
<form class="form-horizontal" action="addUser" method="post">
    <h1>注册页</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="密码" name="pass">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword4" class="col-sm-2 control-label">再次输入密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword4" placeholder="再次输入密码" name="pass1">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">注册</button>
            &nbsp;&nbsp;已有账号？请
            <a href="/server/8.20/MVC%20-%20copy/index.php/admin" class="btn btn-default">登录</a>
        </div>
    </div>
</form>
</body>
</html><?php }
}
