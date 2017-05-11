<?php 
// 写文件
// 函数内部会检测是否创建过这个文件，若没有，会先创建，在写入

file_put_contents('bbb.txt', 'data');

// 默认每次写入时，都会从文件开头写，会把之前的内容覆盖
file_put_contents('bbb.txt', 'sfsdfgs',FILE_APPEND);


// ///////////////////////////
function mylog($message,$level = 'error'){
	$dateStr = date('Y-m-d H:i:s');

	$writeStr = "[$dateStr][$level]$message\n";

	file_put_contents('mylog.txt', $writeStr,FILE_APPEND);
}
mylog('连接失败');
// mylog('dabug','登录功能');

// mylog('dabug','请求功能');
// $dateStr = '';
// $level = '';
// $message = '';
$array = ['三' =>'542758926','四' =>'t2758926'];


$handle = fopen('ccc.txt', 'w');
foreach ($array as $key => $value) {
	$a = "$key:$value\n";
	// 返回字符的个数
	$rs = fwrite($handle, $a);
	echo $rs;
}
fclose($handle);
// 想再次写入一个号码
// r读 w写 a追加
$handle = fopen('ccc.txt', 'a');
fputs($handle,"小红：21673467\n");
fclose($handle);





























?>