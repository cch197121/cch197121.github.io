<?php
session_start();

// 检查用户是否已登录，如果未登录，则重定向到登录页面
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>mine的网站 - 私密内容</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <style>
        /* 自定义样式 */
    </style>
</head>
<body>
    <header>
        <h1>欢迎来到mine的网站 - 私密空间</h1>
    </header>
    <main>
        <section>
            <h2>私密内容</h2>
            <p>这里是您的私密内容。</p>
            <a href="logout.php">注销</a>
        </section>
    </main>
    <footer>
        <p>版权所有 ©2022 公司名称</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
