<?php
    require "../connect/connect.php";
    require "../check_login_spadmin.php";  


    if(empty($_POST['name'])){
        header('location:form_insert.php?error=Phải Nhập Tên');
    }
    $id = $_POST['id'];
    $name = $_POST['name'];
    $des = $_POST['des'];
    $image = $_POST['image'];
    
    $sql = "update category set 
        category_name = N'$name',
        category_des = N'$des',
        category_image = N'$image'
        where category_id = N'$id'
    ";
    $result = sqlsrv_query($connect,$sql);
   
?>