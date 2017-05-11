<?php 
// 数组
// 1.什么是数组
// 数组是包含了一组数据的一个集合（容器）
// 数组是一种非常常用的一种类型
// 2.三种写法
// 数组里面的元素可以是任意类型
// 数组中的元素都有一个索引（下标）（键），：序号 
// 索引从0开始，依次递增0  1  2
// 元素的总个数的总个数（长度）3
$arrayone = ['zhangsan','lisi','wangwu'];

$arrayone = array('zhangsan','lisi','wangwu');

$arrayone[0] = 'zhangsan';
$arrayone[1] = 'lisi';
$arrayone[2] = 'wangwu';

// 3.数组的打印方式
// echo $arrayone //不行，echo 只能打印字符串，不能打印数组
echo "zhangsan";
echo "<hr>";
var_dump($arrayone);
echo "<hr>";
print_r($arrayone);
echo "<br>";

// 数组的分类
// 1.索引数组（数值数组）
// 特点：数组中的元素都是一个一个的值，每一个元素都有自己的索引，默认从0开始
$arr1 = ['主机','显示器','鼠标','键盘'];
$name = $arr1[2];
var_dump($arr1);
echo "<hr>";
// 2.关联数组（联合数组）
$arr2 = ['name' => '主机','name1' => '显示器','name2' => '鼠标','name3' => '键盘'];
var_dump($arr2);
echo "<br>";
echo $arr2['name1'];
echo "<hr>";


// 混合数组
// 混合数组中的单值的索引从0开始，下一个单值为1
$arr3 = ['电脑','name' => 'zhangsan','椅子','age' => 20];
var_dump($arr3);
echo "<hr>";
// 二维数组
$people1 = ['zhangsan','20','1.78'];
$people2 = ['lisi','21','1.76'];
$people3 = ['wangwu','24','1.79'];
$people = [$people1,$people2,$people3];
foreach ($people as  $value) {
	foreach ($value as $k) {
		echo $k.'<br>';
	}
}



// 获取二维数组的值
echo $people[0][1];
echo "<hr>";
// echo "<pre>";
// 浏览器在显示页面时，会忽略你html代码中的换行符和空格
// 使用pre标签能够保留换行符和空格
var_dump($people);
// echo "</pre>";
echo "<hr>";
echo "*******************************"."<br>";
$array = [1 => "a","1" => "b",1.5 => "c",true => 'd'];

print_r($array);
echo "<hr>";
$array1 = array(
         "a",
         "b",
    6 => "c",
         "d",
);
var_dump($array1);
echo "<hr>";
$array1 = array(
    7 => "a",
         "b",
    6 => "c",
         "d",
);
print_r($array1);
echo "<hr>";
########################

function getArray() {
    return array(1, 2, 3);
}

// on PHP 5.4
$secondElement = getArray()[1];

// previously
$tmp = getArray();
$secondElement = $tmp[1];
print_r($secondElement);




 ?>