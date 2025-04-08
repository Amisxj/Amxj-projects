<?php
//数据库连接
$connect = mysqli_connect('localhost', 'root', 'wmj3252745330', 'student');
//接受数据
$id=$_POST['id'];
$xuehao=$_POST['s_no'];
$xingming=$_POST['s_name'];
$banji=$_POST['s_class'];
$xingbie=$_POST['s_gender'];
$zhuanye=$_POST['s_major'];
$shengri=$_POST['s_birthday'];
$shenfen=$_POST['s_id'];
$dianhua=$_POST['s_phone'];
$zhuzhi=$_POST['s_address'];
$xuefen=$_POST['s_credits'];
//查询数据并且修改
$sql="update student set s_no='$xuehao',s_name='$xingming',s_class='$banji',s_gender='$xingbie',s_major='$zhuanye',s_id='$shenfen',s_birthday='$shengri',s_phone='$dianhua',s_address='$zhuzhi',s_credits='$xuefen' where s_no='$xuehao'";
//是否修改成功
$r=mysqli_query($connect,$sql);
if($r)
{
    header("location:Gstudent.php");
}
?>
