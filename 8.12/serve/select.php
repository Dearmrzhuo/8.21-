<?php
sleep(3);
$data = include_once "database.php";
echo json_encode($data);
