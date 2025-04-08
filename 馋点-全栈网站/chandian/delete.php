<?php
    $id = $_GET['id'];
    //创建连接
    $conn = new mysqli('localhost','root','wmj3252745330','chandian','3305');
    // 检查连接是否成功
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    else {

        $sql1 ="SELECT * FROM restaurant where id =$id";
        $result2 = $conn->query($sql1);
        $row2 = $result2->fetch_assoc();
        $filePath = './upload/'.$row2['range'].'/'.$row2['name'].'/'.$row2['image']; // 要删除的文件的路径
        if (file_exists($filePath)) {
            if (unlink($filePath)) {
                // 删除数据的SQL语句
                $sql = "DELETE FROM restaurant WHERE id='$id'";
                // 执行SQL语句
                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('删除数据成功')</script>";
                    header('refresh:0.1;url=rooter.php');
                } else {
                    echo "删除数据时出现错误: " . $conn->error;
                }
            } else {
                echo "<script>alert('文件删除失败！')</script>";
                header('refresh:0.1;url=rooter.php');
            }
        } else {
            echo "文件不存在！";
        }
    }
    // 关闭数据库连接
    mysqli_close($conn);



