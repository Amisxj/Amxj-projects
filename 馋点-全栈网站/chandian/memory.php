<?php
global $userData;
// 检查用户是否已经登录，有为0，无为
function isLoggedIn(): int
{
    if (isset($_COOKIE['username'])) {
        // 获取存储在cookie中的用户ID和其他相关信息
        $userData = $_COOKIE['username'];
        // 验证用户信息
        if($userData && validateUser($userData)){
            return 1;
        }else {
            return 0;
        }
    }
    return 0;
}
// 验证用户信息，可根据实际情况进行验证，进行用户信息的验证逻辑，检查数据库等
function validateUser($userData): bool
{
    //创建连接
    $conn = new mysqli('localhost','root','wmj3252745330','chandian','3305');
    //检测连接
    if($conn->connect_error){
        die('连接失败：'.$conn->connect_error);
    }else {
        // 执行查询语句
        $sql = "select * from user where account ='$userData'";
        $result = $conn->query($sql);
        // 检查查询结果是否存在,如果验证成功，返回true；否则返回false
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
