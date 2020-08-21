<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-21 01:57:41
  from 'E:\Wampservicer\www\server\8.20\MVC - copy\application\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3f2a156e4302_83360685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2126453762b3767e17cd0164639989cbab55ae30' => 
    array (
      0 => 'E:\\Wampservicer\\www\\server\\8.20\\MVC - copy\\application\\template\\admin\\login.html',
      1 => 1597974961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3f2a156e4302_83360685 (Smarty_Internal_Template $_smarty_tpl) {
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
<form class="form-horizontal" action="/server/8.20/MVC%20-%20copy/index.php/admin/index/login" method="post">
    <h1>欢迎来到XX后台管理中心</h1>
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
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 记住密码
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">登录</button>
            &nbsp;&nbsp;没有账号？请
            <a href="/server/8.20/MVC%20-%20copy/application/template/admin/reg.html" class="btn btn-default">注册</a>
        </div>
    </div>
</form>
</body>
</html><?php }
}
