<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>成绩列表</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1>学生成绩管理系统</h1>
<table>
    <?php
    session_start();
    if(!$_SESSION['user.account']){

        //print_r($_SESSION['user.account']);
        header('location:login.php');
    }

    include("conn.php");
    $sql="select * from student";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["age"]; ?></td>
                <td><?php echo $row["result"]; ?></td>
                <td>
                    <button onclick="toUpdate(this)">修改</button>
                    <button onclick="remove(this)">删除</button>
                </td>
            </tr>
            <?php
        }
    }
    ?>
    <tr>
        <td colspan="5"><a href="insert.php"><button>添加
                </button></a></td>
    </tr>
</table>
</body>
</html>
<script type="text/javascript">
    function remove(ele){
        var conf=confirm('确定要删除吗？');
        if(conf==true){
            let id=ele.parentElement.parentElement.children[0].innerText;
            window.location.href="remove_server.php?id="+id;
        }
    }
    function toUpdate(ele){
        let id=ele.parentElement.parentElement.children[0].innerText;
        window.location.href="update.php?id="+id;
    }
</script>

