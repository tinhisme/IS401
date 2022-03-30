<?php
    session_start();
    require "header.php";
    if(empty($_SESSION['id'])){
        header('location:signin.php?error=Đăng Nhập đi bạn');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Người Dùng</title>
</head>
<body>
    Đây là trang người dùng. Xin chào bạn 
    <?php
        echo $_SESSION['name'];
    ?>
    <a href="signout.php">Đăng Xuất</a>
</body>
</html>