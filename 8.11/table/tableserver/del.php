<?php

$data=include_once "database.php";
$id=$_GET["id"];

array_splice( &input: $data, $id, length: 1);
$result="<?php \n return".var_export($data, return: true).';' ;

file_put_contents( filename: "database.php" , $result);

echo "ok";
?>