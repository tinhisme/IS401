<?php
    require "../check_login_spadmin.php";   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Danh Mục Sản Phẩm</title>
</head>
<body>
    <?php

    ?>
    <form action="process_insert.php" method="POST">
        <div>
            <label for="">Tên Công Ty</label>
            <input type="text" name="name" >
        </div>
        <div>
            <label for="">Mô Tả</label>
            <textarea name="des" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">Địa Chỉ</label>
            <input type="text" name="address" >
        </div>
        <div>
            <label for="">Số Điện Thoại</label>
            <input type="text" name="phone">
        </div>
        <div>
            <button>Thêm</button>
        </div>
    </form>
</body>
</html>