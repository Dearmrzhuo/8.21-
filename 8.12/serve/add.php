<?php
$data = include_once "database.php";
$data[] = array(
    "name" => "",
    "age" => "",
    "sex" => "",
    "class" => ""
);
$result = "<?php \n return " . var_export($data, true) . ";";
file_put_contents("database.php", $result);

echo count($data) - 1;
