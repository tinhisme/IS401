<?php
    require "../check_login_spadmin.php";   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Nhà Sản Xuất</title>
</head>
<body>
    <?php
        require "../menu.php";
        require "../connect/connect.php";
    ?>
    <h2>Đây Là Khu Vực Quản Lý Nhà Sản Xuất</h2>
    <a href="form_insert.php">
        Thêm Nhà Sản Xuất
    </a>
    <?php
        $sql = "select * from suppliers";
        $result = sqlsrv_query($connect,$sql);
    ?>

    <table border="1" width="100%">
        <tr>
            <th>Mã</th>
            <th>Tên Công Ty</th>
            <th>Mô Tả</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th>Xoá</th>
            <th>Sửa</th>
        </tr>
    <?php
            while($row_supplier = sqlsrv_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $row_supplier['supplier_id'] ?></td>
            <td><?php echo $row_supplier['company_name'] ?></td>
            <td><?php echo $row_supplier['contact_des'] ?></td>
            <td><?php echo $row_supplier['address'] ?></td>
            <td><?php echo $row_supplier['phone'] ?></td>
            <td>
                <a href="form_update.php?id=<?php echo $row_supplier['supplier_id'] ?>">Sửa</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $row_supplier['supplier_id'] ?>">Xoá</a>
            </td>
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>