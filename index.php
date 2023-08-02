<?php
session_start();

// 处理用户登录逻辑
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $username = $_GET['username'];
    $password = $_GET['password'];

    // 在此进行用户名和密码的验证
    if ($username === '管理员' && $password === 'mine3314') {
        $_SESSION['logged_in'] = true;
        header("Location: private_page.php");
        exit();
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>mine的网站</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url("哆啦A梦.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            transition: background-image 2s ease-in-out;
        }
    </style>
</head>
<body>
...
<?php if (isset($error) && $error === true) : ?>
    <p>用户名或密码错误，请重试。</p>
<?php endif; ?>

<?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) : ?>
    <section>
        <h2>登录</h2>
        <form method="GET">
            <input type="text" name="username" placeholder="用户名">
            <input type="password" name="password" placeholder="密码">
            <button type="submit">登录</button>
        </form>
    </section>
<?php else : ?>
    <section>
        <h2>欢迎光临</h2>
        <p>这里是网站的主要内容区域，您可以在这里放置您的文章、产品、图片等。</p>
    </section>
    <?php
    // 如果已登录，将页面重定向到私密页面
    header("Location: private_page.php");
    exit();
    ?>
<?php endif; ?>

<section>
    <h2>公司简介</h2>
    <p>公司简介内容</p>
</section>

<section>
    <h2>服务项目</h2>
    <ul>
        <li>项目1</li>
        <li>项目2</li>
        <li>项目3</li>
    </ul>
</section>
...
</body>
</html>
