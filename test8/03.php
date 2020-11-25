<?php
$link = new mysqli('localhost','root','123456','18demo');
if(!$link){
    echo '数据库链接失败';exit;
}

$link -> set_charset('utf8');

session_start();

$user_id = $_SESSION['user']['user_id'];
$sql = 'SELECT*FROM articles WHERE user_id = '.$user_id.' AND status = 1 ORDER BY id DESC';
//echo $sql;

$result = $link -> query($sql);

$data = [];

while ($row  = $result -> fetch_assoc()){
    $data[] = $row;
}

$link ->close();
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
<div>
    <ul>
        <?php foreach ($data as $value):?>
        <!-- 将文章标题用foreach 进行遍历循环输出-->
        <li><a href="/test8/02.php" id="<?php echo $value['id'];?>"><?php echo $value['title']?></a></li>
        <?php endforeach;?>
    </ul>
</div>
</body>
</html>
