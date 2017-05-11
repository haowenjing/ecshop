

<form action = "install.php" method="get">
<label>数据库账户：</label><input type="text"  name="db_username"><br> 
<label>数据库密码：</label><input type="text"  name="db_password"><br> 
<label>数据库名称：</label><input type="text"  name="db_name"><br>
<label>管理员账户：</label><input type="text"  name="admin_username"><br> 
<label>管理员密码：</label><input type="text"  name="admin_password"><br>  	 
<button type="submit">登录</button>

</form>
<?php
// 写入配置文件,保存基础数据
if(!isset($_GET['db_username'])){
		die();
	}

	$db_username = $_GET['db_username'];
	$db_password = $_GET['db_password'];
	$db_name = $_GET['db_name'];
	$admin_username = $_GET['admin_username'];
	$admin_password = $_GET['admin_password'];

	// 判断是否为空
	if(empty($db_username)){
		die('信息不完整');
	}	



	// 文件夹的判断
	if(!file_exists('config')){
		mkdir('config');
	}

	
	$isSuccess = file_put_contents('config/database.php',"<?php 
	
	define('db_username','{$db_username}');
	define('db_password','{$db_password}');
	define('db_name','{$db_name}');
	define('admin_username','{$admin_username}');
	define('admin_password','{$admin_password}');");
	if($isSuccess){
		echo '安装成功';
		file_put_contents('install.lock','LOCK');
		header('Location:index.php');
	}
