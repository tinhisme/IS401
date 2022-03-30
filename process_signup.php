<?php
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    require "admin/connect/connect.php";
    $sql = "insert_customer N'$name', N'$email', N'$password'";
    $result = sqlsrv_query($connect,$sql);
    if($result){
        header('location:signup.php?success=Đăng kí thành công');
    }else{
        header('location:signup.php?error=Đăng kí thất bại do trùng email');
    }

    $sql = "select * from customers where email = '$email'";
    $result = sqlsrv_query($connect, $sql);
    $id = sqlsrv_fetch_array($result)['id'];
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
?>