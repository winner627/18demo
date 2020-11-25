<?php
$str = 15512979020;
$new_num=mb_strcut($str,3,4);
echo $new_num.'<br>';
$new_num2=str_replace($new_num,'****',$str);
echo $new_num2;
