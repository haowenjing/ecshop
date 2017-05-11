<?php 

// 文件的操作
// 拷贝(赋值粘贴)   删除（）  移动（剪切）
copy('ccc.txt', '../3-09day4/ccc2.txt');
rename('ddd.php', '../3-09day4/ddd1.php');
// unlink('ddd.php');

// 判断文件是否存在,还可以判断文件夹
echo file_exists('haha');
// 创建文件夹
mkdir('xixi');
rmdir('xixi');
echo "<h>";
// 读取文件夹中的所有文件
//.和..   文件夹内部表识自己所在位置的两个文件
$haha = opendir('haha');
// var_dump(readdir($haha));
// var_dump(readdir($haha));
// var_dump(readdir($haha));
// var_dump(readdir($haha));
while (false !== $file = readdir($haha)) {
	echo '<a href="#">'.$file.'</a><br>';
}
closedir($haha);
$hh = scandir('haha');
var_dump($hh);





















 ?>