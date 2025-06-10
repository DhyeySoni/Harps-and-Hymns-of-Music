<?php
session_start();

session_destroy();
setcookie('ecookie', ' ', time() - 86400);
setcookie('pcookie', ' ', time() - 86400);
header('location:login.php');
?>