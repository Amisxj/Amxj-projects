<?php
//连接数据库
$link=mysqli_connect('localhost', 'root', 'wmj3252745330', 'student');
mysqli_set_charset($link, 'utf8');
//获取登录账号
session_start();
$username=$_SESSION['name'];
//编写查询数据库
$sql = "SELECT * FROM sc where s_no='$username'";
//执行查询操作、处理结果
$result = mysqli_query($link, $sql);
if (!$result)
{
    exit('查询sql语句执行失败。错误信息：' . mysqli_error($link));
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
//编写查询数据库
$sql = 'SELECT COUNT(*) FROM `sc`';
//执行查询操作、处理结果
$n = mysqli_query($link, $sql);
if (!$n)
{
    exit('查询数据库执行失败。错误信息：' . mysqli_error($link));
}
$num = mysqli_fetch_assoc($n);
//将一维数组的值转换为一个字符串
$num = implode($num);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>成绩查询</title>
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
			<h2>选修课成绩查询</h2>
		<table>
			<tr>
				<td>学号：</td>
				<td>课程编号:</td>
				<td>学期：</td>
				<td>成绩：</td>
			</tr>
            <!--输出数据库的数据-->
            <?php
            foreach ($data as $key => $value)
            {
                foreach ($value as $k => $v)
                {
                    $arr[$k] = $v;
                }
                echo "<tr>";
                echo "<td>{$arr['s_no']}</td>";
                echo "<td>{$arr['cid']}</td>";
                echo "<td>{$arr['cterm']}</td>";
                echo "<td>{$arr['degree']}</td>";
            }
            //关闭连接
            mysqli_close($link);
            ?>
        </table>
            <input type="button" value="返回主界面" onclick="window.location.href='student.php'">
	</body>
</html>
