<?php
//连接数据库
$link = mysqli_connect('localhost', 'root', 'wmj3252745330', 'student');
mysqli_set_charset($link, 'utf8');
//获取登录账号
$id=$_GET['id'];
//编写查询sql语句
$sql = "SELECT * FROM teacher where t_id={$id}";
//执行查询操作、处理结果集
$result = mysqli_query($link, $sql);
if (!$result)
{
    exit('查询sql语句执行失败。错误信息：' . mysqli_error($link));
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
//编写查询数量sql语句
$sql = 'SELECT COUNT(*) FROM `teacher`';
//执行查询操作、处理结果集
$n = mysqli_query($link, $sql);
if (!$n)
{
    exit('查询数量sql语句执行失败。错误信息：' . mysqli_error($link));
}
$num = mysqli_fetch_assoc($n);
//将一维数组的值转换为一个字符串
$num = implode($num);
?>
<!--教师个人信息显示页面-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>教师界面</title>
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
<body background="student.jpg">
<div>
    <h1>个人教师信息</h1>
    <table>
        <input type="button" value="返回" onclick="window.location.href='jiaoshikecheng.php'">
        <tr>
            <td>教师编号：</td>
            <td>姓名：</td>
            <td>学院：</td>
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
            echo "<td>{$arr['t_id']}</td>";
            echo "<td>{$arr['t_name']}</td>";
            echo "<td>{$arr['t_college']}</td>";
            echo "</tr>";
        }
        //关闭连接
        mysqli_close($link);
        ?>
    </table>
</div>
</body>
</html>