<?php
session_start();

// 假设用户名为"admin"，密码为"mine3314"
$username = "admin";
$password = "mine3314";

// 获取从登录表单提交的用户名和密码
$submittedUsername = $_POST['username'];
$submittedPassword = $_POST['password'];

// 进行用户名和密码的验证
if($submittedUsername == $username && $submittedPassword == $password){
    // 验证通过，将用户名存储到会话中
    $_SESSION['username'] = $username;

    // 重定向到主页
    header("Location: index.html");
    exit;
} else {
    // 验证失败，显示错误消息
    echo "无效的用户名或密码，请重试！";
}
?>
