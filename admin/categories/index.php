<?php
    require "../check_login_spadmin.php";   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Mục Sản Phẩm</title>
</head>
<body>
    <?php
        require "../menu.php";
        require "../connect/connect.php";
    ?>
    <h2>Đây Là Khu Vực Quản Lý Danh Mục Sản Phẩm</h2>
    <a href="form_insert.php">
        Thêm Danh Mục Sản Phẩm
    </a>
    <?php
        $sql = "select * from category";
        $result = sqlsrv_query($connect,$sql);
    ?>

    <table border="1" width="100%">
        <tr>
            <th>Mã</th>
            <th>Tên Danh Mục</th>
            <th>Mô Tả</th>
            <th>Ảnh</th>
            <th>Sửa</th>
            <th>Xoá</th>
        </tr>
    
    <?php
            while($row = sqlsrv_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $row['category_id'] ?></td>
            <td><?php echo $row['category_name'] ?></td>
            <td><?php echo $row['category_des'] ?></td>
            <td>
                <img height="100" src="<?php echo $row['category_image'] ?>" alt="">
            </td>
            <td>
                <a href="form_update.php?id=<?php echo $row['category_id'] ?>">Sửa</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $row['category_id'] ?>">Xoá</a>
            </td>
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>