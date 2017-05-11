<?php 
// 文件
// 硬盘，内存
$a = 1;//内存

$s = 'zahng';
// 放哪里，放什么
// file_put_contents('a.text', $a);

file_put_contents('1.text', 'lisi');
echo file_get_contents('1.text');
echo "<br>";


// 打开=》读取
// fopen(filename, mode)

// $f = fopen('a.text', 'a+');
// echo fread($f, 10);
// fwrite($f, 'string');
// 


// 路径（url,本地地址）（绝对路径）（相对路径）
// 绝对路径的开头：  d:  http://
// d:\dsdfs\fesrg\gfd\1.php
// apache提供的索引/  文件
// http://192.168.10.48/
// 相对路径：有参照物----自己（所在文件夹）
// 'a/1.text'
file_put_contents('b.text', "a\ne\nd");
// echo file_get_contents('b.text');
$f = fopen('b.text', 'a+');
// 全部读取
echo file_get_contents('b.text');
// echo "<br>",fgets($f);
// 逐行读取
// echo "<br>",fgets($f);
// echo "<br>",fgets($f);


// 拷贝一个文件 用php来实现
// 打开一个文件--读--写
// file_put_contents('b.text', "a\ne\nd");
// echo file_get_contents('b.text');
// $f = fopen('b.text', 'r+');
// fwrite($f, 'hello');
// echo file_get_contents('b.text');
// 回车 换行  \n\r

$f1 = fopen('1.text', 'r');
$f2 = fopen('1copy.text', 'a+');

while (!feof($f1)) {
	$c = fread($f1, 256);
	fwrite($f2, $c);
}
fclose($f1);
fclose($f2);
echo "<br> 拷贝成功";
echo "<br>";
// 文件夹

if (file_exists('test')) {
	echo "文件夹存在";
}else{
	$c = mkdir('test');

	if ($c) {
		echo "成功";
	}

}
echo "<br>",file_exists('1.text');

// 配置文件
       
                                                         

?>