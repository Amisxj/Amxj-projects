<!--增加数据界面-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>增加数据</title>
    <style type="text/css">
        table,th,td{border:1px solid black;}
        table{border-collapse:collapse;
            width:500px;}
        div{
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);}
        }
    </style>
</head>
<h1>添加学生信息</h1>
<body background="teacher.jpg">
<form action="zengjia.php" method="post">
    <table>
        <tr>
            <td>学号：</td>
            <td><input type="text" name="xuehao" /></td>
        </tr>
        <tr>
            <td>姓名：</td>
            <td><input type="text" name="xingming" /></td>
        </tr>
        <tr>
            <td>班级：</td>
            <td><input type="text" name="banji" /></td>
        </tr>
        <tr>
            <td>性别：</td>
            <td><input type="text" name="xingbie" /></td>
        </tr>
        <tr>
            <td>专业：</td>
            <td><input type="text" name="zhuanye" /></td>
        </tr>
        <tr>
            <td>出生日期：</td>
            <td><input type="text" name="shengri" /></td>
        </tr>
        <tr>
            <td>身份证：</td>
            <td><input type="text" name="shenfen" /></td>
        </tr>
        <tr>
            <td>电话：</td>
            <td><input type="number" name="dianhua" /></td>
        </tr>
        <tr>
            <td>住址：</td>
            <td><input type="text" name="zhuzhi" /></td>
        </tr>
        <tr>
            <td>学分：</td>
            <td><input type="text" name="xufen" /></td>
        </tr>
    </table>
    <input type="button" value="增加" onclick="window.location.href='Gstudent.php'">
    <input type="button" value="返回" onclick="window.location.href='Gstudent.php'">
</form>
</body>
</html>
<!--增加数据库-->
<?php
//连接数据库
$connect = mysqli_connect('localhost', 'root', 'wmj3252745330', 'student');
//获取增加的数据
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
//编写插入数据库语句
$sql="insert into student (s_no,s_name,s_class,s_gender,s_major,s_birthday,s_id,s_phone,s_address,s_credits) values('$xuehao','$xingming','$banji','$xingbie','$zhuanye','$shengri','$shenfen','$dianhua','$zhuzhi','$xuefen') ";
//判断是否添加成功
if(isset($_POST["submit"])):
    $r=mysqli_query($connect,$sql);
    if($r){
        header("location:Gstudent.php");
    }else{
        echo "添加失败";
    }
endif;