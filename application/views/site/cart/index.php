   <!-- breadcrumb -->
            <div class="container breadcrumb-page">
                <ol class="breadcrumb">
                    <li><a href="#">Trang chu </a></li>
                    <li class="active">Thong tin gio hang</li>
                </ol>
            </div> <!-- breadcrumb -->
     <div class="container">
            <?php if($total_items>0): ?>
                <!-- form cart -->
                <form class="form-cart" action="<?php echo base_url('cart/updatecart'); ?>" method="post">
                    <!-- table cart -->
                    <div class="table-cart-wrapper table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="tb-product">Sản phẩm/Giá</th>
                                    <th class="tb-available">Available</th>
                                    <th class="tb-qty">Số lượng</th>
                                    <th class="tb-total">Tổng số</th>
                                    <th class="tb-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total_amount = 0; ?>
                                <?php foreach($carts as $row): ?>
                                <?php $total_amount = $total_amount + $row['subtotal']; ?>
                                <tr>
                                    <td class="tb-product">
                                        <div class="item">
                        <a href="" class="item-photo"><img src="<?php echo base_url('uploads/product/'.$row['image']); ?>" alt="cart"></a>
                                            <div class="item-detail">
                                        <strong class="item-name"><a href=""><?php echo $row['name']; ?>  </a></strong>
                                                <div class="item-price">
                                                    <span class="price"><?php echo number_format($row['price']); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="tb-available">
                                        <span class="value">In stock!</span>
                                    </td>
                                    <td class="tb-qty">
                                        <input type="text" name="qty_<?php echo $row['id']; ?>" title="Qty" class="input-qty " value="<?php echo $row['qty']; ?> ">
                                    </td>
                                    <td class="tb-total">
                                        <span class="amount"><?php echo number_format($row['subtotal']); ?> </span>
                                    </td>
                                    <td class="tb-remove">
                                        <a href="<?php echo base_url('cart/del/'.$row['id']) ?>" class="action-remove"><span>Xóa</span></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                        <td class="tb-subtotal" colspan="5"><span class="label">Thành tiền :</span>   
                        <?php echo number_format($total_amount); ?>
                        - <a href="<?php echo base_url('cart/del'); ?>">Xóa toàn bộ</a>
                        </td>

                                </tr>
                            </tbody>
                        </table>
                    </div><!-- table cart -->

                    <!-- action cart -->
                    <div class="cart-actions">
                        <button type="submit" title="Update Cart" class="action update">
                            <span>Cập nhật giỏ hàng</span>
                        </button>
                        <a href="<?php echo base_url('order/checkout'); ?>" title="Proceed to CHECK OUT" class="action checkout">
                            <span>Thanh toán đơn hàng</span>
                        </a>
                    </div><!-- action cart -->
                </form><!-- form cart -->
            <?php else: ?>
                <h4>Không có sản phẩm nào trong giỏ hàng !</h4>
            <?php endif; ?>

            </div>