<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "login";
$con = mysqli_connect($server, $username, $password, $db);

mysqli_select_db($con, 'login');
?>