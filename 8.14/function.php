<?php

//当形参的数量大于买参，miss I arguments
//当实参的数量多于形参，不会报错，如何接收传入的值
//形参和实参的数量要一致
function aa(){
    //var_dump(count(func_get_args()));
    //var_dump(func_num_args());
    //$args=func_get_args();
    //echo func_get_arg(1) ;

    //php 函数 作用域  作用域链

    //全局变量  局部变量   global
}
aa();
?>

<script>
    function aa(message) {
        console.log(message);
    }
    aa("hsw");
</script>
