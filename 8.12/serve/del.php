<?php
$data = include_once "database.php";
$id = $_GET["id"];
array_splice($data, $id, 1);
$result = "<?php \n return " . var_export($data, true) . ";";
file_put_contents("database.php", $result);
echo "ok";
