<?php

    require "../check_login_spadmin.php";


    require "../connect/connect.php";
    $id = $_GET['id'];
    
    $sql = "delete from suppliers where supplier_id = '$id' ";
    sqlsrv_query($connect,$sql);   
    header('location:index.php?success = Xoá Thành Công');
?>