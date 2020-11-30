<?php
session_start();
unset($_SESSION['username']);
header('location:/test6/test6-2.php');