<?php
    header('Content-type:text/html; charset=utf-8');
    //接受数据
    $username = $_POST['username'];
    $password = $_POST['password'];
    $admin = $_POST['admin'];
    $password1 =$_POST['password1'];
    $conn = new mysqli('localhost','root','wmj3252745330','chandian','3305');
    //检测连接
    if($conn->connect_error){
        die('连接失败：'.$conn->connect_error);
    }
    else{
        if(empty($username)&&empty($password)&&empty($admin)&&empty($password1)){
            echo "<script>alert('账户、密码错误,返回登录页面');history.go(-1);</script>";
        }
        elseif((empty($username)&&(empty(($password))))){
            $sql = "SELECT account, password FROM admin where account = '$admin' AND password = '$password1'";
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);
            if (($admin != $row['account']) || ($password1 != $row['password'])){
                //账号密码错误的情况下 同样和空处理一样
                echo "<script>alert('管理员账户、密码错误,返回登录页面');history.go(-1);</script>";
                exit;
            }elseif($password1 === $row['password']){
                //登录成功，跳转到管理员界面
                header('refresh:1;url=rooter.php');
            }else {
                echo "<script>alert('管理员账户、密码错误,返回登录页面');history.go(-1);</script>";
                exit;
            }
        }elseif ((empty($admin)&&(empty(($password1))))) {
            $sql = "SELECT account, password FROM user where account = '$username' AND password = '$password'";
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);
            if (($username != $row['account']) || ($password != $row['password'])){
                //账号密码错误的情况下 同样和空处理一样
                header('refresh:3;url=index.html');
                echo "<script>alert('用户账户、密码错误,返回登录页面');history.go(-1);</script>";
                exit;
            }elseif($password === $row['password']){
                //登录成功后创建cookie，将用户账号保存到后端
                setcookie("username", $username, time()+1200); //有效期20分钟
                if (isset($_SERVER['HTTP_REFERER'])) {
                    $referer = $_SERVER['HTTP_REFERER'];
                    $parts = parse_url($referer);
                    $page = basename($parts['path']);
                    if($page == 'login.html'){
                        header('refresh:0.1;url=index.php');
                    }else if ($page == 'detail.php'){
                        header("Location: " . $referer);
                    }
                } else {
                    echo "无法确定来源页面。";
                }
            }else {
                echo "<script>alert('用户账户、密码错误,返回登录页面');history.go(-1);</script>";
                exit;
            }
        }
    }



