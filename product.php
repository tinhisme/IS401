    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $id = $_GET['id']; 
        require "admin/connect/connect.php";
        $sql = "select * from products where product_id = '$id' ";
        $result = sqlsrv_query($connect,$sql);
        $row = sqlsrv_fetch_array($result);
    ?>
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <h2 class="sidebar-title">Products</h2>
                    <?php
                        $idTab = $_GET['id']; 
                        require "admin/connect/connect.php";
                        $sqlTab = "select * from products";
                        $resultTab = sqlsrv_query($connect,$sqlTab);
                        while($rowTab = sqlsrv_fetch_array($resultTab)){
                    ?>
                    <div class="single-sidebar"> 
                        <div class="thubmnail-recent">
                            <img src="images/<?php echo $rowTab['product_image'] ?>" class="recent-thumb" alt="">
                            <h2><a href="single-product.php?id=<?php echo $rowTab['product_id'] ?>"><?php echo $rowTab['product_name']?></a></h2>
                            <div class="product-sidebar-price">
                                <ins><?php echo number_format($rowTab['product_price']) . 'VND' ?></ins>
                            </div>                             
                        </div>
                    </div>
                    
                    <?php
                        }
                    ?>
                </div>
                
                <div class="col-md-8">
                    
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Trang Chủ</a>
                            <a href="">Sản Phẩm</a>
                            <a href=""><?php echo $row['product_name']?></a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="images/<?php echo $row['product_image'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $row['product_name']?></h2>
                                    <div class="product-inner-price">
                                        <ins><?php echo number_format($row['product_price']) . 'VND' ?></ins>
                                    </div>    
                                    
                                    <form action="" method = "post" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <div class="product-option-shop">
                                             <a class="add_to_cart_button"  href="add_to_cart.php?id=<?php echo $row['product_id'] ?>">
                                                Add to cart
                                            </a>
                                        </div> 
                                    </form>   

                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô Tả</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Mô tả Sản Phẩm</h2>  
                                                <p><?php echo $row['product_des']?></p>
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
