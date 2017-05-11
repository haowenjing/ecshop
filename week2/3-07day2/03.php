<?php 
// 7.getdate()函数
// 用来获取当前的日期，返回值是一个数组
// 里面包含了很多个值，每一个值都有对应的名字
$dateInfo = getdate();
var_dump(getdate());
echo "<hr>";
// 从数组取值通过[],里面填写值对应的名字
echo $dateInfo['year'];
echo "<hr>";
// 8.checkdate()函数
// 用来检验一个日期是否正确
var_dump(checkdate(2, 29, 2017));
echo "<hr>";
// 9.本地化设置
// 设置当前所在的位置，来实现不同的一些值的效果
// 设置程序中关于时间的区域
setlocale(LC_TIME, 'chs');
// chs 简体中文   en_US 美国（在浏览器按		Alt键---查看---文字编码）设置的区域 环境不同，获取的本地化字符串就不同
// 能够根据你填写的格式，返回一些本地化的值 
echo strftime('%A')	;

// 10.计算当前脚本执行的时间
echo "<br>";
// 微妙数   当前的时间戳
echo microtime();


 ?>