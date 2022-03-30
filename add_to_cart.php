<?php
    session_start();
    // unset($_SESSION['cart']);
    $id = $_GET['id'];

    if(empty($_SESSION['cart'][$id])){
        require "admin/connect/connect.php";
        $id = $_GET['id'];
        $sql = "select * from products where product_id = '$id'";
        $result = sqlsrv_query($connect,$sql);
        $each = sqlsrv_fetch_array($result);         
        $_SESSION['cart'][$id]['name'] =   $each['product_name'];                         
        $_SESSION['cart'][$id]['image'] =   $each['product_image'];                         
        $_SESSION['cart'][$id]['price'] =   $each['product_price'];                         
        $_SESSION['cart'][$id]['quantity'] =   1;                         
    }else{
        $_SESSION['cart'][$id]['quantity']++;                         

    }
    print_r($_SESSION['cart']);
?>