<?php 
// 数组常用函数
// 1.往数组中添加或删除元素
$arr1 = ['php','js','css'];
// 往数组的最后添加一个元素
array_push($arr1, 'js');
var_dump($arr1);
echo "<hr>";
// 删除数组的最后一个元素
array_pop($arr1);
var_dump($arr1);
echo "<hr>";
// 在数组最前面删除一个元素
array_shift($arr1);
var_dump($arr1);
echo "<hr>";
// 在数组最前面添加一个元素
array_unshift($arr1, 'css');
var_dump($arr1);
echo "<hr>";
// 2.数组与字符串之间的相互转化
$str = 'a,b,c,d,e';
// 讲数组中的多个值拼接起来
echo implode('-', $arr1);
echo "<hr>";

//将一个字符串以某个字符分解成数组
$arr2 = explode(',', $str);
print_r($arr2);
echo "<hr>";

######################


// 3.获取到数组中所有的键   或者  值
$arr3 = ['name' => 'zhangsan','age' => 20];
print_r(array_values($arr3));
echo "<hr>";
print_r(array_keys($arr3));
echo "<hr>";


// 4.判断数组中是否包含某个键

var_dump(array_key_exists('name', $arr1));
echo "<br>";
echo(array_key_exists('name', $arr1));

echo "<br>";
// 5.查询数组中某个值所对应的键
echo array_search('css', $arr1);
echo "<hr>";
// 6.
echo rand(8,100);
echo "<hr>";
echo array_rand(['a','d','f']);
echo "<hr>";
$arr4 = ['as','f','g','j','jm'];
$i = array_rand($arr4);
echo $arr4[$i];
echo "<hr>";

// 7.用来获取数组中的某几个连续的元素
// 参数1：要截取的数组
/*参数2：开始截取的位置
参数3：截取的个数*/
print_r(array_slice($arr4, 1,2));
echo "<hr>";
// 8.替换功能：保留两个数组中不同的元素，相同的元素保留后者
$arr5 = ['a' => 'apple','b' => 'banana', 'd' => '?'];
$arr6 = ['b' => 'blue','c' => 'color'];
print_r(array_replace($arr5, $arr6));
echo "<hr>";
// 9.去掉数组中重复的值
$arr7 = ['a' => 'apple','b' => 'banana','c' => 'apple'];
print_r(array_unique($arr7));
echo "<hr>";

// 
print_r(array_merge($arr5,$arr6));
// 求和
array_sum(array);
// 求积
array_product(array);
//交换键的值
array_flip(trans);
array_map(callback, arr1);



 ?>