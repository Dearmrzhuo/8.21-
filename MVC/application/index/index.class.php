<?php
class index{
    function int(){
        $smarty=new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);


        //从数据库里面读取  数据库 关系型数据库MySQL oracal SQLserver serverlite 去o化 非关系型数据库 mongodb redis 非结构化 数据仓库(分布式数据库) hive hbase

        //结构化数据  有逻辑有关系  非结构化数据

        //php如何操作数据库 php和数据库的关系

        //1.过程化的  废弃  2. 对象的方式访问  3.pdo
        //2.

        //1.连接上数据库
        $db=@new mysqli("localhost","root","123","wui2006","3306");

        //不希望用户看到数据库连接失败的具体信息
        if(mysqli_connect_error()){
            die("数据库连接错误");
        }
        //2.对数据库进行查询
        //3.query这个方法里面写SQL语句，通过什么样编码去查询数据库，
        $db->query("set names utf8");

        //对数据库操作语言 添加 删除 修改
        //$db->query(" insert into demo(name,age,sex)values('张三',19,'男')");

        //很多时候我们需要，在数据库里面每一条数据都有一个唯一 的标识
        //主键就是这一条信息的主要标识，只要你设置了主键，主键是不能一样的
//        $db->query("delete from demo where name='王五'");
//        echo $db->affected_rows;
//        if ($db->affected_rows>0){
//            echo "操作成功";
//        }
        //查询语句 结果集是一个对象- >方法， 获取具体的数据
        $result=$db->query("select * from demo");

        echo "<pre>";
        while($row=$result->fetch_assoc()){
            var_dump($row);
        }



//        //结果集对象
//        $result=$db->query("select * from demo");
//
//        //关联数据
//        //$result->fetch_assoc();
//        //索引关联都有
//        //$result->fetch_array();
//        //既有关联数组，又有索引数组
//        //$result->fetch_all();
//        //只取索引
//        //$result->fetch_row();
//
//        //3.如何将数据从结果里面取出来
//        $data=array();
//
//        while($row=$result->fetch_assoc()){
//            $data[]=($row);
//        }
//
//        $smarty->assign("data",$data);
//        $smarty->display("index.html");

    }
    function del(){
        echo "删除";
    }
}