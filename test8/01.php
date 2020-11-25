<?php
$link =  new mysqli('localhost' , 'root' , '123456' , '18demo' , 3306);
//判断是否链接成功
if (!$link){
    echo '链接失败'; exit;
}
//var_dump($link);

$link -> set_charset('utf8');

$username = 'wanger';
$password = '123456';

$sql = 'SELECT*FROM user WHERE username = "'.$username.'" LIMIT 1';

$result = $link -> query($sql); //query用于发送sql语句到数据库

//var_dump($result);打印返回结果

  if ($result -> num_rows >0){
      $data = $result -> fetch_assoc();
  }else{
      echo '此用户没有注册';exit;
  }
//   var_dump($data);

if ($data['password'] !=md5($password)){
    echo '密码错误';exit;
}


session_start();

$_SESSION['user'] = [
    'user_id' => $data['id'],
    'username' => $data['username']
];
echo '登录成功';

$link->close();