<?php 
// 3.读文件  读取全内容，操作简单，但是只能读取小文件
echo file_get_contents('../3-09day4/1.text');
echo "<br>";
readfile('../3-09day4/1.text');
echo "<br>";
// 返回值是一个数组，按行划分
var_dump(file('../3-09day4/1.text'));
echo "<hr>";
// fgets读取一行内容,不仅能够读取文件，还能识别文件中的代码
// fgetss读取一行内容并能够读取文件，还能过滤掉文件中的js, php代码
// 首先要打开文件（需指定模式r w a），最后要关闭
//返回值是 句柄
$handle = fopen('../3-09day4/1.text', 'r');
// fgets('../3-09day4/1.text');
// 参数：打开文件时返回的handle
// 如果能够独到一行数据，则返回这行数据
// 如果文件读完了，读取不到数据，会返回布尔值false
var_dump($handle);
echo fgetss($handle)."<br>";
echo fgetss($handle)."<br>";
while (false !== $line = fgetss($handle)) {
	echo $line."<br>";
}
echo "<hr>";
$handle = fopen('../3-09day4/1.text', 'r');
while ('' !== $str = fread($handle,3)) {
	echo $str;
}
// echo fgetc($handle);   每次读取一个字符
// fread 每次读取指定的长度 当读完的时候，不会像之前的函数返回布尔的false,而是返回一个空字符串
var_dump(fread($handle, 3));

fclose($handle);

 



// 

 ?>