<?php
    require "../check_login_spadmin.php";   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Nhà Sản Xuất</title>
</head>
<body>
    <?php
        require "../connect/connect.php";
        require "../menu.php";
        $id = $_GET['id'];
        $sql = "show_supplier N'$id'";
        $result = sqlsrv_query($connect, $sql);
        $each = sqlsrv_fetch_array($result);
    ?>
    <form action="process_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $each['supplier_id']?>">
        <div>
            <label for="">Tên Danh Mục</label>
            <input type="text" name="name" value="<?php echo $each['company_name']?>">
        </div>
        <div>
            <label for="">Mô Tả</label>
            <textarea name="des" id="" cols="30" rows="10"><?php echo $each['contact_des']?></textarea>
        </div>
        <div>
            <label for="">Địa Chỉ</label>
            <input type="text" name="address" value="<?php echo $each['address']?>">
        </div>
        <div>
            <label for="">Phone</label>
            <input type="text" name="phone" value="<?php echo $each['phone']?>">
        </div>
        <div>
            <button>Sửa</button>
        </div>
    </form>
</body>
</html>