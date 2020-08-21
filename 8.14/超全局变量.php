<?php

//超全局变量  在任何地方都可以访问

//$_GET   $_POST    $_REQUEST $_SERVER $_ENT $_FILES $_COOKIE   $_SESSION
//$_GET   $_POST    $_REQUEST   接收客户端的请求信息

//get传递的数据较少  1024   不安全   但是get速度较快
//post传递的数据没有限制   安全  但是速度稍慢

//$GLOBALS — 引用全局作用域中可用的全部变量

//$_SERVER 这种超全局变量保存关于报头、路径和脚本位置的信息。

//echo $_SERVER['PHP_SELF'];
//echo "<br>";
//echo $_SERVER['SERVER_NAME'];
//echo "<br>";
//echo $_SERVER['HTTP_HOST'];
//echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
//echo "<br>";
//echo $_SERVER['HTTP_USER_AGENT'];
//echo "<br>";
//echo $_SERVER['SCRIPT_NAME'];

// $_REQUEST 用于收集 HTML 表单提交的数据。

//$_POST 广泛用于收集提交 method="post" 的 HTML 表单后的表单数据。$_POST 也常用于传递变量。

// $_GET 也可用于收集提交 HTML 表单 (method="get") 之后的表单数据。 $_GET也可以收集URL中的发送的数据

//