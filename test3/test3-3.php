<?php
$student = [
    [
        'id' => '123456789',
        'name'=> '张三',
        'class'=> '1',
        'math_score'=> '90',
        'english_score'=> '80',
        'china_score' => '100'
    ],
    [
        'id' => '123415',
        'name'=> '李四',
        'class'=> '2',
        'math_score'=> '90',
        'english_score'=> '80',
        'china_score'=> '100'
    ],
    [
        'id' => '123456715',
        'name'=> '王五',
        'class'=> '3',
        'math_score'=> '90',
        'english_score'=> '80',
        'china_score'=> '100'
    ]
];
foreach ($student as $key => $value){
    $student[$key]['sum_score']=$value['math_score']+$value['english_score']+$value['china_score'];
    $student[$key]['avg_score']=$student[$key]['sum_score']/3;
}
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
<table>
    <tr>
        <th>学号</th>
        <th>姓名</th>
        <th>班级</th>
        <th>数学成绩</th>
        <th>英语成绩</th>
        <th>语文成绩</th>
        <th>总成绩</th>
        <th>平均成绩</th>
    </tr>
    <?php foreach($student as $value):?>
        <tr>
            <td><?php echo $value['id'];?></td>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['class'];?></td>
            <td><?php echo $value['math_score'];?></td>
            <td><?php echo $value['english_score'];?></td>
            <td><?php echo $value['china_score'];?></td>
            <td><?php echo $value['sum_score'];?></td>
            <td><?php echo $value['avg_score'];?></td>
        </tr>
    <?php endforeach;?>
</table>
</body>
</html>