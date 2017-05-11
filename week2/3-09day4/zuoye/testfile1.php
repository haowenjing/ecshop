<?php 
    // 硬盘,内存 
    $a = 1;// 内存
    $s = 'zhangsan';

    // 放哪里, 放什么, 没有文件会创建
    // 整个写 -> 一次性写入 (覆盖写入)
    file_put_contents('1.txt','lisi');
    // 读取整个文件内容 =>
    echo file_get_contents('1.txt');


    // 打开 => 读取 => 
    // 流式的读写 -> 文件流(水流)
    $f = fopen('a.txt','a+');
    echo fread($f,10);
    fwrite($f,' hello');

    // 路径(url,本地路径) (绝对路径) (相对路径)  
    // 绝对路径的开头, 都是以以下  / d: http:// 
    //  d:\wamp\apache2\htdocs\file\testfile1.php
    //   /
    // index (apache 提供的 默认/索引 文件)
    //  http://192.168.10.48/ 
    //  http://www.baidu.com/index.php
    //  参照物 => 自己(所在文件夹)

    //   'a/1.txt' 



    // 回车 换行   \n\r win 和 linux的区别

    // 分别用 win-> 记事本和SublimeText 打开,
    file_put_contents('b.txt',"a\nb\nc\n");
    $f = fopen('b.txt','a+');
    echo '<br>',fgets($f);
    echo '<br>',fgets($f);
    echo '<br>',fgets($f);

    // 拷贝一个文件 用php来实现 
    // 打开一个文件 -> 读  -> 写

    // 文件流, 读写, 出入  IO (Input  Output)
    // 影响IO速度 
    // 使用<读写的次数> 频繁 ->  缓冲区(内存) -> (大小)
    
    // 打开两个文件
    $f1 = fopen('1.zip','r');
    $f2 = fopen('1copy.zip','a+');

    // 文件什么时候读完
    while(!feof($f1)){
        $c = fread($f1,256);
        fwrite($f2,$c);
    }
    fclose($f1);
    fclose($f2);
    echo '<br> 拷贝成功';

    // 文件夹 创建 删除
    if(file_exists('test')){
        echo '<br> 文件夹已经存在';
    }else{
        $isSuccess = mkdir('test');
        if($isSuccess){
            echo '<br> 文件夹创建成功';
        }
    }

    // 是否存在 
    echo '<br>',file_exists('1.txt');
    
    // 文件创建,文件夹创建 -> 创建配置文件 php.ini  
    // 项目的配置文件 -> 项目用 
    // 数据库的账号密码,常量,变量 (一次定义,整个程序都用)
    // config/database.php 
    
    // 
    createConfig();

    function createConfig(){
        if(!file_exists('config')){
            mkdir('config');
        }
        if(file_exists('config/database.php')){
            echo '已经安装'; 
            // 文件的包含
            // 跳转
            header('Location:index.php');
            // include 'index.php';
        }else{
            $isSuccess = file_put_contents('config/database.php',"<?php 
    define('DB_USER','root');
    define('DB_PWD','123456');");
            if($isSuccess){
                echo '安装成功';
            }
        }
    }

?>