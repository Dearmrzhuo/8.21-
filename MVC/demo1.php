<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $data=array(
        array(
            "name"=>"zhangsan",
            "sex"=>"man"
        ),
        array(
            "name"=>"lisi",
            "sex"=>"woman"
        ),
    )
?>

<?php foreach ($data as $v){?>
    <ul>
        <li>
            <?php echo $v["name"]?>
        </li>
        <li>
            <?php echo $v["sex"]?>
        </li>
    </ul>
<?php
}
?>


</body>
</html>