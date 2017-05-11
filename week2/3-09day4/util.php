<form method="post">
	数：
	<input type="text" name="shuzi">
	<select name="leixing">
		<option name="10to2" value="10to2">10to2</option>
		<option name="10to8" value="10to8">10to8</option>
		<option name="10to16" value="10to16">10to16</option>

	</select>
	<input type="submit" value="转换">




<?php 
	// function hahalog($content,$logtype){
		// 写文件操作--->
		// file_put_contents('a.log', $logtype);
		// echo "<br>".date('Y-m-d H:i:s');

	// }
// hahalog();
$shuzi = $_POST['shuzi'];
$leixing = $_POST['leixing'];

switch($leixing){
	case'10to2':
	$a = decbin($shuzi);
	echo $a;


	case'10to8':
	$a = decoct($shuzi);
	echo $a; 

	case'10to16':
	$a = dechex($shuzi);
	echo $a;
}




/**
* 定一个“人”类
*/
// class Person
// {
// 	public $name = '匿名';
// 	public $age = 18;
// 	public function introMe()
// 	{
// 		echo "hello";
// 		echo "我叫".$this->name;
// 		echo ",我今年".$this->age.'岁';
// 	}
// }
// $person1 = new Person();
// $person1->name = "小名";
// $person1->age = 22;
// $person1->introMe();
// echo "<hr>";
// // 文件权限
// /**
// * 
// */
// $a = (int)2.333;
// $b = (float)$a;
// // if (isset($d)) {
// // 	echo "变量d存在";
// // } else {
// // 	echo "变量d不存在";
// // }
// var_dump(is_float($b));
// echo "<hr>";
// // unset($b);
// if (3==='3') {
// 	echo "相等，没区别";
// } else {
// 	echo "不相等";
// }
// echo "<br>";
// var_dump("abc35">"bbc123");
// echo "<br>";
// var_dump("15">"163");


// settype($b, 'int');
// echo "<br>a的值为：$a,".gettype($a);
// echo "<br>b的值为：$b,".gettype($b);
// echo "<hr>";
// var_dump(decbin(23));
// echo "<hr>";
// var_dump(decoct(23));
// echo "<hr>";
// var_dump(dechex(23));

?>
	<input type="text" name="a" value="<?php echo $a; ?>">

</form>



