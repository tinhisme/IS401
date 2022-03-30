<?php
    require "../connect/connect.php";

    require "../check_login_spadmin.php";  


    if(empty($_POST['name'])){
        header('location:form_)insert.php?error=Phải Nhập Tên');
    }
    $name = $_POST['name'];
    $des = $_POST['des'];
    $image = $_POST['image'];
    // $sql = "insert into category(category_name,category_des,category_image) 
    //             values(N'$name',N'$des',N'$image')";
    $sql = "insert_category N'$name', N'$des', '$image'";
    $result = sqlsrv_query($connect,$sql);
    if($result){
        echo 'Insert thành công';
    }else{
        echo 'Tên Danh Mục Đã Tồn Tại';
    }
    header('location:index.php?success=Thêm Thành Công');

?>