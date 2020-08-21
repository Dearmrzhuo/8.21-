<?php
class reg{
    function add(){
        $smarty=new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);

        $smarty->display("admin/reg.html");
    }
    //工作  没有这种工作场景
    function addUser(){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $pass1=$_POST["pass1"];
        if ($pass!==$pass1){
            echo "密码不一致";
            return;
        }

        //链接数据库
        $db=new mysqli("localhost","root","123","wui2006");
        if (mysqli_connect_error()){
            die("数据库连接错误");
        }
        $db->query("set names utf8");
        $db->query("insert into mvc_user (uname,pass) VALUES ('$uname','$pass')");

        if ($db->affected_rows>0){
            echo "插入成功";
        }
    }
}