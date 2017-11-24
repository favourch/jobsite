 <div class="container breadcrumb-page">
                <ol class="breadcrumb">
                    <li><a href="#">Trang chủ </a></li>
                    <li class="active">Thông tin giao hàng</li>
                </ol>
            </div> <!-- breadcrumb -->
 <div class="container">
             
                <div class="row">
                    <div class="col-md-12">

                        <!-- block  contact-->
                        <div class="block-contact-us">
                            <div class="block-title">
                                <p style="">Tổng số tiền thanh toán : <span style="color: #c00;"><?php echo number_format($total_amount); ?> đ</span></p>
                               <p> Nhập thông tin để giao hàng</p>
                            <form method="post" action="<?php echo base_url('order/checkout'); ?>">
                            <div class="block-content row">
                                <div class="col-sm-6">
                                     <div class="form-group">
                                     <input type="text" placeholder="Họ tên *" name="name" class="form-control" id="name" value="<?php echo isset($user->name) ? $user->name : "" ; ?>">
                                     <?php echo form_error('name'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Email *" name="email" class="form-control" id="email" value="<?php echo isset($user->email) ? $user->email : "" ; ?>">
                                        <?php echo form_error('email'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Số điện thoại" name=phone id="phone" class="form-control" value="<?php echo isset($user->phone) ? $user->phone : "" ; ?>">
                                        <?php echo form_error('phone'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Địa chỉ" name=address id="address" class="form-control" value="<?php echo isset($user->address) ? $user->address : "" ; ?>">
                                        <?php echo form_error('address'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Nội dung khác"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <select name="payment" class="form-control">
                                        <option value="">---Chọn cổng thanh toán---</option>
                                        <option value="tructiep">Trực tiếp khi nhận hàng</option>
                                        <option value="nganluong">Thanh toán qua ngân lượng</option>
                                        <option value="baokim">Thanh toán qua ví bảo kim</option>
                                    </select>
                                    </div>

                                    <div class="text-right">
                                        <button class="btn btn-inline" type="submit">Xác nhận đặt hàng</button>
                                    </div>
                                </div>
                            </div><!-- block  contact-->
                            </form>
                        </div>
                    </div>

                </div>

            </div>