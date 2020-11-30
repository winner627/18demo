<?php
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
if (empty($username)) {
    echo '用户名不为空';
    exit;
}

$password = isset($_POST['password']) ? $_POST['password'] : '';
if (empty($password)) {
    echo '密码不能为空';
    exit;
}

if ($username != 'zhangsan' || $password != '123456') {
    echo '用户名或密码错误';
    exit;
}

session_start();

$_SESSION['username'] = $username;

header('location:/test6/center-1.php');