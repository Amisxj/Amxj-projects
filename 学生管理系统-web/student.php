<?php
//连接数据库
$link=mysqli_connect('localhost', 'root', 'wmj3252745330', 'student');
mysqli_set_charset($link, 'utf8');
//获取登录账号
session_start();
$username=$_SESSION['name'];
//编写查询数据库
$sql = "SELECT * FROM student where s_no='$username'";
//执行查询操作、处理结果
$result = mysqli_query($link, $sql);
if (!$result)
{
    exit('查询sql语句执行失败。错误信息：' . mysqli_error($link));
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
//编写查询数量sql语句
$sql = 'SELECT COUNT(*) FROM `student`';
//执行查询操作、处理结果
$n = mysqli_query($link, $sql);
if (!$n)
{
    exit('查询数量sql语句执行失败。错误信息：' . mysqli_error($link));
}
$num = mysqli_fetch_assoc($n);
//将一维数组的值转换为一个字符串
$num = implode($num);
?>
<!--学生界面-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>学生界面</title>
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
<body background="student.jpeg">
<div>
    <h2>学生信息查询</h2>
    <input type="button" value="选修科成绩查询" onclick="window.location.href='xuanxiuchengji.php'">
    <input type="button" value="必修科成绩查询" onclick="window.location.href='bixiuchengji.php'">
    <input type="button" value="学分查询" onclick="window.location.href='kechengxuefen.php'">
    <input type="button" value="重新登录" onclick="window.location.href='denglu.html'"><br/>
    <input type="button" value="教师信息查询" onclick="window.location.href='jiaoshixinxi.php'">
    <input type="button" value="课程查询" onclick="window.location.href='kechengchaxun.php'" >
    <input type="button" value="教师课程查询" onclick="window.location.href='jiaoshikecheng.php'"><br/>
    <table>
        <tr>
            <th>学号：</th>
            <th>名字：</th>
            <th>班级：</th>
            <th>性别：</th>
            <th>专业：</th>
            <th>出生日期：</th>
            <th>身份证：</th>
            <th>电话：</th>
            <th>住址：</th>
            <th>学分：</th>
        </tr>
        <!--输出数据库中的数据-->
        <?php
        foreach ($data as $key => $value)
        {
            foreach ($value as $k => $v)
            {
                $arr[$k] = $v;
            }
            echo "<tr>";
            echo "<td>{$arr['s_no']}</td>";
            echo "<td>{$arr['s_name']}</td>";
            echo "<td>{$arr['s_class']}</td>";
            echo "<td>{$arr['s_gender']}</td>";
            echo "<td>{$arr['s_major']}</td>";
            echo "<td>{$arr['s_birthday']}</td>";
            echo "<td>{$arr['s_id']}</td>";
            echo "<td>{$arr['s_phone']}</td>";
            echo "<td>{$arr['s_address']}</td>";
            echo "<td>{$arr['s_credits']}</td>";
            echo "</tr>";
        }
        //关闭连接
        mysqli_close($link);
        ?>
    </table>
</div>
</body>
</html>




