<?php
$data = include_once "database.php";
$id = $_GET["id"];
$attr = $_GET["attr"];
$val  = $_GET["val"];

if ($attr == "name") {
    foreach ($data as $k => $v) {
        foreach ($v as $k1 => $v1) {
            if ($k1 == "name") {
                if ($val == $v1) {
                    echo "same";
                    return;
                } else {
                    $data[$id][$attr] = $val;
                }
            }
        }
    }
} else {
    $data[$id][$attr] = $val;
}
$result = "<?php \n return " . var_export($data, true) . ";";
file_put_contents("database.php", $result);
echo "ok";
