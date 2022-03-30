<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            <?php
                                require "admin/connect/connect.php";
                                $sql = "select * from products";
                                $result = sqlsrv_query($connect,$sql);
                                while($row_product = sqlsrv_fetch_array($result)){
                            ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img height="200" width="200" src="images/<?php echo $row_product['product_image'] ?>" alt="">
                                    <div class="product-hover">
                                        <a href="single-product.php?id=<?php echo $row_product['product_id'] ?>" class="view-details-link">
                                            <i class="fa fa-link"></i> Xem Chi Tiết
                                        </a>
                                    </div>
                                </div>
                                <h2><?php echo $row_product['product_name']?></h2>
                                <div class="product-carousel-price">
                                    <ins><?php echo number_format($row_product['product_price']) . 'VND' ?></ins>
                                </div>
                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="add_to_cart.php?id=<?php echo $row_product['product_id'] ?>">
                                        Thêm Sản Phẩm
                                    </a>
                                </div> 
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->