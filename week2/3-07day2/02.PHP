<?php 
// 6.时间戳
// 获取时间戳的方法
// 某个时间距离1970-1-1 00：00：00所间隔的秒数
echo date('U');
#################
// 方式一：
// 关于date 函数
// 参数1 ：日期格式
// 参数2 ： 时间戳（若填写，会将时间戳对应的时间进行格式化）
// date(参数1，参数2)
// 方法2
echo "<br>".time();
echo "<hr>";
// time函数 用来获取当前时间的时间戳
var_dump(time());
echo "<hr>";
// 打印昨天的时间（此时此刻）
// 例子:

echo date('Y-m-d H:i:s', time() - 24*60*60);
// 方式3
// 能够把一个英文单词表示的时间转化为一个时间戳
// 参数：字符串   返回值：时间戳
echo "<hr>";

$timestame = strtotime('+1 day');
$timestame = strtotime('-1 day');
$timestame = strtotime('+1 year');
$timestame = strtotime('1 month 3 day -2 hour');
$timestame = strtotime('21 october 1997 19:30:20');
// 把得到的时间戳转化为字符串去查看
echo date('Y-m-d H:i:s',$timestame);
echo "<hr>";
// 1997-10-21  19:00
// 方式4：
// mktime() 把具体的时间的值转化为时间戳
// 时， 分，秒，月 ，日，年
$timestamp = mktime(19,30,20,10,21,1997);
// $timestamp = mktime();当前时间的时间戳
echo date('Y-m-d H:i:s',$timestame);
// 总结：
// 1.当前的时间转化为任意格式的字符串
// 2.或取到当前时间的时间戳
// 3.能够得到任意时间的时间戳
// 4.把某一个时间戳转化为某种格式的字符串
 ?>