<?php
session_start();
if(isset($_SESSION["user"])){
    $user = $_SESSION["user"];
}else {
    header("location:login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2><?php echo $user["name"]??"" ?></h2>
<a href="logout.php">LogOut</a>
</body>
</html>
