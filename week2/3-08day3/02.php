<?php 
$fruit = ['榴莲','猕猴桃','香蕉','苹果','橘子'];
// 遍历  把数组中的每个值按顺序获取一遍
########################
foreach ($fruit as  $value) {
	echo $value.'<br>';
}
echo "<hr>";
#################################
// 使用for循环进行遍历
for ($i=0; $i <= count($fruit) - 1; $i++) { 
	echo $fruit[$i].'<br>';
}
echo "<hr>";
###############################
$i = 0;
while ($i <= count($fruit) - 1) {
	echo $fruit[$i].'<br>';
	$i++;
}
########################
echo "<hr>";

// 遍历关联数组
$people = ['name' => '张三','age' => 20,'height' => '1.75'];
// 
foreach ($people as $value => $key) {
	echo $key.':'.$value."<br>";
}
#####################
foreach ($people as  $key) {
	echo $key.'<br>';
}
// foreach 遍历过程中  $key和$value 这两个变量名可以随意修改的
echo "<hr>";


$people1 = ['zhangsan','20','1.78'];
$people2 = ['lisi','21','1.76'];
$people3 = ['wangwu','24','1.79'];

$people = [$people1,$people2,$people3];
foreach ($people as  $value) {
	$a = 0;
	foreach ($value as $k) {
		$a++;
		$b = ($a >= 3)?$k.'<br>':$k.'&nbsp';
		echo $b;
		// if ($a >= 3) {
		// 	echo $k.'<br>';
		// } else {
		// 	echo $k.'&nbsp';
		// }
		
	}
}
echo "<hr>";
$people1 = ['zhangsan','20','1.78'];
$people2 = ['lisi','21','1.76'];
$people3 = ['wangwu','24','1.79'];
$people = [$people1,$people2,$people3];
foreach ($people as  $value) {
	foreach ($value as $k) {
		echo $k.'&nbsp';
	}
	echo "<br>";
}
echo "<hr>";




 ?>