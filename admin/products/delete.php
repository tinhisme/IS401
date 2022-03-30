<?php

    require "../check_login_admin.php";    
    require "../connect/connect.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE product_id ='$id' ";
    $result = sqlsrv_query($connect,$sql);
    header('location:index.php');


?>