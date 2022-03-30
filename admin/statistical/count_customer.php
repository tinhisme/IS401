<?php
    require "../../admin/connect/connect.php";
    $sql = "select count(*) from customers";
    $result = sqlsrv_query($connect,$sql);

    $each = sqlsrv_fetch_array($result);
    echo $each;
?>