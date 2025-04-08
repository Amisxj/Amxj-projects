<?php
    //评价
    header('Content-type:text/html; charset=utf-8');
    //接受数据
    $restaurant = $_GET['restaurant'];
    $range = $_GET['range'];
    $name =  $_COOKIE['username'];
    $message =$_GET['message'];
    $datetime = date("Y-m-d H:i:s");
    $restaurant = $_COOKIE['name'];;
//创建连接
    $conn = new mysqli('localhost','root','wmj3252745330','chandian','3305');
    //检测连接
    if($conn->connect_error){
        die('连接失败：'.$conn->connect_error);
    }
    else{
        // 查询总条数
        $find = "select * from messageboard";
        $query = mysqli_query($conn, $find);
        // 返回结果集中行的数量,id自增
        $num = mysqli_num_rows($query) + 1 ;
        if(empty($message)) {
            echo"<script>alert('不能发表空评论.$message');history.go(-1);</script>";
        }else {
            $sql = "REPLACE INTO messageboard (mid ,restaurant , `name` ,datetime,message) VALUES ('$num','$restaurant','$name','$datetime','$message')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('发布成功');history.back()</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    mysqli_close($conn);



