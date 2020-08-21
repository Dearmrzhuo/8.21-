<?php
if (!defined("MVC")){
    die("非法入侵");
}
class index {
    function int(){
        $smarty=new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);

        $smarty->display("admin/login.html");

    }
    function  login(){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];

        $db=new mysqli("localhost","root","123","wui2006");
        if (mysqli_connect_error()){
            die("数据库连接错误");
        }
        $db->query("set names utf8");


        $result=$db->query("select * form mvc_user where uname='{$uname}' and pass='{$pass}' ");

        if($result->num_rows<1){
            echo "没有相应的数据，请重新登录";
        }else{
            header("/server/8.20/MVC%20-%20copy/index.php/admin/index/first");
        }

        function first(){
            echo "后台首页";
        }
    }

}