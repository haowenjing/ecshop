<?php 
//写一个函数，函数可以接受一个时间戳，然后返回一个对于时间戳的描述
// 一小时以内的------几分钟以前
// 一天以内的-------几小时几分钟之前
// 一个月以内的------几天前
// 。。。。。。。-------日期
function timetostr($timestamp){
	$now = time();
	$cha = $now - $timestamp;
	if ($cha < 60 * 60) {
		$minute = $cha / 60;
		echo $minute.'分钟之前';
	}elseif ($cha < 24 * 60 * 60) {
		//ceil(向上取整)

		$hour = floor($cha / (60 * 60));
		
		$minute = $cha % (60 * 60) / 60;
		echo $hour.'小时'.$minute.'分钟之前';
	}
	elseif ($cha < 30 * 24 * 60 * 60) {
		$day = floor($cha /  (24 * 60 * 60));
		$hour = floor($cha %  (24 * 60 * 60) / (60 * 60));
		$minute =($cha %  (24 * 60 * 60)) % (60 * 60) / 60;
		echo $day.'天'.$hour.'小时'.$minute.'分钟之前';
	}else{
		echo date('Y-m-d H:i:s',$timestamp);
	}

}
$timestamp = strtotime('-200000 minute');
timetostr($timestamp);




?>