<!--管理员页面-->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>管理员模式</title>
  <link rel="shortcut icon" href="fonts/favicon.ico" />
  <link rel="stylesheet" href="css/rooter.css">
  <link rel="stylesheet" href="css/base.css" />
</head>

<body>
  <div class="father">
    <div class="top">
      <div class="left">
        后台管理系统
      </div>
      <div class="mid">
        控制台
      </div>
      <div class="right">
        <div class="text">皮肤</div>
        <img src="images/rooter-image/rooter_xia.png" class="jiantou">
        <img src="images/rooter-image/rooter-img.jpg" class="touxiang">
        <div class="name">Visa</div>
        <img src="images/rooter-image/rooter_xia.png" class="jiantou">
        <img src="images/rooter-image/rooter_zhuxiao.png" class="zhuxiao" name="back">
        <a href="index.php"><div class="back" name="back">注销</div></a>
      </div>
    </div>
    <div class="logo">
      <img src="images/login-image/cartoon.png">
      <span>生活——</span>
      <span>就该馋点</span>
    </div>
    <div class="bottom">
      <div class="choose">
        <div class="lis">
          <img src="images/rooter-image/rooter_lis.png">
        </div>
        <div class="lis_text active" name="choose" data-lisNum="0">
          <img src="images/rooter-image/lis_goods.png">商家管理
        </div>
        <div class="lis_text" name="choose" data-lisNum="1">
          <img src="images/rooter-image/lis_item_enter.png">商家录入
        </div>
        <div class="lis_text" name="choose">
          <img src="images/rooter-image/lis_item_run.png">留言管理
        </div>
        <div class="lis_text" name="choose">
          <img src="images/rooter-image/lis_user.png">用户管理
        </div>
        <div class="lis_text" name="choose">
          <img src="images/rooter-image/lis_rooter.png">管理员管理
        </div>
      </div>
      <div class="goods" >
        <div class="goods_show">
          <form action="rooter.php" method="get">
            <div class="show_top">
              商品评分：
              <select>
                <option>全部</option>
                <option>五星</option>
                <option>四星以上</option>
                <option>三星以上</option>
                <option>两星以上</option>
              </select>&nbsp;&nbsp;&nbsp;&nbsp;
              店名搜索：
              <input name="search">&nbsp;
              <button>立即搜索</button>
            </div>
          </form>
        </div>
        <form id="midifiedform" action="midified.php" method="post" enctype="multipart/form-data" >
        <table>
          <tr>
            <td>序号</td>
            <td>图片</td>
            <td>店名</td>
            <td>地区</td>
            <td>价格</td>
            <td>地址</td>
              <td>电话</td>
            <td>类型</td>
            <td>好评度</td>
            <td>操作</td>
          </tr>
            <?php
                // 连接数据库
                $conn = new mysqli('localhost', 'root', 'wmj3252745330', 'chandian','3305');
                // 检查连接
                if ($conn->connect_error) {
                    die("连接失败: " . $conn->connect_error);
                }
                // 查询总条数
                $sql = "select * from restaurant ";
                $res = mysqli_query($conn, $sql);
                $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
            ?>
            <?php foreach ($result as $v) { ?>
                    <?php
                        echo "<tr>
                                <td name='id'>".$v['id']."</td>
                                <td>
                                  <img src='upload/".$v['range']."/".$v['name']."/".$v["image"]."'>
                                </td>
                                <td>".$v['name']."</td>
                                <td>".$v['range']."</td>
                                <td>".$v['price']."</td>
                                <td>".$v['address']."</td>
                                <td>".$v['telephone']."</td>
                                <td>".$v['type']."</td>
                                <td>".$v['evaluate']."</td> 
                                <td>
                                  <button type='button' class=\"goods_example\" onclick='change()' id='midified'>修改</button>
                                  <button class=\"goods_delete\" type='button' id='delete' '>删除</button>
                                </td>
                              </tr>
                              ";
                    ?>
            <?php } ?>
        </table>
<!--              <div style="margin: auto;">-->
<!--                  <button class="final1" type="submit" id="submit" value="确认修改" style="display: none">确认修改</button>-->
<!--                  <button class="final2" type="button" id="cancel" onclick="again()" value="取消修改" style="display: none;">取消修改</button>-->
<!--              </div>-->
          </form>
          <div class="example_img" style="display: none">
              <div>
                  <form id="imgForm" action="uploadimg.php" method="post" enctype="multipart/form-data">
                      <h1>图片修改</h1>
                      <div class="img">
                          请选择更换照片：<input type="file" name="changeFile" id="changeFile" accept="image/*"/></input><br>
                          <br>
                          <div class="get_img">
                              <span>图片预览：</span>
                              <div>
                                  <img src="./images/login-image/login-bgc.png" id="changImage">
                              </div>
                          </div>
                      </div>
                      <br>
                      <div class="example_button">
                          <button type="submit" class="btn1">确定修改</button> <button  type="button" class="btn2">取消修改</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <div class="goods_enter" style="display: none">
          <!--该死的enctype 找了两个多小时的错误 2023.12.6 21:00 ----23:10;-->
          <form action="add.php" method="post" enctype="multipart/form-data">
          <h1>商品录入</h1>
          <div class="enter_img">
            请选择商品照片：<input type="file" name="file" id="file" accept="image/*"/><br>
            <span>图片预览：</span>
            <div>
              <img src="images/login-image/login-bgc.png" id="previewImage" >
            </div>
          </div>
          <div class="enter_name common">
            <span>请输入店名：</span><input name="name">
          </div>
          <div class="enter_address common">
            <span>请输入地址：</span><input name="address">
          </div>
          <div class="enter_price common">
            <span>请输入价格：</span><input name="price">
          </div>
          <div class="enter_assess common">
            <span>手机号码：</span><input name="telephone">
          </div>
          <div class="enter_assess common">
            地区范围：<select name="range">
              <option>校园小卖部区</option>
              <option>校内区</option>
              <option>校门区</option>
              <option>校园周边区</option>
              <option>万达区</option>
            </select>
            选择类型：<select name="type">
              <option>面食、粉食系列</option>
              <option>快餐小吃</option>
              <option>休闲甜点</option>
              <option>夜市系列</option>
            </select>
          </div>
          <div class="enter_button">
            <button type="submit">录&nbsp;&nbsp;&nbsp;&nbsp;入</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="js/rooter.js"></script>
  <script>
      //图片预览处理
      const fileInput = document.getElementById('file');
      const previewImage = document.getElementById('previewImage');
      fileInput.addEventListener('change', function(e) {
          const file = e.target.files[0];
          const reader = new FileReader();
          reader.onloadend = function() {
              previewImage.src = reader.result;
          }
          if (file) {
              reader.readAsDataURL(file);
          } else {
              previewImage.src = "";
          }
      });
  </script>
</body>
</html>