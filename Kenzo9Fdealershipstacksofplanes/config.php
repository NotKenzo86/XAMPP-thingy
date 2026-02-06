<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "login_db"

$coon = mysql_connect($host, $user, $pass, $db);

if (!$coon){die}("connection failed ;)" . mysql_connect_error())
?>