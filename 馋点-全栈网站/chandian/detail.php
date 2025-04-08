<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>商品详情</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="fonts/favicon.ico" />
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/alert.css">
    <link rel="stylesheet" href="./css/detail.css">
</head>
<body>
<?php
    $range =$_GET['range'];
    $name =$_GET['name'];
    setcookie("name", $name, time()+60); //有效期20分钟
//创建连接
    $conn = new mysqli('localhost','root','wmj3252745330','chandian','3305');
    //检测连接
    if($conn->connect_error){
        die('连接失败：'.$conn->connect_error);
    }else{
        //查询数据库
        $sql = "select * from restaurant where name ='$name' ";
        $res = mysqli_query($conn, $sql);
        $result = $res -> fetch_assoc();
        // 返回结果集中行的数量
        $num = mysqli_num_rows($res);
        if( $num !=1 ) {
            echo "<script>alert('查询错误')</script>";
        }
    }
?>
<div class="xtx-wrapper">
    <div class="top">
        <a href="list.php">
            <div class="back">
                <img src="./fonts/fanghui.png">
                <div>返回</div>
            </div>
        </a>
        <img src="./images/detail-image/logo.png">
        <h1>商品详情</h1>
    </div>
    <div class="container">
        <!-- 面包屑 -->
        <div class="xtx-bread">
            <a href="javascript:"> 首页 > </a>
            <a href="javascript:"> <?php echo $result['range'];?> > </a>
            <span><?php echo $name;?></span>
        </div>
        <!-- 商品信息 -->
        <div class="xtx-product-info">
            <div class="left">
                <div class="picture">
                    <div class="middle" id="myDiv">
                        <img src="./upload/<?php echo $result['range'] ."/".$result['name']."/". $result['image']?>" alt="">
                        <div class="layer"></div>
                    </div>
                    <div class="small">
                        <ul>
                            <li class="active"><img src="./upload/<?php echo $result['range'] ."/".$result['name']."/". $result['image']?>" alt=""></li>
                            <li><img src="./upload/<?php echo $result['range'] ."/".$result['name']."/". $result['image']?>" alt=""></li>
                            <li><img src="./upload/<?php echo $result['range'] ."/".$result['name']."/". $result['image']?>" alt=""></li>
                            <li><img src="./upload/<?php echo $result['range'] ."/".$result['name']."/". $result['image']?>" alt=""></li>
                            <li><img src="./upload/<?php echo $result['range'] ."/".$result['name']."/". $result['image']?>" alt=""></li>
                        </ul>
                    </div>
                    <div class="large"></div>
                </div>
                <div class="other">
                    <ul>
                        <li>
                            <p>人气店铺</p>
                            <p>1999+</p>
                            <p>店铺信息</p>
                        </li>
                        <li>
                            <p>商品评价</p>
                            <p>999+</p>
                            <p>查看评价</p>
                        </li>
                        <li>
                            <p>收藏人气</p>
                            <p>299+</p>
                            <p>收藏商品</p>
                        </li>
                        <li>
                            <p>美食信息</p>
                            <p><?php echo $result['type']?></p>
                            <p>特色美食</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <h3 class="name"><?php echo $name;?></h3>
                <p class="desc">味道一绝 / 新鲜食材 / 聚餐必选 / 回头客多 </p>
                <p class="price"><span class="old">店铺综合评分 </span><span class="now"><?php echo $result['evaluate']?></span></p>
                <div class="address">
                    <div class="item">
                        <div class="dt">促销</div>
                        <div class="dd">12月美食大放送，学生到店有优惠</div>
                    </div>
                    <div class="item">
                        <div class="dt">地址</div>
                        <div class="dd">
                            <div class="box">
                                <span><?php echo $range .$result['address']?>  <i></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="dt">特色</div>
                        <div class="dd">
                            <span class="fw">快速预定</span>
                            <span class="fw">优秀服务</span>
                            <span class="fw">出餐率快</span>
                        </div>
                    </div>
                </div>
                <div class="attrs">
                    <div class="item">
                        <div class="dt">套餐</div>
                        <div class="dd">
                            套餐一：<img src="./upload/<?php echo $result['range'] ."/".$result['name']."/". $result['image']?>" alt="">
                            套餐二：<img src="./upload/<?php echo $result['range'] ."/".$result['name']."/".$result['image']?>" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="dt">口味</div>
                        <div class="dd">
                            <span class="size">香辣味</span>
                            <span class="size">麻辣味</span>
                            <span class="size">烧烤味</span>
                            <span class="size">孜然味</span>
                        </div>
                    </div>

                    <div class="item item_buy">
                        <a class="buy" href="javascript:;">立即收藏</a>
                        <div>
                            <div class="collect_success">收藏成功</div>
                            <div class="collect_defeat ">已取消收藏</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="bottom_top">

            </div>
            <div class="choose">
                <h2 class="active">网友评论</h2>
                <h2>商品详情</h2>
            </div>
            <div class="bottom_content1">
                <?php
                    global $account;
                    if (isset($_COOKIE['username'])) {
                        // 获取存储在cookie中的用户ID和其他相关信息
                        $account = $_COOKIE['username'];
                    }
                ?>
                <form id="form" name="form" action="addEvaluate.php?name=<?php echo $account?>&restaurant=<?php echo $name;?>$range=<?php echo "$range";?>" method="get" onsubmit="return changeSubmit()" ">
                    <img class="comment_head" src="./images/detail-image/head1.jpg"><input type="text" name="message" id="message"><button>发&nbsp;&nbsp;布</button>
                </form>
                <div class="comment">
                    <div class="white"></div>
                    <?php
                        // 最新留言展示前面
                        $sql1 = "SELECT * FROM messageboard where restaurant='$name' ORDER BY datetime DESC";
                        $result1 = $conn->query($sql1);
                        if($result1->num_rows>0){
                            //输出数据
                            while($message = $result1->fetch_assoc()){
                                ?>
                                <li>
                                    <img class="comment_head" src="./images/detail-image/head4.jpg"><span class="comment_name"><?php echo $message['name']?></span>
                                    <div class="comment_content"><?php echo $message['message']?></div>
                                    <div class="comment_time"><?php echo $message['datetime']?></div>
                                    <img class="comment_good"><img class="comment_bad">
                                    <div class="box"></div>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    <li>
                        <img class="comment_head" src="./images/detail-image/head4.jpg"><span class="comment_name">美女没烦恼</span>
                        <div class="comment_content">这家店非常好吃，这已经是我来过的第n次了</div>
                        <div class="comment_time">2023-12-8 17:00</div>
                        <img class="comment_good"><img class="comment_bad">
                        <div class="box"></div>
                    </li>

                </div>
            </div>
            <div class="bottom_other">
                <h2>其他推荐</h2>
                <li>
                    <img src="./upload/<?php echo $result['range'] ."/".$result['name']."/". $result['image']?>" alt="">
                    <span class="other_name">重庆桥头火锅</span>
                    <div class="other_content">毛肚、血旺、肥牛、麻辣牛肉、香糯风爪</div>
                    <diV class="other_point">
                        <p>好评度:</p>
                        <img src="./images/detail-image/star_full.png">
                        <img src="./images/detail-image/star_full.png">
                        <img src="./images/detail-image/star_full.png">
                        <img src="./images/detail-image/star_full.png">
                        <img src="./images/detail-image/star_full.png">
                    </diV>
                </li>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal">
    <div class="modal-content">
        <h1 class="alert_title">请登录后发布评价</h1>
        <h3 class="alert_query">是否需要登录</h3>
        <form action="login.php" method="post">
            <input class="alert_input" name="username" placeholder="账号名/邮箱/手机号" >
            <input class="alert_input" name="password" type="password" placeholder="请输入登录密码">
            <div class="button_group">
                <button type="submit" class="alert_button" onclick="login()">登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录</button>
        </form>
                <button type="button" class="alert_button" onclick="closeModal()">取消登录</button>
            </div>


    </div>
</div>
<script>
    function openModal() {
        const modal = document.getElementById("myModal");
        modal.style.display = "block";
    }

    function closeModal() {
        const modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
    function login(){

    }
</script>
<script src="./js/detail.js"></script>
<?php include 'memory.php'; $id=isLoggedIn(); ?>
<script>
    let ls = 0
    function changeSubmit(){
        return ls === 1;
    }
            let  bool = false; // bool变量判断是否登录成功
            console.log(bool)
            const id = 1;
            if (id === <?php echo $id ;?>)
            {
                bool = true;
            }
            // 发布功能
            const commentBtn = document.querySelector('.bottom_content1>form>button')
            const commentIpt = document.querySelector('.bottom_content1>form>input')
            const comment = document.querySelector('.comment')
            commentBtn.addEventListener('click', function () {
                if (commentIpt.value && bool) {
                    ls = 1
                    changeSubmit()
                    const li = document.createElement('li')
                    li.innerHTML = `S
          <img class="comment_head" src="./images/head1.jpg"><span class="comment_name">${localStorage.getItem('denglu_name')}</span>
          <div class="comment_content">${commentIpt.value}</div>
          <div class="comment_time">2023-12-8 17:00</div>
          <img class="comment_good"><img class="comment_bad">
          <div class="box"></div>
        `
                    comment.insertBefore(li, comment.children[0])
                }
                else {
                    ls =0
                    openModal()
                }
            })
</script>
</body>
</html>