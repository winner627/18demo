<?php
$username = isset($_POST['username']) ? trim($_POST['username']):'';
if (empty($username)){
    $result=[
        'status'=>400,
        'message'=>'用户名不能为空'
    ];
   echo json_encode($result); exit;
}

$password = isset($_POST['password']) ?  $_POST['password']:'';
if(empty($password)){
    $result=[
        'status'=>400,
        'message'=>'密码不能为空'
    ];
    echo json_encode($result); exit;
}
$result=[
    'status'=>200,
    'message'=>'登录成功',
];
echo json_encode($result); exit;