<?php
date_default_timezone_set('PRC');
echo '当前时间：'.date('Y-m-d H:i:s',time()).'<br>';
echo '前一天时间：'.date('Y-m-d H:i:s',time()-24*3600).'<br>';
echo '后一天时间：'.date('Y-m-d H:i:s',time()+24*3600);