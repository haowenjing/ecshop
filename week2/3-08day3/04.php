<?php 

// 数组的常用函数
// 1,往数组中添加或者删除元素
$arr1 = ['php','html','css'];

// push往数组最后添加一个元素
array_push($arr1, 'js');
print_r($arr1);
echo "<br>";

// pop删除数组最后一个元素
array_pop($arr1);
print_r($arr1);
echo "<br>";

// unshift 往数组最前面添加一个元素
array_unshift($arr1, 'js');
print_r($arr1);
echo "<br>";

// shift 删除数组最前面的元素
array_shift($arr1);
array_shift($arr1);
print_r($arr1);
echo "<br>";

// 2, 数组和字符串相互转化的
$str = 'a,b,c,d,e';

// 将字符串以某个字符分解成数组
$arr2 = explode(',', $str);
print_r($arr2);
echo "<br>";

// 将数组中的多个值拼接起来
// 参数1：以什么字符做连接
// 参数2：要操作的数组
echo implode('-', $arr1);
echo "<br>";


// 3, 获取到数组中所有的键  或者  值
$arr3 = ['name'=>'zhangsan', 'age'=>20, 'height'=>'1.75'];
print_r(array_keys($arr3));
echo "<br>";
print_r(array_values($arr3));
echo "<br>";

// 4,判断数组中是否包含某个键
var_dump(array_key_exists('age1', $arr3));
echo "<br>";

// 5,查询数组中某个值 所对应的键
echo array_search('css', $arr1);
echo "<br>";

// 6
// rand函数用来生成一个随机数
echo rand(0,100);
echo "<br>";
// 随机得到一个数组中的键名
$arr4 = ['a','c','d','e','g'];
$i = array_rand($arr4);
echo $arr4[$i];
echo "<br>";

//  7,用来获取数组中的某几个连续的元素
// 参数1：要截取的数组
// 参数2：开始截取的位置
// 参数3：截取的个数
print_r(array_slice($arr4, 1, 2));
echo "<br>";

// 8, 替换功能
// 保留两个数组中不同的元素，相同的元素保留后者
$arr5 = ['a'=>'apple','b'=>'banana','c'=>'dd'];
$arr6 = ['b'=>'blue','c'=>'color'];
print_r(array_replace($arr5, $arr6));
echo "<br>";

// 9. 去调用数组中重复的值
$arr7 = ['a'=>'apple','b'=>'banana','c'=>'apple'];
print_r(array_unique($arr7));


// 10  合并多个数组
print_r(array_merge($arr5,$arr6));

/*
// 求和
array_sum(array);
// 求乘积
array_product(array);
// 交换数组中的键值
array_flip(trans);

array_map(callback, arr1);
*/
// *************************
// 函数的注释中&（捆绑）
array_map(callback, arr1)

 ?>
