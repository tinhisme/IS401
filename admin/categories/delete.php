<?php
    require "../check_login_spadmin.php";   
    require "../connect/connect.php";
    $id = $_GET['id'];
    echo $id;
    
    $sql = "delete from category where category_id = '$id' ";
    sqlsrv_query($connect,$sql);   
    header('location:index.php');
?>