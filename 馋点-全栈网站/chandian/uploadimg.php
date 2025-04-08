<?php
    header('Content-type:text/html; charset=utf-8');
    //接受数据
    $id =$_GET['id'];
    // 允许上传的图片后缀
    $allowedExits = array("gif", "jpeg", "jpg", "png","JPG");
    $temp = explode(".", $_FILES["changeFile"]["name"]);
    $extension = end($temp);     // 获取文件后缀名
    $url = addslashes($_FILES["changeFile"]["name"]); //图片地址
    //创建连接
    $conn = new mysqli('localhost','root','wmj3252745330','chandian','3305');
    //检测连接
    if($conn->connect_error){
        die('连接失败：'.$conn->connect_error);
    }
    else{
        $filename =$_FILES["changeFile"]["type"];
        if ((($_FILES["changeFile"]["type"] == "image/gif")
                || ($_FILES["changeFile"]["type"] == "image/jpeg")
                || ($_FILES["changeFile"]["type"] == "image/jpg")
                || ($_FILES["changeFile"]["type"] == "image/png")
                || ($_FILES["changeFile"]["type"] == "image/JPG")
            )
            && ($_FILES["changeFile"]["size"] < 2097152)   // 小于2mb的文件
            && in_array($extension, $allowedExits))
        {
            if ($_FILES["changeFile"]["error"] > 0)
            {
                echo "<script>alert('图片上传错误');history.go(-1);</script>" . $_FILES["changeFile"]["error"] . "<br>";
            } else{

                //查询图片地址
                $sql1 = "SELECT * FROM restaurant WHERE id =$id ";
                $res1 = mysqli_query($conn, $sql1);
                if($res1->num_rows>0){
                    $row1 = $res1->fetch_assoc();
                    $imagePath = "upload/".$row1['range']."/".$row1['name']."/".$row1['image']; //要删除的图片文件的路径
                    if (file_exists($imagePath)) {
                        if (unlink($imagePath)) {
                            //将文件上传到 upload 目录下，并将数据插入到数据库
                            move_uploaded_file($_FILES["changeFile"]["tmp_name"], "upload/". $row1['range'] ."/".$row1['name']."/". $_FILES["changeFile"]["name"]);
                            $sql = "UPDATE  restaurant SET image='$url' where id='$id'";
                            if ($conn->query($sql) === TRUE) {
                                echo "<script>alert('更新图片成功');</script>";
                                header('refresh:0.1;url=rooter.php');
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        } else {
                            echo "<script>alert('无法删除图片文件！')</script>";
                        }
                    } else {
                        echo "<script>alert('图片在文件中不存在！')</script>";
                    }
                }else {
                    echo "<script>alert('图片地址在数据库中不存在！')</script>";
                }
            }
        }
        else {
            echo "<script>alert('图片格式错误');history.go(-1);</script>";
        }
    }
    //关闭连接
    mysqli_close($conn);
