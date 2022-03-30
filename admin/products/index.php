<?php
  require "../check_login_admin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
</head>
<body>
    <?php 
        require "../menu.php"; 
        require "../connect/connect.php";
        $sql = "select *
		    from products p, category c , suppliers s																	
		    where  p.category_id = c.category_id and s.supplier_id = p.supplier_id ";
        $result = sqlsrv_query($connect,$sql);

    ?>
    <h2>Đây là Quản Lý Sản Phẩm</h2>
    <a href="form_insert.php">Thêm Mới Sản Phẩm</a>
    <table border="1" width = "100%">
        <tr>
            <th>Mã Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Chi Tiết Sản Phẩm</th>
            <th>Ảnh Sản Phẩm</th>
            <th>Giá Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Giảm Giá</th>
            <th>Tình Trạng</th>
            <th>Tên Danh Mục</th>
            <th>Tên Nhà Sản Xuất</th>
            <th>Xoá</th>
            <th>Sửa</th>
        </tr>
        <?php
            while($row_product = sqlsrv_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row_product['product_id'] ?></td>
            <td><?php echo $row_product['product_name'] ?></td>
            <td><?php echo $row_product['product_des'] ?></td>
            <td>
                <img height ="100"  src="../../images/<?php echo $row_product['product_image'] ?>" alt="">
            </td>
            <td><?php echo number_format($row_product['product_price']) . ' VND' ?></td>
            <td><?php echo $row_product['quantity'] ?></td>
            <td><?php if($row_product['discounted'] == 0){
                        echo 'Không Giảm Giá';
                    } else{
                        echo 'Có Giảm Giá';
                    }
                ?>
            </td>
            <td><?php if($row_product['status'] == 0)
                        echo 'Không';
                      else
                        echo 'Có';
                ?>
            </td>
            <td><?php echo $row_product['category_name'] ?></td>
            <td><?php echo $row_product['company_name'] ?></td>
            <td>
                <a href="delete.php?id=<?php echo $row_product['product_id'] ?>">Xoá</a>
            </td>
            <td>
                <a href="form_update.php?id=<?php echo $row_product['product_id'] ?>">Sửa</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>