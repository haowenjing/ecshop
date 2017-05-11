<?php
    // 框架 -> 为什么要安装 -> (数据库信息,基本信息,默认数据)
    // 判断是否安装 -> 1.跳转到安装 -> 2.显示首页


    // 1.跳转到安装
    // 如何判断 -> install.lock
    if(!file_exists('install.lock')){
        header('Location:install.php');
        die();
    }
    // 2.显示首页
    echo '欢迎来到我的博客';
