<?php 
// 替换函数
echo str_replace('l', 'a', 'hello');
echo "<hr>";
// str_replace(参数1，参数2，参数3);
// 参数1 将要修改的目标字符串

// 参数2 把字符串替换成什么
// 参数3 从第几个字符开始替换
// 参数4 要替换的部分的长度
echo substr_replace('hello', 'a', 2,2);
 echo "<hr>";
 ##########################
$str = 'this is php';
$result = '';
for ($i=0; $i < strlen($str); $i++) { 
	$a = substr($str, $i, 1);
	$a = ($a == 'h')?'o':$a;
	$result = $result.$a;
}
echo $result;
echo "<br>";
#######################
$result = '';
for ($i = strlen($str) - 1; $i >= 0 ; $i--) { 
	// i    11~0
	$a = substr($str, $i, 1);
	$result = $result . $a;
	echo $result;
	echo "<br>";
}
echo "<br>";


$result = '';
for ($i=0; $i < strlen($str); $i++) { 
	// i    0~11
	$a = substr($str, $i, 1);
	// 每次把截取的字符往上次拼好的字符前面拼接
	$result = $a . $result;
}
echo "$result";
echo "<hr>";


function printNum($num){
	echo $num.'-';
	if ($num > 1) {
		printNum($num - 1);
	}
	else{
		echo "0<->0";
	}
	echo '-'.$num;
}
printNum(3);


 ?>                                                                                             