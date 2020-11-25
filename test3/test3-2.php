<?php
$student = [
    [
        'id' => '123456789',
        'name'=> '张三',
        'class'=> '1',
        'math_score'=> '90',
        'english_score'=> '80',
        'china_score'=> '100'
    ],
    [
        'id' => '123456789',
        'name'=> '李四',
        'class'=> '1',
        'math_score'=> '90',
        'english_score'=> '80',
        'china_score'=> '100'
    ],
    [
        'id' => '123456789',
        'name'=> '王五',
        'class'=> '1',
        'math_score'=> '90',
        'english_score'=> '80',
        'china_score'=> '100'
    ]
];

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
           <td>学号</td>
           <td>姓名</td>
           <td>班级</td>
           <td>数学成绩</td>
           <td>英语成绩</td>
           <td>语文成绩</td>
       </tr>
       <?php foreach($student as $key => $value):?>
           <tr>
               <td><?php echo $value['id'];?></td>
               <td><?php echo $value['name'];?></td>
               <td><?php echo $value['class'];?></td>
               <td><?php echo $value['math_score'];?></td>
               <td><?php echo $value['english_score'];?></td>
               <td><?php echo $value['china_score'];?></td>
           </tr>
       <?php endforeach;?>
   </table>
</body>
</html>
