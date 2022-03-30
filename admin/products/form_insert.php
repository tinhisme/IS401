<?php
  require "../check_login_admin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
</head>

<?php
    require "../connect/connect.php";
    $sql_category = "select * from category";
    $result_category = sqlsrv_query($connect, $sql_category);
    $sql_supplier = "select * from suppliers";
    $result_supplier = sqlsrv_query($connect, $sql_supplier);
?>
<body>
    <form action="process_insert.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="">Tên Sản Phẩm</label>
            <input type="text" name="name" >
        </div>
        <div>
            <label for="">Mô Tả</label>
            <textarea name="des" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">Ảnh</label>
            <input type="file" name="image">
        </div>
        <div>
            <label for="">Giá</label>
            <input type="text" name="price">
        </div>
        <div>
            <label for="">Số Lượng</label>
            <input type="text" name="quantity">
        </div>
        <div>
            <label for="">Giảm Giá</label>
            <select name="discounted">
                <option value="0">Không Giảm Giá</option>
                <option value="1">Có Giảm Giá</option>
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
            <select name="category_id" id="">
                <?php
                    while($each = sqlsrv_fetch_array($result_category)){
                ?>
                        <option value="<?php echo $each['category_id'] ?>">
                            <?php echo $each['category_name'] ?>
                        </option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div>
            <label for="">Nhà Sản Xuất</label>
            <select name="supplier_id" id="">
                <?php
                    while($each = sqlsrv_fetch_array($result_supplier)){
                ?>
                        <option value="<?php echo $each['supplier_id'] ?>">
                            <?php echo $each['company_name'] ?>
                        </option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div>
            <button>Thêm</button>
        </div>
    </form>
</body>
</html>