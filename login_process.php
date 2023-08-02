<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 在此进行用户名和密码的验证
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['logged_in'] = true;
        header("Location: private_page.php");
        exit();
    } else {
        $error = "用户名或密码错误，请重试。";
    }
} else {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>登录处理</title>
</head>
<body>
    <?php if (isset($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
