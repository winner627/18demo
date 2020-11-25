<?php
$name = isset($_POST['name']) ? trim($_POST['name']) :'';
if (empty($name))
{
    echo'<script>
    alert("职位名为空");
    window.location.href=\'http://18demo.test/test4/test1.php?\';
    </script>';
}