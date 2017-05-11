<?php 

// 文件
// 2.文件的属性
// 文件类型   file dir unknown
echo filetype('../3-09day4/1.text');

echo filetype('../3-09day4/1.text');
echo "<hr>";
// 上次访问时间
echo fileatime('../3-09day4/1.text');
echo "<hr>";   

// 文件的创建时间
echo filectime('../3-09day4/1.text');
echo "<hr>";
// 文件的修改时间
echo filemtime('../3-09day4/1.text');
echo "<hr>";
// is_dir(filename)    判断某个名字是不是一个文件
// is_file(filename)   判断某个名字是不是一个文件夹
echo filesize('../3-09day4/1.text');   //单位是字节    文件的大小
echo "<hr>";

// is_writable(filename)     文件是否可写
// is_readable(filename)
// var_dump(stat('../3-09day4/1.text'));   文件所有属性

// 2.文件的路径  （文件的存储位置）
$url = '../3-09day4/1.text';
// echo dirname($url);     路径的目录结构

echo basename($url);
echo "<br>";
var_dump(pathinfo($url));  //路径的具体信息  


// 3.读文件

















































 ?>