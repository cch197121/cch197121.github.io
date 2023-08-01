<!-- login_process.php -->
<?php
session_start();
if(isset($_SESSION['username'])) {
    header('Location: private_page.php'); // 如果用户已登录，则重定向到私密页面
    exit();
}

if(isset($_POST['username']) && isset($_POST['password'])) {
    // 处理表单提交的数据
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // 验证用户名和密码是否正确（与数据库中的数据进行比较）
    // ...
    
    if($loginSuccessful) {
        // 用户登录成功，创建会话并重定向到私密页面
        $_SESSION['username'] = $username;
        header('Location: private_page.php');
        exit();
    } else {
        // 登录失败，显示错误消息或重定向到登录页面
        echo "登录失败，请检查用户名和密码";
        // 或者
        // header('Location: login.php');
        // exit();
    }
} else {
    // 未提交表单数据，重定向到登录页面
    header('Location: login.php');
    exit();
}
?>
