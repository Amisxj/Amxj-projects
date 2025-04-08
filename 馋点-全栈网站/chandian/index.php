<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>馋点-校园周边饮食，周末聚餐</title>
    <meta name="author" content="Amxj">
    <meta name="description" content="馋点, qiyishu , 美食, 綦江,聚餐" />
    <meta name="keywords" content="馋点, 美食, qiyishu ,綦江">
    <link rel="shortcut icon" href="fonts/favicon.ico" />
<!--    <link rel="stylesheet" href="css/iconfont.css">-->
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <section class="shortcut">
        <div class="w">
            <div class="fl">
                <u1>
                    <div class="denglu_defeat">
                        <li>馋点欢迎您！&nbsp;</li>
                        <li>
                            <a href="login.html">登录</a> &nbsp; <a href="register.html" class="style_red">注册</a>
                        </li>
                    </div>
                    <div class="denglu_success">
                        <li>馋点欢迎您！<?php echo $_COOKIE['username'];?>&nbsp;</li>
                        <li>
                            <a class="denglu_name">登录账号名</a> &nbsp; <a>个人中心</a> &nbsp; <a href="destroy.php">注销</a>
                        </li>
                    </div>
                </u1>
            </div>
            <div class="fr">
                <u1>
                    <a href="#"><li>销量排行</li></a>
                    <li></li>
                    <a href="#"><li>收藏店铺</li></a>
                    <li></li>
                    <a href="#"><li class="arrow-icon">浏览记录</li></a>
                </u1>
            </div>
        </div>
    </section>
    <header class="header">
        <div class="logo">
            <h1>
                <a href="index.php" title="馋点">馋点</a>
            </h1>
        </div>
        <div class="search">
            <form action="search.php" method="get">
                <label for="">
                    <input type="search" name="search" id="" placeholder="查询你想吃的美食">
                </label>
                <button>搜索</button>
            </form>
        </div>
        <div class="hotwords_rank">
            <div class="tr">
                <div class="rank_name">火锅</div><img src="./images/index-image/hot.png" alt="">
            </div>
            <div class="tr">
                <div class="rank_name">烧烤</div><img src="./images/index-image/hot.png" alt="">
            </div>
            <div class="tr">
                <div class="rank_name">双人</div><img src="./images/index-image/hot.png" alt="">
            </div>
            <div class="tr">
                <div class="rank_name">聚餐</div><img src="./images/index-image/hot.png" alt="">
            </div>
        </div>
        <div class="hotwords">
            <a href="#" class="style_red">热搜词:</a>
            <a href="">火锅</a>
            <a href="">烧烤</a>
            <a href="">双人</a>
            <a href="">聚餐</a>
            <a href=""></a>
            <a href=""></a>
        </div>
        <div class="reserve">
            <a href="#">预约订单</a>
            <i class="number">8</i>
        </div>
    </header>
    <nav class="nav">
            <div class="dropdown">
                <a href="list.php?range=校园小卖部区">
                <div class="dt">校园小卖部区</div>
                </a>
            </div>
            <div class="navitems">
                <ul>
                    <li><a href="list.php?range=校内区">校内区</a></li>
                    <li><a href="list.php?range=校门区">校门区</a></li>
                    <li><a href="list.php?range=校园周边区">校园周边区</a></li>
                    <li><a href="list.php?range=万达区">万达区</a></li>
                </ul>
            </div>
    </nav>
    <div class="main">
            <div class="dd">
                <div class="title">
                    <h1>各色分类</h1>
                </div>
                <ul>
                    <li>
                        <a href="#">
                            <h3>面食、粉食系列</h3>
                        </a>
                    <li>
                        <a href="#">
                            <h3>快餐小吃</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h3>休闲甜点</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h3>夜市系列</h3>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="focus">
                <div class="focus_header">
                    <ul class="title">
                        <img src="./images/index-image/hot.png" alt="">
                        <h1>今日推荐</h1>
                        <img src="./images/index-image/hot.png" alt="">
                    </ul>
                </div>
                <div class="focus_tupian">
                    <ul class="big">
                        <!-- 今天日推荐放图片的地方,大小为720×418 -->
                        <div class="nav-img">
                            <div class="begin ">
                                <img src="./upload/swipeImage/meishi(1).png" alt=""><a href=""></a></img>
                            </div>
                            <div class="begin active">
                                <img src="./upload/swipeImage/meishi(2).png" alt=""><a href=""></a></img>
                            </div>
                            <div class="begin">
                                <img src="./upload/swipeImage/meishi(3).png" alt=""><a href=""></a></img>
                            </div>
                            <div class="begin">
                                <img src="./upload/swipeImage/meishi(4).png" alt=""><a href=""></a></img>
                            </div>
                            <div class="begin">
                                <img src="./upload/swipeImage/meishi(5).png" alt=""><a href=""></a></img>
                            </div>
                        </div>
                        <div class="navigation">
                            <label for="r1" class="bar active" data-nav-number="0"></label>
                            <label for="r2" class="bar" data-nav-number="1"></label>
                            <label for="r3" class="bar" data-nav-number="2"></label>
                            <label for="r4" class="bar" data-nav-number="3"></label>
                            <label for="r5" class="bar" data-nav-number="4"></label>
                        </div>
                        <div class="nav-button">
                            <div class="nav-prev "></div>
                            <div class="nav-current "></div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="newsflash">
                <div class="header">
                    <ul>
                        <h1>综合排行</h1>
                    </ul>
                </div>
                <div class="body">
                    <ul>
                        <li>
                            <a href="">
                                <h3>1 火锅店&nbsp;</h3>
                                <p>綦江校区</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h3>2 烧烤店&nbsp;</h3>
                                <p>綦江校区</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h3>3 奶茶店&nbsp;</h3>
                                <p>綦江校区</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h3>4 烤肉店&nbsp;</h3>
                                <p>綦江校区</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h3>5 干锅店&nbsp;</h3>
                                <p>綦江校区</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h3>6 麻辣烫&nbsp;</h3>
                                <p>綦江校区</p>
                            </a>
                        </li>
                        <li class="no">
                            <a href="">
                                <h3>7 甜点店&nbsp;</h3>
                                <p>綦江校区</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
    <footer class="footer">
        <div>
            <h1>其他特色美食</h1>
            <div class="content">
                <?php
                    //连接数据库
                    $conn = new mysqli('localhost', 'root', 'wmj3252745330', 'chandian','3305');
                    // 检查连接
                    if ($conn->connect_error) {
                        die("连接失败: " . $conn->connect_error);
                    }else{
                        //查询数据库
                        $sql = "SELECT * FROM restaurant ORDER BY RAND() LIMIT 8";
                        $res = mysqli_query($conn, $sql);
                        $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
                    }
                    ?>
                <?php foreach ($result as $v) { ?>
                        <tr>
                        <?php
                            echo "<div >
                                        <a href='detail.php?name=".$v['name']."&range=".$v['range']."'>
                                        <div class=\"img\">
                                        <img src='upload/".$v['range']."/".$v['name']."/".$v['image']."'></div>
                                        <div class=\"content_1\">".$v['name']."</div>
                                        <div class=\"content_2\"><span>".$v['address']."</span>￥".$v['price']."</div>
                                        </a>
                                  </div>";
                        ?>
                    </tr>
                <?php } ?>
            </div>
        </div>
    </footer>
    <br><br>
    <hr>
    <div class="bottom">
        <div class="bottom_image">
            <img class='qq_img' src="./images/index-image/QQ.png" alt="qq图片">
            <div class="qq" style="display: none;">
                <img class="qq_contact" src="./images/index-image/QQ_code.png">
            </div>
            <img class="weixin_img" src="./images/index-image/weixin.png" alt="微信图片">
            <div class="weixin" style="display:none;">
                <img class="weixin_contact" src="./images/index-image/weixin_code.png">
            </div>
            <img class="weibo_img" src="./images/index-image/weibo.png" alt="微博图片">
            <div class="weibo" style="display: none;">
                <img class="weibo_contact" src="./images/index-image/weixin_code.png">
            </div>
        </div>
        <div class="bottom_text">
            欢迎您加入我们!
        </div>
    </div>
    <script src="./js/index.js"></script>
    <?php include 'memory.php'; $id=isLoggedIn(); ?>
    <script>
        let  bool = false;
        const id = 1;
        if (id === <?php echo $id ;?>)
        {
            bool = true;
        }
        const success = document.querySelector('.denglu_success')
        const defeat = document.querySelector('.denglu_defeat')
        if (bool) {
            success.style.display = 'block'
            defeat.style.display = 'none'
            document.querySelector('.denglu_success .denglu_name').textContent = localStorage.getItem('denglu_name')
        }
        else {
            success.style.display = 'none'
            defeat.style.display = 'block'
        }
        //底部二维码
        const qqImg = document.querySelector('.bottom')
        const qq = document.querySelector('.qq')
        const weixin = document.querySelector('.weixin')
        const weibo = document.querySelector('.weibo')
        qqImg.addEventListener('mouseenter', () => {
            qq.style.display = 'block'
            weixin.style.display = 'block'
            weibo.style.display = 'block'
        })
        qqImg.addEventListener('mouseleave', () => {
            qq.style.display = 'none'
            weixin.style.display = 'none'
            weibo.style.display = 'none'
        })
    </script>
</body>
<div class="filling">
    <p>重庆市綦江区</p>
    <div class="icp">
        <img src="fonts/icp.png" alt="">
        <a href="https://beian.mps.gov.cn/#/query/webSearch?code=50023402000721" rel="noreferrer" target="_blank">渝公网安备50023402000721</a>
    </div>

</div>
</html>