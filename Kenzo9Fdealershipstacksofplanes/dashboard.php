<?php
session_start();
if (isset($_SESSION['username'])){
    header("Location: index.php")
}

?>

<DOCTYPE html>
<html lang="en">
    <head>


</head>
<body>
<h1>welcome <php? echo $_SESSION['username']; ?> </h1>

 <a href="logout.php">Logout</a>

</body>
