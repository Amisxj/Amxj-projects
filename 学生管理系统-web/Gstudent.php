<?php
//连接数据库
$connect = mysqli_connect('localhost', 'root', 'wmj3252745330', 'student');
mysqli_set_charset($connect, 'utf8');
//查询总条数
$sql = "select * from student";
$query = mysqli_query($connect, $sql);
//返回数据库的数量
$num = mysqli_num_rows($query);
//定义每页显示几条
$pageSize = 5;
// 一共分几页
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
$sql = "select * from student limit $start, $pageSize";
$res = mysqli_query($connect, $sql);
$result = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>
<!--管理学生的页面-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>学生信息</title>
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
	<body background="teacher.jpg">
		<div>
		<h3>修改学生信息</h3>
            <form  action="shanchu.php" method="get">
		<table >
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
            <!--输出数据库的数据-->
                <?php
                foreach ($result as $v)
                {
                    ?>
            <tr>
                <td><?php echo $v['s_no'];?></td>
                <td><?php echo $v['s_name']; ?></td>
                <td><?php echo $v['s_class']; ?></td>
                <td><?php echo $v['s_gender']; ?></td>
                <td><?php echo $v['s_major']; ?></td>
                <td><?php echo $v['s_birthday']; ?></td>
                <td><?php echo $v['s_id']; ?></td>
                <td><?php echo $v['s_phone']; ?></td>
                <td><?php echo $v['s_address']; ?></td>
                <td><?php echo $v['s_credits']; ?></td>
                <?php echo "<td>
                        <!--修改删除功能-->
                    <a href='xiugai.html?id={$v['s_no']}' onclick=toUpdate(this)>修改</a>
                    <a href='shanchu.php?id={$v['s_no']}' onclick=remove(this)>删除</a>
                       </td>" ?>
            </tr>
            <?php } ?>
        </table>
            </form>
            <input type="button" value="返回主页" onclick="window.location.href='teacher.php'">
            <a href="Gstudent.php?page=<?php echo $up; ?>"><button>上一页</button></a>
            <a href="Gstudent.php?page=<?php echo $next; ?>"><button>下一页</button></a>
            <input type="button" value="增加" onclick="window.location.href='zengjia.php'">
	</body>
</html>
<!--显示是否删除-->
<script type="text/javascript">
    function remove(ele){
        var conf=confirm('确定要删除吗？');
        if(conf===true){
            let id=ele.parentElement.parentElement.children[0].innerText;
            window.location.href="shanchu.php?id="+id;
        }
    }
    function toUpdate(ele){
        let id=ele.parentElement.parentElement.children[0].innerText;
        window.location.href="xiugai.html?id="+id;
    }
</script>