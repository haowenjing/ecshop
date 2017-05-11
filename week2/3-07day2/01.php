<?php 
// php中的日期和时间

var_dump(date('r'));
echo "<br>";
var_dump(date('Y-m-d H:i:s'));
// php中默认的时间是标准时间
// bitnami中默认的时间是美国洛杉矶的时间
// php中所设置的时区是影响的当前时间的根本原因
// 修改默认时区的方式有两种：
// 1.修改php.ini文件，date.timezone,修改之后重启服务器
// 2.在你的程序中通过函数需要使用设置默认时区   'Asia/Shanghai'   
// 'PRC'  中华人民共和国
date_default_timezone_set('Asia/Shanghai');
// 年
// 是否是闰年，1，是 0，否
echo "<br>L的值：".date('L');
// y 年份的后两位 year
echo "<br>y的值：".date('y');
// Y 年份的完整值
echo "<br>Y的值：".date('Y');


// 月份
// F 月份英文全称
echo "<br>F的值：".date('F');
// m 月份的数字  会有前导零 01~12
echo "<br>m的值：".date('m');
// M 月份的英文的前三个字母
echo "<br>M的值：".date('M');
// 月份的数字  没有前导零
echo "<br>n的值：".date('n');




// 天  日
// d 几号   有前导零
echo "<br>d的值：".date('d');
// j 几号   没有前导零
echo "<br>j的值：".date('j');
// S 代表的是日期号的英文单词的缩写 th  rd  st nd    一般结合	j来使用
echo "<br>S的值：".date('jS');
// t 本月总共的天数
echo "<br>t的值：".date('t');
// z 今天是本年的第几天
echo "<br>z的值：".date('z');



// 星期
// D 星期英文的缩写  Tue
echo "<br>D的值：".date('D');
// l 星期英文的全拼 Tuesday
echo "<br>l的值：".date('l');
// w 周几  0~6
// 国外，周日是每周的第一天
// 日 一 二 三。。。六    0~6
echo "<br>w的值：".date('w');
// W本周是今年的第几周
echo "<br>W的值：".date('W');


// 小时
// h   12小时制的时
echo "<br>h的值：".date('h');
// H   24小时制的时
echo "<br>H的值：".date('H');
// I 夏令时
echo "<br>I的值：".date('I');
// O 与标准时间相差的小时数 当前的时区
echo "<br>O的值：".date('O');


// 分钟
echo "<br>i的值：".date('i');


// 秒
// s正常的秒数
echo "<br>s的值：".date('s');
// 从1970-1-1 00:00:00 到现在为止的秒数
// 时间戳！！！！
echo "<br>U的值：".date('U');
// 距离标准时区相差的秒数  
echo "<br>Z的值：".date('Z');


// 上午  下午
// am pm
echo "<br>a的值：".date('a');
// AM  PM
echo "<br>A的值：".date('A');


// 本地时区
// CST 中国的时区
echo "<br>T的值：".date('T');

// 2017-03-07 11:50:22
echo "<br>".date('Y-m-d H:i:s');
// 2017年03月07日 11点50分20秒
echo "<br>".date('Y年m月d日 H点i分s秒');
// 03月07日-----2017年
echo "<br>".date('m月d日-----Y年');



// 5.如果日期格式化字符串中包含文本字符或者特殊的字符，需要使用\转义
// 练习
echo "<hr>".date('l \i\s \t\h\e jS');
// 2.
echo "<hr>".date('F d,Y,H:i,a');
echo "<hr>".date('M D d H:i:s T O');
 ?>
