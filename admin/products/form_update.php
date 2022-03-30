<?php
  require "../check_login_admin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>
</head>

<?php
    require "../connect/connect.php";
    $id = $_GET['id'];

    $sql_category = "select * from category";
    $result_category = sqlsrv_query($connect, $sql_category);

    $sql_supplier = "select * from suppliers";
    $result_supplier = sqlsrv_query($connect, $sql_supplier);
    
    // $sql = "show_product '$id'";
    $sql = "select *
            from products p, category c , suppliers s																	
            where  p.category_id = c.category_id and s.supplier_id = p.supplier_id and p.product_id = '$id'
    ";
    $result = sqlsrv_query($connect,$sql);
    $each = sqlsrv_fetch_array($result);
?>
<body>
    <form action="process_update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $each['product_id']?>">
        <div>
            <label for="">Tên Sản Phẩm</label>
            <input type="text" name="name" value="<?php echo $each['product_name']?>" >
        </div>
        <div>
            <label for="">Mô Tả</label>
            <textarea name="des" id="" cols="30" rows="10" ><?php echo $each['product_des']?></textarea>
        </div>
        <div>
            <label for="">Đổi Ảnh Mới</label>
            <input type="file" name="image">
            <br>
            <label for="">Hoặc Giữ Ảnh Cũ</label>
            <img height="100" src="../../images/<?php echo $each['product_image'] ?>" alt="">
            <input type="hidden" name ="image_old" value ="<?php echo $each['product_image'] ?>">
        </div>
        <div>
            <label for="">Giá</label>
            <input type="text" name="price" value="<?php echo $each['product_price']?>">
        </div>
        <div>
            <label for="">Số Lượng</label>
            <input type="text" name="quantity" value="<?php echo $each['quantity']?> ">
        </div>
        <div>
            <label for="">Giảm Giá</label>
            <select name="discounted">
                <option value="0">Không Giảm</option>
                <option value="1">Có Giảm</option>
            </select>
        </div>
        <div>
            <label for="">Tình Trạng</label>
            <select name="status">
                <option value="0">Không</option>
                <option value="1">Có</option>
            </select>
        </div>
        <div>
            <label for="">Danh Mục Sản Phẩm</label>
            <select name="category_id">
                <?php
                    while($each_category = sqlsrv_fetch_array($result_category)){
                ?>
                        <option value="<?php echo $each_category['category_id'] ?>"
                             <?php if($each['category_id'] == $each_category['category_id']){ ?>
                                selected
                                <?php }?>
                        >
                            <?php echo $each_category['category_name'] ?>
                        </option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div>
            <label for="">Nhà Sản Xuất</label>
            <select name="supplier_id" id="" >
                <?php
                    while($each_supplier = sqlsrv_fetch_array($result_supplier)){
                ?>
                        <option value="<?php echo $each_supplier['supplier_id'] ?>"
                            <?php if($each['supplier_id'] == $each_supplier['supplier_id']){ ?>
                                selected
                                <?php }?>
                        >
                            <?php echo $each_supplier['company_name'] ?>
                        </option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div>
            <button>Sửa</button>
        </div>
    </form>
</body>
</html>