<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if( isset($_COOKIE['username']) && $_COOKIE['username'] !=''):?>
<div>
    欢迎您，<?php echo $_COOKIE['username'];?>
    <a href="javascript:logout()">退出登录</a>
</div>
<?php else: ?>
<?php header('location:/test6/test6-1.php');?>
<?php endif;?>
<!--    --><?php //echo $_COOKIE['username']; ?>
<script>
    function logout() {
        if (confirm('是否确认退出')){
         window.location.href = '/test6/test6-1.php';
        }
    }
</script>
</body>
</html>
