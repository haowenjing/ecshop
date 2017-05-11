<?php
    // => 文件的信息
    // basename 获取路径的文件名部分
    // dirname 获取路径的文件夹部分
    // 时间 filemtime(修改时间) fileatime(上次访问时间)
    // 文件大小,文件类型
    // 文件类型: 不是普通的文本,视频等类型,是文件,文件夹,链接
    // link: 只有linux系列的链接 才是link, window上的快捷方式 是文件
    // 判断是否是目录 is_dir is_file
    // 凡是有路径 (相对和绝对) 
    $path1 = '/file-pm';
    $path2 = './dir';
    $path3 = './a';
    if(is_dir($path2)){
        echo '目录<br>';
    }

    // 获取路径信息 pathinfo 
    $path = '/web/file/a.jpg';
    echo pathinfo($path,PATHINFO_FILENAME),'<BR>';

    // 得到的是相对当前操作系统的绝对路径
    echo realpath('./testRead.php'),'<br>';
    // 实际项目中用的路径 =>  相对于 apache-htdocs 的绝对路径
    // 类似   /file-pm/

    echo filetype('QQ.lnk'),'<br>';
    echo filetype('a');
    // http,html,php   
    // linux = linux is not unix     操作系统 => unix 
    // 内核都属于 unix 系列 (mac,)
    

    // 硬盘信息(剩余空间,总空间)


    // => 文件操作
    // 拷贝,删除,重命名


    // 文件权限  -> 讲linux 
    // 读写执行   用户/组