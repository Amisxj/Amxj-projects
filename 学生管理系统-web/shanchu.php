<?php
//连接数据库
$link=mysqli_connect('localhost', 'root', 'wmj3252745330', 'student');
mysqli_set_charset($link, 'utf8');
if(mysqli_connect_errno())
{
    echo"连接失败".mysqli_connect_error();
}
//获取需要删除的信息
$id=$_GET['id'];
echo "$id";
//删除指定数据
$sql="delete from student where s_no={$id}";
$r=mysqli_query($link,$sql);
if($r)
{
    header("location:index.php");
}
$result=mysqli_query($link,$sql);
//判断是否删除成功
if (!$result)
{
    echo "删除失败";
}
else
{
    header("location:Gstudent.php");
}

