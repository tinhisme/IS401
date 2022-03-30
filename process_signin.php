<?php
    require "admin/connect/connect.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['remember'])){
        $remember = true;
    }else{
        $remember = false;
    }
    function generateRandomString($length = 30) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    $sql = "select * from customers 
        where email = '$email' and password = '$password'";
    $result = sqlsrv_query($connect, $sql, array(), array( "Scrollable" => 'static' ));
    $count = sqlsrv_num_rows($result);
    if($count == 1){
        session_start();
        $each = sqlsrv_fetch_array($result);
        $token = generateRandomString();
        $id = $each['customer_id'];
        echo 'Đăng Nhập Thành Công';
        $_SESSION['id'] = $each['customer_id'];
        $_SESSION['name'] = $each['customer_name'];
        if($remember){
            $sql = "update customers set token = '$token' where customer_id = '$id' ";
            setcookie('remember',$token ,time() + 86400);
        }
        header('location:index.php');
    }else{
        header('location:signin.php?error=Đăng Nhập Thất Bại');
    }
?>