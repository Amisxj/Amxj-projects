<?php
    header('Content-type:text/html; charset=utf-8');
    //接受数据
    $id =$_GET['id'];
    $name = $_POST['name1'];
    $range =$_POST['range1'];
    $address = $_POST['address1'];
    $type = $_POST['type1'];
    $price = $_POST['price1'];
    $evaluate =$_POST['evaluate1'];
    $telephone = $_POST['telephone1'];
    //创建连接
    $conn = new mysqli('localhost','root','wmj3252745330','chandian','3305');
    //检测连接
    if($conn->connect_error){
        die('连接失败：'.$conn->connect_error);
    }
    else{
        if((empty($name)) && (empty($address))) {
            echo"<script>alert('店名,地址不能为空!');history.go(-1);</script>";
        }else {
            //通过id值更新数据
            $sql = "UPDATE  restaurant SET name='$name', `range`='$range', type='$type', price='$price', telephone='$telephone',evaluate='$evaluate' where id='$id'";
            if (mysqli_query($conn,$sql)) {
                echo "<script>alert('信息更新成功')</script>";
                header('refresh:0.1;url=rooter.php');
            }else {
                echo "<script>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
            }
        }
    }
    //关闭连接
    mysqli_close($conn);


