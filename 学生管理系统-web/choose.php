<?php
//连接数据库并且设置字符集
$con=mysqli_connect('localhost', 'root', 'wmj3252745330', 'student');
mysqli_set_charset($con, 'utf8');
//从登录页接受来的数据
$name=$_POST['username'];
$pwd=$_POST['password'];
//定义全局变量，方便使用
session_start();
$_SESSION['name']=$name;
//通过判断，实现不同的登陆者
$s=$_POST['1'];
$t=$_POST['2'];
$first="select * from denglu where denglu_yhm='$name' AND denglu_mima='$pwd'and denglu_quanxian='$s'";
$second="select * from denglu where denglu_yhm='$name' AND denglu_mima='$pwd'and denglu_quanxian='$t'";
$again=mysqli_query($con,$second);
$result=mysqli_query($con,$first);
$row=mysqli_num_rows($result);
$te=mysqli_num_rows($again);
//根据条件实现界面的不同
if($row)
{
    echo "<script>alert('登录成功');window.location ='student.php'</script>";
}
elseif($te)
{
    echo "<script>alert('登录成功');window.location ='teacher.php'</script>";
}
else{
    echo "<script>alert('密码错误，请重新输入');window.location ='denglu.html'</script>";
}




