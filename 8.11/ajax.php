<?php
$data=include once "../8.8/database.php";
$id=$_POST["id"];

//var_dump($data[$id]); 

echo json_encode($data[$id]);//只能将标准数组转换成json格式
//在php里面如何将数组转换成json 
