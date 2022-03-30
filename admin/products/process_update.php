<?php
    require "../connect/connect.php";
    require "../check_login_admin.php";



    $id = $_POST['id'];
    $name = $_POST['name'];
    $des = $_POST['des'];
    $image_new = $_FILES['image'];
    if($image_new['size'] > 0){
        $folder = '../../images/';
        $file_extension = explode('.',$image_new['name'])[1];
        $file_name = time() . '.' . $file_extension;
        $path_file = $folder . $file_name;
        move_uploaded_file($image_new["tmp_name"], $path_file);
    }else{
        $file_name = $_POST['image_old'];
    }
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $discounted = $_POST['discounted'];
    $status = $_POST['status'];
    $category_id = $_POST['category_id'];
    $supplier_id = $_POST['supplier_id'];

   $sql = "update products 
    set
    product_name = N'$name',
    product_des = N'$des',
	product_image = N'$file_name',
	product_price = N'$price',
	quantity = N'$quantity',
	discounted = N'$discounted',
	status = N'$status',
	category_id = N'$category_id',
	supplier_id = N'$supplier_id'
    where product_id = N'$id'
   ";

   $result = sqlsrv_query($connect,$sql);
   if($result){
       header('location:index.php?success=Thành Công');
   }else{
    header('location:index.php?error=Thất Bại');

   }

?>