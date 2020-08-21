<?php
$data=include_once "database.php";


$data[]=array({
    "name"=>"",
    "sex"=>"",
    "age"=>"",
});
$reslt="<?php \n return ".var_export("$data,return:true").";";
file_put_contents( filename: "database.php" , $result);

echo count($data)-1;