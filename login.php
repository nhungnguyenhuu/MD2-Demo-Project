<?php

include_once "Classes/Admin.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $password = $_REQUEST["password"];
    $errors = [];
    if (!empty($name) && !empty($password)) {
        $admin = new Admin($name, $password);
        if ($admin->login()) {
            header("location:index.php");
        }else{
            $errors["login"] = "Sai tai khoan dang nhap";
        }
    }

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
<p style="color: crimson"><?php echo $errors["login"]??"" ?></p>
<form action="" method="post">
    <p>Name</p>
    <input type="text" name="name" placeholder="Nhap ten">
    <p>Password</p>
    <input type="password" name="password" placeholder="Nhap mat khau">
    <br>
    <button>Login</button>
</form>
</body>
</html>
