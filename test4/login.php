<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<div>
    <form action="./doLogin.php" method="post" id="login-form">
        <div>
            用户名：
            <input type="text" name="username" id="username">
        </div>
        <div>
            密码：
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="登录">
    </form>
</div>
<script>
    jQuery(function () {
        jQuery('#login-form').submit(function () {
            var params = {
                username:jQuery('#username').val(),
                password:jQuery('#password').val()
            };
           jQuery.post('./doLogin.php',params,function (data) {
               if (data.status == 200){
                alert(data.message);
               }else {
                   if (data.status == 400){
                       alert(data.message);
                   }else {
                       alert(data.message);
                   }
               }
           },'json');
           return false;
        });
    })
</script>
</body>
</html>
