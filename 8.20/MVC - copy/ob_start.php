<?php
////缓冲区
//ob_start();//开启缓冲区
//echo "我是输出到客户端的内容";
//$con=ob_get_contents();//获取即将要输出到客户端的静态的内容
//echo $con;
//ob_end_flush();//结束缓冲，并输出到客户端
////不指定ob_end_flush(); 缓冲区的内容将会在其他代码执行完之后，输出
////只要放在缓存区的内容，就是已经经过php解析，并且要返回给apache->客户端的内容，静态页面（html,caa,js）
//header("content-type:text/html;charset=utf8");

ob_start();
include_once "demo1.php";
$con=ob_get_contents();
file_put_contents("ob.html",$con);
