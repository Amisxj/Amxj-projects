<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>内部缩放示例</title>
    <style>
        /* 设置图片容器的样式 */
        .img-container {
            width: 300px; /* 容器宽度 */
            height: 200px; /* 容器高度 */
            overflow: hidden; /* 隐藏超出容器的部分 */
            position: relative; /* 相对定位 */
        }

        /* 设置图片的初始样式 */
        .img-container img {
            width: 100%; /* 图片宽度填满容器 */
            height: 100%; /* 图片高度填满容器 */
            position: absolute; /* 绝对定位 */
            top: 50%; /* 向下偏移50% */
            left: 50%; /* 向左偏移50% */
            transform: translate(-50%, -50%) scale(1); /* 移动图片到容器中心并缩放 */
            transition: transform 0.5s ease; /* 平滑过渡效果 */
        }

        /* 鼠标悬停时的样式 */
        .img-container:hover img {
            transform: translate(-50%, -50%) scale(1.2); /* 放大图片 */
        }
    </style>
</head>
<body>

<div class="img-container">
    <img src="images/register-image" alt="可替换为实际图片路径" />
</div>
</body>
</html>
