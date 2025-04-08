<?php
    header('Content-type:text/html; charset=utf-8');
    //接受数据
    $name = $_POST['name'];
    $address = $_POST['address'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $range =$_POST['range'];
    $telephone = $_POST['telephone'];
    // 允许上传的图片后缀
    $allowedExits = array("gif", "jpeg", "jpg", "png","JPG","wbep");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);     // 获取文件后缀名
    $url = addslashes($_FILES["file"]["name"]); //图片地址
    //创建连接
    $conn = new mysqli('localhost','root','wmj3252745330','chandian','3305');
    //检测连接
    if($conn->connect_error){
        die('连接失败：'.$conn->connect_error);
    }
    else{
        //判断上传的数据是否符合规范
        $filename =$_FILES["file"]["type"];
        if(!get_magic_quotes_gpc()) {
            $name = addslashes($name);
            $range = addslashes($range);
            $address = addslashes($address);
            $type = addslashes($type);
            $price = addslashes($price);
            $telephone = addslashes($telephone);
        }
        $find = (int)"select * from restaurant";
        // 查询总条数
        $find = "select * from restaurant";
        $query = mysqli_query($conn, $find);
        // 返回结果集中行的数量,id自增
        $num = mysqli_num_rows($query) + 1 ;
        if((empty($name)) && (empty($range))) {
            echo"<script>alert('店名,地址不能为空!');history.go(-1);</script>";
        }else {
            if ((($_FILES["file"]["type"] == "image/gif")
                    || ($_FILES["file"]["type"] == "image/jpeg")
                    || ($_FILES["file"]["type"] == "image/jpg")
                    || ($_FILES["file"]["type"] == "image/png")
                    || ($_FILES["file"]["type"] == "image/JPG")
                    || ($_FILES["file"]["type"] == "image/webp")
                )
                && ($_FILES["file"]["size"] < 2097152)   // 小于2mb的文件
                && in_array($extension, $allowedExits))
            {
                if ($_FILES["file"]["error"] > 0)
                {
                    echo "<script>alert('图片上传错误');history.go(-1);</script>" . $_FILES["file"]["error"] . "<br>";
                } else{
                    // 判断当前目录下的upload目录是否存在该文件，如果没有upload目录，你需要创建它upload
                    if (file_exists("upload/". $range ."/".$name."/" . $_FILES["file"]["name"]))
                    {
                        echo " <script>alert('该图像已存在');history.go(-1);</script> ";
                    } else {
                        // 创建文件夹
                        if (!mkdir("upload/". $range ."/".$name."/", 0777, true)) {
                            die('无法创建文件夹！');
                        }else {
                            // 将文件上传到对应目录下，并将数据插入到数据库
                            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/". $range ."/".$name."/" .$_FILES["file"]["name"]);
                            $sql = "REPLACE INTO restaurant (id ,name , `range` ,type,price,telephone,image,address) VALUES ('$num','$name','$range','$type','$price','$telephone','$url','$address')";
                            if ($conn->query($sql) === TRUE) {
                                echo "<script>alert('信息插入成功');</script>";
                                header('refresh:0.1;url=rooter.php');
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        }
                    }
                }
            } else {
                echo "<script>alert('图片格式错误');history.go(-1);</script>";
            }
        }
    }
    mysqli_close($conn);



