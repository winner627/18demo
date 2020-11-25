<?php
?>
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
<form action="http://18demo.test/test4/dotest1.php" method="POST">
    <div>
        职位名称：
        <input type="text" name="name">
    </div>
    <div>
        所在地区：
        <select name="area" id="">
            <option value="tao">桃城区</option>
            <option value="ji">冀州区</option>
            <option value="bin">滨湖新区</option>
        </select>
    </div>
    <div>
        工资范围：
        <select name="salary" id="">
            <option value="1000">1000-1999</option>
            <option value="2000">2000-2999</option>
            <option value="3000">3000-3999</option>
            <option value="4000">4000-4999</option>
        </select>
    </div>
    <div>
        职位要求：
        <textarea name="workneed" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
        <input type="submit" value="提交">
    </div>
</form>
</body>
</html>