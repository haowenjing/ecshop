<?php 
// 变量函数
function siquche(){
	echo "wo like";
}

function lol(){
	echo "我喜欢游戏";
}

function car(){
	echo "我喜欢车";
}
$age = 60;
if ($age == 20) {
	$like = 'lol';
}
elseif ($age == 10) {
	$like = 'siquche';
}
else{
$like = 'car';	
}
// 把函数名字定义成变量
// 需要调用的时候直接通过变量名加（）来调用
$like();
 ?>