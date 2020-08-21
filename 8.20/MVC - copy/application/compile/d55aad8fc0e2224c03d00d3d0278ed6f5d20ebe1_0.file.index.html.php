<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 00:43:07
  from 'E:\Wampservicer\www\server\MVC\application\template\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3dc71b229675_25035478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd55aad8fc0e2224c03d00d3d0278ed6f5d20ebe1' => 
    array (
      0 => 'E:\\Wampservicer\\www\\server\\MVC\\application\\template\\index.html',
      1 => 1597852257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3dc71b229675_25035478 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--

确实能够让前后台分离开，但是运行效率不高，但是开发效率高了但是同时造成了我们程序运行效率的下降，多执行了5步

1.载入原内容
2。正则替换原内容
3.写入compile里面
4.分配变量
5.载入进来

编译文件刚开始是不存在的，但是只要当我们程序运行，编译文件就会生成，
编译文件不存在，生成编译文件，编译文件存在一>运行

php能获取文件的创建时间和修改时间吗
能继续提高程序的运行效率吗?
模板引擎的解析- >自己写的模板引擎
html文件->不解析的，直接返回客户端了
php文件-> (php模块)解析成html->客户端

html
php缓冲区，作用，方便
-->

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
<ul>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["sex"];?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["age"];?>
</li>
    <li><a href="index.php/index/index/del">删除</a></li>
</ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<a href="index.php/teach/log/add">
    添加日报
</a>
</body>
</html><?php }
}
