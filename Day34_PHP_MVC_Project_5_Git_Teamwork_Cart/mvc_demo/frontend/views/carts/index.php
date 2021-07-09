<!--Timeline items start -->
<div class="timeline-items container">
    <h2>Giỏ hàng của bạn</h2>
    <form action="" method="post">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th width="40%">Tên sản phẩm</th>
                <th width="12%">Số lượng</th>
                <th>Giá</th>
                <th>Thành tiền</th>
                <th></th>
            </tr>
<<<<<<< HEAD

            <?php
            //Tổng giá trị đơn hàng
            $total_order = 0;
            foreach ($_SESSION['cart'] AS $product_id => $cart) :?>
            <tr>
                <td>
                    <img class="product-avatar img-responsive"
                         src="../backend/assets/uploads/<?php echo $cart['avatar'];?>" width="80">
                    <div class="content-product">
                        <a href="chi-tiet-san-pham/samsung-s9/5" class="content-product-a">
                            <?php echo $cart['name'];?>
                        </a>
                    </div>
                </td>
                <td>
                    <!-- cần khéo léo đặt name cho input số lượng, để khi xử lý submit form update lại giỏ hànTin nổi bậtg sẽ đơn giản hơn
                     Với giỏ hàng hiện tại, đặt name = id của sản phẩm-->
                    <input type="number" min="0"
                           name="<?php echo $product_id;?>"
                           class="product-amount form-control"
                           value="<?php echo $cart['quantity'];?>">
                </td>
                <td>
                    <?php
                    // Format lại dạng tiền, ngăn cách hàng nghìn bằng dấu phẩy
=======
            <?php
            // Tổng giá trị đơn hàng
            $total_order = 0;
            foreach($_SESSION['cart'] AS $product_id => $cart):
            ?>
            <tr>
                <td>
                    <img class="product-avatar img-responsive"
                         src="../backend/assets/uploads/<?php echo $cart['avatar']?>"
                         width="80">
                    <div class="content-product">
                        <a href="#" class="content-product-a">
                            <?php echo $cart['name']; ?>
                             </a>
                    </div>
                </td>
                <td>
                    <!--  cần khéo léo đặt name cho input số lượng, để khi xử lý submit form update lại giỏ hànTin nổi bậtg sẽ đơn giản hơn    -->
<!--                    Với giỏ hàng hiện tại, đặt name = id của sản phẩm-->
                    <input type="number" min="0"
                           name="<?php echo $product_id;?>"
                           class="product-amount form-control"
                           value="<?php echo $cart['quantity']; ?>">
                </td>
                <td>
                    <?php
                    // Format lại dạng tiền, ngăn cách hàng nghìn bằng ,
>>>>>>> 84daf81e9d65b264ce2ed17fda4a5c1bb22c7c97
                    $price_format = number_format($cart['price']);
                    echo $price_format;
                    ?>
                </td>
                <td>
                    <?php
<<<<<<< HEAD
                    //Tổng tiền của từng sản phẩm
                    $total_item = $cart['quantity'] * $cart['price'];
                    echo number_format($total_item);
                    //Cộng dồn cho biến tổng giá trị đơn hàng
=======
                    // Tổng tiền của từng sp
                    $total_item = $cart['quantity'] * $cart['price'];
                    echo number_format($total_item);
                    // Cộng dồn cho biến tổng giá trị đơn hàng
>>>>>>> 84daf81e9d65b264ce2ed17fda4a5c1bb22c7c97
                    $total_order += $total_item;
                    ?>
                </td>
                <td>
<<<<<<< HEAD
                    <a class="content-product-a" href="xoa-san-pham/<?php echo $product_id;?>.html">
=======
                    <a class="content-product-a"
                       href="xoa-san-pham/<?php echo $product_id; ?>.html">
>>>>>>> 84daf81e9d65b264ce2ed17fda4a5c1bb22c7c97
                        Xóa
                    </a>
                </td>
            </tr>
<<<<<<< HEAD
            <?php endforeach;?>

=======
            <?php endforeach; ?>
>>>>>>> 84daf81e9d65b264ce2ed17fda4a5c1bb22c7c97
            <tr>
                <td colspan="5" style="text-align: right">
                    Tổng giá trị đơn hàng:
                    <span class="product-price">
<<<<<<< HEAD
                                            <?php echo number_format($total_order)?>vnđ
=======
                       <?php echo number_format($total_order)?> vnđ
>>>>>>> 84daf81e9d65b264ce2ed17fda4a5c1bb22c7c97
                                                </span>
                </td>
            </tr>
            <tr>
                <td colspan="5" class="product-payment">
                    <input type="submit" name="submit" value="Cập nhật lại giá" class="btn btn-primary">
                    <a href="thanh-toan.html" class="btn btn-success">Đến trang thanh toán</a>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
<!--Timeline items end -->