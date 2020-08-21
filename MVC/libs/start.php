<?php
header("content-type:text/html;charset=utf8");
if(!defined("MVC")){
    die("访问路径不合法");
}

//服务器所在的根路径
define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"]);
// 入口文件的路径
define("ENTRY_PATH",ROOT_PATH.$_SERVER["SCRIPT_NAME"]);
//框架所在的路径
define ("MAIN__PATH",dirname( ENTRY_PATH).DIRECTORY_SEPARATOR);
// 核心库所在的路径
define("LIBS_PATH",MAIN__PATH."libs".DIRECTORY_SEPARATOR);
//插件所在路径
define("PLU_PATH",MAIN__PATH."plugins".DIRECTORY_SEPARATOR);
//模板所在路径
define ("TPL_PATH",APP_NAME.DIRECTORY_SEPARATOR."template".DIRECTORY_SEPARATOR) ;

//编译文件所在目录
define("COMPILE_PATH",APP_NAME."compile".DIRECTORY_SEPARATOR);
//缓存文件所在目录
define("CACHE_PATH",APP_NAME."cache".DIRECTORY_SEPARATOR);
//以上定义的都是各种文件在本地的路径
//定义smarty的路径
define("SMARTY_PATH",LIBS_PATH ."smarty".DIRECTORY_SEPARATOR) ;

//以下定义通过http协议访问的路径
define("HOST_ADD","http://".$_SERVER["HTTP_HOST"]);
//单入口文件地址
define("ENTRY_ADD",HOST_ADD.$_SERVER["SCRIPT_NAME"]);
//框架入口地址
define("MAIN_ADD",dirname(HOST_ADD.$_SERVER["SCRIPT_NAME"]).DIRECTORY_SEPARATOR);
//当前应用的地址
define("APP_ADD",MAIN_ADD.APP_DIR_NAME.DIRECTORY_SEPARATOR) ;

//静态文件的地址
define("STATIC_ADD",APP_ADD."static".DIRECTORY_SEPARATOR) ;
//css的地址
define("CSS_ADD",APP_ADD."css".DIRECTORY_SEPARATOR);
//js的地址
define("JS_ADD",APP_ADD."js".DIRECTORY_SEPARATOR);
//img的地址
define("IMG_ADD",APP_ADD."img".DIRECTORY_SEPARATOR);
//font的地址
define("FONT_ADD",APP_ADD."font".DIRECTORY_SEPARATOR);

//路由的概念

//m v c


//index.php/模块/控制/动作
//include_once LIBS_PATH."engin.class.php";
include_once SMARTY_PATH."Smarty.class.php";
include_once LIBS_PATH."route.class.php";

$route=new \libs\route();
$route->run();


?>


