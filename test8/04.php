<?php
$link = new mysqli('lpcalhost','root','123456','18demo','3306');

if(!$link){
    echo'数据库链接失败';exit;
}

$link -> set_charset('utf8');

$id = isset($_GET['id']) ? intval($_GET['id']) :0;

if ($id <= 0 ){

}
