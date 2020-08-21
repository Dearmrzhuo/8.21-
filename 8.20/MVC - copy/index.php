<?php

header("content-type:text/html;charset=utf8");
define("MVC",true);  //记录一个口令 单入口只能从这进
//应用文件夹  PHP
define("APP_DIR_NAME","application");
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME.DIRECTORY_SEPARATOR);

//echo __DIR__;  //获取当前程序运行的目录  本地文件夹地址
//echo __FILE__;  //获取当前运行的程序文件  本地文件地址
//__CLASS__   获取当前类的名字
//__METHOD__  输出当前函数的名字
//__LINE__   当前程序所在的行
//DIRECTORY_SEPARATOR  当前系统中所用的斜杠


require_once "libs/start.php";

