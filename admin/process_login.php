<?php
    require "connect/connect.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from admin where admin_email = '$email' and admin_password = '$password' ";
    $result = sqlsrv_query($connect, $sql, array(), array( "Scrollable" => 'static' ));
    if(sqlsrv_num_rows($result) == 1){
        $each = sqlsrv_fetch_array($result);
        session_start();
        $_SESSION['id'] = $each['admin_id'];
        $_SESSION['name'] = $each['admin_name'];
        $_SESSION['level'] = $each['level'];
        header('location:root');
        exit;
    }
    header('location:index.php');


?>