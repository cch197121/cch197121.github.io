<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['管理员'];
    $password = $_POST['mine3314'];
    
    // 读取存储用户信息的文件
    $filename = 'users.txt';
    $fileContent = file_get_contents($filename);
    $users = explode("\n", $fileContent);
    
    // 遍历用户信息，验证用户名和密码是否匹配
    $loggedIn = false;
    foreach($users as $user) {
        list($storedUsername, $storedPassword) = explode(",", $user);
        if(trim($username) === trim($storedUsername) && trim($password) === trim($storedPassword)) {
            $loggedIn = true;
            break;
        }
    }
    
    // 根据验证结果进行操作
    if($loggedIn) {
        // 登录成功
        session_start();
        $_SESSION['username'] = $username;
        header('Location: private_page.php');
        exit();
    } else {
        // 登录失败
        echo "登录失败，请检查用户名和密码";
    }
}
?>
