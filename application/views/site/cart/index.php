  <div class="section pricing-plans solid-light-grey-bg">
            <div class="inner">
                <div class="container">

   <!-- breadcrumb -->
            <div class="container breadcrumb-page">
                <ol class="breadcrumb">
                    <li><a href="#">Trang chủ </a></li>
                    <li class="active">Thông tin gói dịch vụ</li>
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
                                    <th class="tb-product">Gói dịch vụ / Giá</th>
                                    <th class="tb-available">Đơn vị tính</th>
                                    <th class="tb-qty">Số lượng</th>
                                    <th class="tb-total">Tổng số</th>
                                    <th class="tb-qty">Điểm</th>
                                    <th class="tb-remove">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total_amount = 0; ?>
                                <?php foreach($carts as $row): ?>
                                <?php $total_amount = $total_amount + $row['subtotal']; ?>
                                <tr>
                                    <td class="tb-product">
                                        <div class="item">
                                            <div class="item-detail">
                                        <strong class="item-name"><a href=""><?php echo $row['name']; ?>  </a></strong>
                                                <div class="item-price">
                                                    <span class="price"><?php echo number_format($row['price']); ?> vnđ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="tb-available">
                                        <span class="value">Gói</span>
                                    </td>
                                    <td class="tb-qty">
                                        <!--
                                        <input type="text" name="qty_<?php echo $row['id']; ?>" title="Qty" class="input-qty " value="<?php echo $row['qty']; ?> ">
                                        -->
                                        <?php echo $row['qty']; ?> 
                                    </td>
                                    <td class="tb-total">
                                        <span class="amount"><?php echo number_format($row['subtotal']); ?> vnđ</span>
                                    </td>
                                     <td class="tb-total">
                                        <span class="amount"><?php echo $row['scores'] ?></span>
                                    </td>
                                    <td class="tb-remove">
                                        <a href="<?php echo base_url('cart/del/'.$row['id']) ?>" class="action-remove"><span>Hủy bỏ</span></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
    

                            </tbody>
                        </table>
                    </div><!-- table cart -->

                    <!-- action cart -->
                    <div class="cart-actions">
                        <a href="<?php echo base_url('checkout'); ?>" title="" class="button">
                            <span>Xác nhận đăng ký</span>
                        </a>
                    </div><!-- action cart -->
                </form><!-- form cart -->
            <?php else: ?>
                <h4>Không có sản phẩm nào trong giỏ hàng !</h4>
            <?php endif; ?>

            </div>
            </div>
            </div>
            </div>