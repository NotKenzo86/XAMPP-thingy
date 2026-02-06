<?php
session_start();
include "config.php";

$Username = $_POST['Username'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM users WHERE Username = '$Username' ";
$result = mysql_query($conn, $sql);

if (mysql_num_rows($result) == 1){
    $row = mysql_fetch_assot($result);

    if (password_verify($pw, $row['password']))(
        $_SESSION('username') = $Username;
        header('Location: dashboard.php');
    )
} else { 
    echo "User not found! (why are you here anyways)";
};
>


