<?php

    require "../check_login_spadmin.php";   
    require "../connect/connect.php";
    $name = $_POST['name'];
    $des = $_POST['des'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "insert_supplier N'$name',N'$des', N'$address', '$phone' ";
    $result = sqlsrv_query($connect, $sql);
    if($result){
        header('location:index.php?successs=Thêm Thành Công');
    }else{
        header('location:index.php?error=Thêm Thất Bại vì đã tồn tại tên công ty này');
    }

?>