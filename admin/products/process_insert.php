<?php
    require "../check_login_admin.php";
    require "../connect/connect.php";
    
    $name = $_POST['name'];
    $des = $_POST['des'];
    $image = $_FILES['image'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $discounted = $_POST['discounted'];
    $status = $_POST['status'];
    $category_id = $_POST['category_id'];
    $supplier_id = $_POST['supplier_id'];
    
    $folder = '../../images/'; // đường dẫn file trong thư mục
    $file_extension = explode('.', $image['name'])[1]; // cắt và lấy tên ảnh
    // $path_file = $folder . basename($image["name"]);
    $file_name = time() . '.' .$file_extension;
    $path_file = $folder .  $file_name;// nối time và tên file
    move_uploaded_file($image["tmp_name"], $path_file);

    $sql = "insert into products(product_name,product_des,product_image,
                    product_price,quantity,discounted,status,category_id,supplier_id) 
            values(N'$name',N'$des',N'$file_name','$price','$quantity',N'$discounted',
                        N'$status','$category_id','$supplier_id')
            ";
    $result = sqlsrv_query($connect,$sql);
?>