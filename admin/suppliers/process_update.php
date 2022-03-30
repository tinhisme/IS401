<?php
    require "../connect/connect.php";
    require "../check_login_spadmin.php";  
    $id = $_POST['id'];
    $name = $_POST['name'];
    $des = $_POST['des'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "UPDATE suppliers
            SET company_name = N'$name', 
                contact_des = N'$des',
                address = N'$address',
                phone = N'$phone'
            WHERE supplier_id = '$id'";

    $result = sqlsrv_query($connect, $sql);
    if($result){
        header('location:index.php?success=Sửa Thành Công');
    }else{
        header('location:index.php?success=Sửa Thất Bại');
    }
?>