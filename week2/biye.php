<?php 
$a = 1;
$b = null;
unset($a);
if (isset($a)) {
	echo "a存在<br>";
}
else{
	echo "a不存在<br>";

}if (isset($b)) {
	echo "b存在<br>";
}else{
	echo "b不存在<br>";

}
if (isset($c)) {
	echo "c存在<br>";
	
}else{
	echo "c不存在<br>";

}

$one = 1;
$two = &$one;
$two++;
echo "<br>one = $one,two = $two";






 ?>