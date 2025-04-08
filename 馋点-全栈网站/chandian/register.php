<?php
header('Content-type:text/html; charset=utf-8');
//接受数据
$account = $_POST['account'];
$password = $_POST['password'];
$password1 = $_POST['password1'];
//创建连接
$conn = new mysqli('localhost','root','wmj3252745330','chandian','3305');
//检测连接
if($conn->connect_error){
    die('连接失败：'.$conn->connect_error);
}
else{
    //判断上传的数据是否符合规范
    if(!get_magic_quotes_gpc()) {
        $account = addslashes($account);
        $password = addslashes($password);
        $password1 = addslashes($password1);
    }
    if($password == $password1) {
        //判断用户明和数据是否相等
        $equal ="select * from user where account ='$account' and password ='$password'";
        $result =mysqli_query($conn,$equal);
        if( mysqli_num_rows($result)>0){
            echo "<script>alert('该用户已经存在');history.go(-1);</script>";
        }else {
            // 查询总条数
            $find = "select * from user";
            $query = mysqli_query($conn, $find);
            // 返回结果集中行的数量,id自增
            $num = mysqli_num_rows($query) + 1 ;
            $sql = "INSERT INTO user (userid ,account,password) VALUES ('$num','$account','$password')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('注册成功,即将跳转到登录页面');</script>";
                //登录成功，跳转到管理员界面
                header('refresh:1;url=login.html');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}



