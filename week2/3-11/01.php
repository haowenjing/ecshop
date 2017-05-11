
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript"></script>
</head>
<body>
<?php

$data1 = "";
$data2 = "";
$fuhao = "";
$result = "";
if( $_POST )	//如果有post数据
{
	$data1 = $_POST['n1'];		//相应接收每个表单项的数据值
	$data2 = $_POST['n2'];		//特别注意：表单项的值字符串类型
	$fuhao = $_POST['yunsuanfu'];
	if( is_numeric($data1) && is_numeric($data2) )	//$data1是数字 并且 $data2 是数字
	{	//开始计算
		switch($fuhao){
			case "+":
				$result = $data1 + $data2;
				break;
			case "-":
				$result = $data1 - $data2;
				break;
			case "*":
				$result = $data1 * $data2;
				break;
			case "/":
				if($data2 == 0){
					$result = "除数不能为0";
				}
				else{
					$result = $data1 / $data2;
				}
				break;
		}
		//echo "计算结果为： $result";
	}
	else{	//否则：
		echo "请输入数字进行计算";
	}
}
else{
//	echo "请从正确的页面输入数据并提交！";
}
?>
	<form  action=""  method="post" >
		<input type="text"   name="n1"   value="<?php echo $data1;?>"  />
		<select name="yunsuanfu" >
			<option value="+" <?php if($fuhao =="+"){echo "selected";} ?> >+</option>
			<option value="-" <?php if($fuhao =="-"){echo "selected";} ?> >-</option>
			<option value="*" <?php if($fuhao =="*"){echo "selected";} ?> >*</option>
			<option value="/" <?php if($fuhao =="/"){echo "selected";} ?> >/</option>
		</select>
		<input type="text"   name="n2"   value="<?php echo $data2;?>"  />
		<input type="submit"  value="提交"  />
		<input type="text"   name="n3"  value="<?php echo $result;?>" />
	</form>
</body>
</html>
