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
            <label for="">Tên Danh Mục</label>
            <input type="text" name="name" placeholder="Tên Danh Mục">
        </div>
        <div>
            <label for="">Mô Tả</label>
            <textarea name="des" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
        </div>
        <div>
            <label for="">Ảnh</label>
            <input type="text" name="image" placeholder="Ảnh">
        </div>
        <div>
            <button>Thêm</button>
        </div>
    </form>
</body>
</html>