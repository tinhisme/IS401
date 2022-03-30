<?php
session_start();
if(empty($_SESSION['cart'])){
    header('location:shop.php?error=Bạn chưa có giỏ hàng nào Hãy đặt hàng');
}else{
    $cart = $_SESSION['cart'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart Page - Ustora Demo</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php
    require "header.php";
    require "menu.php";
    require "admin/connect/connect.php";
    $totalPrice = 0;
?>

<body>


    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">

                                    <tr>
                                        <th class="product-thumbnail">Ảnh</th>
                                        <th class="product-name">Sản Phẩm</th>
                                        <th class="product-price">Giá Tiền</th>
                                        <th class="product-quantity">Số Lượng</th>
                                        <th class="product-subtotal">Tổng Cộng</th>
                                        <th class="product-remove">&nbsp;</th>
                                    </tr>
                                    <?php
                                    foreach ($cart as $id => $each) :
                                    ?>
                                        <tr class="cart_item">
                                            <td class="product-thumbnail">
                                                <img src="images/<?php echo $each['image'] ?>" width="145" height="145" alt="poster_1_up" class="shop_thumbnail">
                                            </td>

                                            <td class="product-name">
                                                <?php echo $each['name'] ?>
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?php echo number_format($each['price'])   . ' VNĐ' ?></span>
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decre">-</a>
                                                    <?php echo $each['quantity'] ?>
                                                    <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=incre">+</a>
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <?php
                                                $price =  ($each['quantity']  * $each['price']);
                                                echo number_format($price);
                                                $totalPrice += $price;

                                                ?>
                                            </td>
                                            <td class="product-remove">
                                                <a href="delete_form_cart.php?id=<?php echo $id ?>" title="Remove this item" class="remove" href="#">X</a>
                                            </td>
                                        </tr>
                                    <?php
                                    endforeach
                                    ?>
                                    <tr>
                                        <td class="actions" colspan="6">
                                            <div class="coupon">
                                                <label for="coupon_code">Coupon:</label>
                                                <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                                <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                            </div>
                                            <input type="submit" value="Update Cart" name="update_cart" class="button">
                                            <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                        </td>
                                    </tr>
                                </table>
                            </form>

                            <div class="cart-collaterals">



                                <div class="cart_totals ">
                                    <h2>Cart Totals</h2>
                                    <table cellspacing="0">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Tổng Tiền Giỏ Hàng</th>
                                                <td><span class="amount">
                                                        <?php
                                                        echo number_format($totalPrice);
                                                        ?>
                                                    </span></td>
                                            </tr>

                                            <tr class="shipping">
                                                <th>Vận Chuyển</th>
                                                <td>Miễn Phí</td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Tổng Đơn Đặt Hàng</th>
                                                <td><strong><span class="amount"><?php echo number_format($totalPrice); ?></span></strong> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <!-- <form method="post" action="#" class="shipping_calculator"> -->
                                <form enctype="multipart/form-data" action="#" class="checkout shipping_calculator" method="post" name="checkout">
                                    <h2>
                                        <a class="shipping-calculator-button" data-toggle="collapse" href="#calcalute-shipping-wrap" aria-expanded="false" aria-controls="calcalute-shipping-wrap">Calculate Shipping</a>
                                    </h2>
                                    <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                        <label class="" for="billing_first_name">Tên Người Nhận <abbr title="required" class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="" id="billing_first_name" name="receiver_name" class="input-text ">
                                    </p>

                                    <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                        <label class="" for="billing_last_name">Số Điện Thoại <abbr title="required" class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="" id="billing_last_name" name="receiver_phone" class="input-text ">
                                    </p>
                                    <div class="clear"></div>

                                    <p id="billing_company_field" class="form-row form-row-wide">
                                        <label class="" for="billing_company">Địa Chỉ</label>
                                        <input type="text" value="" placeholder="" id="billing_company" name="receiver_address" class="input-text ">
                                    </p>
                                    <button class="btn btn-primary" >Đặt Hàng</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require "footer.php";
    ?>


    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>
</body>

</html>