<?php
//连接数据库
$connect = mysqli_connect('localhost', 'root', 'wmj3252745330', 'student');
mysqli_set_charset($connect, 'utf8');
//查询数据
$sql = "select * from teaching";
$query = mysqli_query($connect, $sql);
//返回结果数量
$num = mysqli_num_rows($query);
//定义每页显示几条
$pageSize = 5;
//一共分几页
$totalPage = ceil($num / $pageSize);
//获取当前页
if ($_GET['page'])
{
    $page = $_GET['page'];
}
else
{
    $page = 1;
}
//在当前页的基础上确定上一页
if ($page == 1)
{
    $up = 1;
}
else
{
    $up = $page - 1;
}
//在当前页的基础上确定下一页
if ($page == $totalPage)
{
    $next = $totalPage;
}
else
{
    $next = $page + 1;
}
//求出limit的第一个参数
$start = ($page - 1) * $pageSize;
$sql = "select * from teaching limit $start, $pageSize";
$res = mysqli_query($connect, $sql);
$result = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>
<!--教师课程查询页面-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>课程查询</title>
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
		<h2>课程查询</h2>
		<table>
			<tr>
				<td>教师编号：</td>
				<td>课程编号：</td>
				<td>学期：</td>
            </tr>
            <!--输出数据库的数据-->
            <?php foreach ($result as $v) { ?>
                <tr>
                    <td><?php echo $v['t_id']; ?></td>
                    <td><?php echo $v['cid']; ?></td>
                    <td><?php echo $v['cterm']; ?></td>
                </tr>
            <?php } ?>
        </table>
            <a href="kechengchaxun.php?page=<?php echo $up; ?>"><button>上一页</button></a>
            <a href="kechengchaxun.php?page=<?php echo $next; ?>"><button>下一页</button></a>
            <input type="button" value="返回主界面" onclick="window.location.href='student.php'">
		<div/>
	</body>
</html>