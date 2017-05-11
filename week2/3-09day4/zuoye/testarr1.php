<?php
    // 数组
    // 学习常用函数 -> 转成字符串() -> 增删改
    $arr = [5,2,1,4];
    // 增加
    $arr[] = 3;

    // 转化 -> 字符串
    $str = implode('-',$arr);
    explode('-',$str);

    // 函数的注释中 & (捆绑)
    sort($arr);
    print_r($arr);

    // 语言函数库 提供的一个遍历的方法
    array_map(function ($element,$arr){
        // 自己的实现代码
    },$arr);

    //---  如果自己实现数组遍历 (思想转化) 
    foreach($arr as $value){
        testArr($value,$arr);
    }

    function testArr($value,$arr){
        // 自己的实现
    }


?>