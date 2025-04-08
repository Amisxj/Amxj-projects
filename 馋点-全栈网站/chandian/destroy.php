<?php
    //消除会话(用户的登录)的数据
    setcookie("username", "", time()-1200);

    //重定向到登录页面
    header("Location: index.php");
    //执行后退出
    exit;
