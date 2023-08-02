<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>私密页面</title>
</head>
<body>
    <h1>私密页面</h1>
    <p>欢迎访问私密页面。</p>
    <a href="logout.php">退出登录</a>
</body>
</html>
