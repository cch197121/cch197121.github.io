<!-- private_page.php -->
<!DOCTYPE html>
<html>
<head>
    <title>私密页面</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>私密页面</h1>
    <?php
    session_start();
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "<p>欢迎，$username！这是私密内容。</p>";
        // 显示其他私密内容
        // ...
    } else {
        header('Location: login.php'); // 如果用户未登录，则重定向到登录页面
        exit();
    }
    ?>
</body>
</html>
