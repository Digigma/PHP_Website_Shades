<?php
session_start();
unset($_SESSION['token']);
$_SESSION = array();
session_destroy();
header("location:   ../../index.php");
exit;
?>