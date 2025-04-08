<?php
//连接数据库
$link=mysqli_connect('localhost', 'root', 'wmj3252745330', 'student');
mysqli_set_charset($link, 'utf8');
//获取登录账号
session_start();
$username=$_SESSION['name'];
//查询账号
$sql = "SELECT * FROM score where s_no='$username'";
//执行查询操作、处理结果
$result = mysqli_query($link, $sql);
//判断是否成功
if (!$result)
{
    exit('查询sql语句执行失败。错误信息：' . mysqli_error($link));
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
//查询学分
$sql = 'SELECT COUNT(*) FROM `score`';
//执行查询操作、处理结果
$n = mysqli_query($link, $sql);
if (!$n)
{
    exit('查询数量sql语句执行失败。错误信息：' . mysqli_error($link));
}
$num = mysqli_fetch_assoc($n);
//将一维数组的值转换为成为一个字符串
$num = implode($num);
?>
<!--必修成绩的查询页面-->
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
			<h2>必修科成绩查询</h2>
		<table>
            <tr>
            <th>学号：</th>
            <th>课程编号：</th>
            <th>学期：</th>
            <th>分数：</th>
            </tr>
            <?php
            //输出查询数据库的数据
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
                echo "<td>{$arr['s_score']}</td>";
            }
            //关闭数据库的连接
            mysqli_close($link);
            ?>
        </table>
        //返回页面
            <input type="button" value="返回主界面" onclick="window.location.href='student.php'">
	</body>
</html>
