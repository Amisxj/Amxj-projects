<!--店名列表-->
<?php
    $range =$_GET["range"];// 连接数据库
    $conn = new mysqli('localhost', 'root', 'wmj3252745330', 'chandian','3305');
    // 检查连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    // 查询总条数
    $sql = "select * from restaurant where `range`='$range'";
    $query = mysqli_query($conn, $sql);
    // 返回结果集中行的数量
    $num = mysqli_num_rows($query);
    // 定义每页显示几条
    $pageSize = 6;
    // 一共分几页
    $totalPage = ceil($num / $pageSize);
    // 获取当前页
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    // 在当前页的基础上确定上一页
    if ($page == 1) {
        $up = 1;
    } else {
        $up = $page - 1;
    }
    // 在当前页的基础上确定下一页
    if ($page == $totalPage) {
        $next = $totalPage;
    } else {
        $next = $page + 1;
    }
    // 求出 limit 的第一个参数
    $start = ($page - 1) * $pageSize;
    //查询数据库
    $sql = "select * from restaurant where `range`='$range' limit $start, $pageSize";
    $res = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $range?></title>
    <link rel="shortcut icon" href="fonts/favicon.ico" />
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="css/list.css">
</head>
<body>
    <div class="container">
        <div class="header top_header">
            <ul class="left ">
                <a href="index.php">
                    <div class="left_back">
                        <li><img src="fonts/fanghui.png" alt=""></li>
                        <p>返回</p>
                    </div>
                </a>
            </ul>
            <ul class="logo">
                <li><img src="fonts/logo.png" alt=""></li>
                <h1><?php echo $range;?></h1>
            </ul>
        </div>
        <div class="content">
            <div class="left">
                <ul class="header">
                    <li><a href="#">默认排序</a></li>
                    <li><a href="#">价格排序</a></li>
                    <li><a href="#">浏览最多</a></li>
                    <li><a href="#">好评最多</a></li>
                </ul>
                <Ul class="main">
                    <?php foreach ($result as $v) { ?>
                        <tr>
                            <?php
                            $name =$v["name"];
                            // 得分执行查询语句，获取字段平均值
                            $sql2 = "SELECT AVG(evaluate) AS average_value FROM messageboard where restaurant = '$name'";
                            $result2 = $conn->query($sql2);
                            // 检查查询结果是否存在
                            // 输出平均值
                            $row2 = $result2->fetch_assoc();
                            $score = floor($row2["average_value"]);
                            echo "<a class='location' href='detail.php?range=".$v['range']."&name=".$v['name']."' target='_blank'><li>
                                    <div class='cover'><img class='food' src='./upload/".$v['range']."/".$v['name']."/".$v["image"]."' alt=''></div>
                                    <div class=\"text\">
                                        <h4>".$v["name"]."（".$v["type"]."）</h4>
                                        <ul>
                                            <div>好评度：</div>                 
                                            <script>starchange();alert('测试')</script>
                                            <div>
                                                <img class='star' src='./images/list-image/star_empty.png' id='star".$v["id"]."'>
                                                <img class='star' src='./images/list-image/star_empty.png' id='star".$v["id"]."'>
                                                <img class='star' src='./images/list-image/star_empty.png' id='star".$v["id"]."'>
                                                <img class='star' src='./images/list-image/star_empty.png' id='star".$v["id"]."'>
                                                <img class='star' src='./images/list-image/star_empty.png' id='star".$v["id"]."'>
                                            </div>
                                        </ul><div class=\"li_content\">";
                            // 最新留言展示前面
                            $sql1 = "SELECT * FROM messageboard where restaurant = '$name' ORDER BY datetime DESC  ";
                            $result1 = $conn->query($sql1);
                            if($result1->num_rows>0){
                                //输出数据
                                $num =0;
                                while($row1 = $result1->fetch_assoc()){
                                     $num++;
                                     if(($row1["restaurant"]==$v["name"])&&($num<=2)){                                    ?>
                                        <div>
                                            <div><?php echo $row1["name"]?>：</div>
                                            <div><?php echo $row1["message"]?></div>
                                        </div>
                                    <?php
                                    }
                                }
                            } else {
                                echo"暂无评价";
                            }
                            echo "
                                        </div>
                                        <span>人均<span>".$v["price"]."</span></span>
                                        <p>".$v["address"]."</p>
                                    </div>
                                </li></a>";
                            ?>
                        </tr>
                    <?php } ?>

                    <div class="bottom_button">
                        <a href="list.php?page=<?php echo $up; ?>&range=<?php echo $range?>">
                            <div class="button_prev">
                            <span>
                                左翻
                                <span>←&nbsp;</span>
                            </span>
                            </div>
                        </a>

                        <div class="button_text">
                            <span>
                                页数
                                <span><?php echo "$page/$totalPage"?></span>
                            </span>
                        </div>

                        <a href="list.php?page=<?php echo $next; ?>&range=<?php echo $range?>">
                            <div class="button_current">
                            <span>
                                右翻
                                <span>&nbsp;→</span>
                            </span>
                            </div>
                        </a>
                    </div>
                </Ul>
            </div>
            <div class="right">
                <div class="right_header">
                    <h2>猜你喜欢</h2>
                </div>
                <div class="body">
                    <?php
                        //查询数据库
                        $sql5 = "SELECT * FROM restaurant  WHERE (evaluate>4) ORDER BY RAND() LIMIT 5";
                        $res5 = mysqli_query($conn, $sql5);
                        $result5 = mysqli_fetch_all($res5, MYSQLI_ASSOC);
                    ?>
                    <?php foreach ($result5 as $fond) { ?>
                            <?php
                            echo "<li>
                                    <a href='detail.php?name=".$fond['name']."&range=".$fond['range']."'>
                                    <img src='upload/".$fond['range']."/".$fond['name']."/".$fond['image']."'>
                                    <p>".$fond['name']."</p>
                                    <p>".$fond['type']."</p>
                                    <p>".$fond['range']."</p>
                                    </a>
                                  </li>";
                            ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function starchange(){
        const score = <?php echo $score;?>;
        alert(typeof score);
        const images = document.querySelectorAll('#star');
        for(let i=0;i<score;i++){
            images[i].src ="images/星星1.png"
        }
    }
</script>
</html>