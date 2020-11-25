<?php
var_dump($_FILES);
$count = count($_FILES['avater']['name']);
    for ($i = 0; $i < $count; $i++) {
        $ext = pathinfo($_FILES['avater']['name'][$i])['extension'];
        $filename = './upload/' . date('YmdHis') . mt_rand(1000,9999) . '.' . $ext;
        if(!is_dir('./upload')){
            mkdir('./upload','0777');
        }
        $result = move_uploaded_file($_FILES['avater']['tmp_name'][$i], $filename);
        var_dump($result);
    }
