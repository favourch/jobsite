 <div class="section pricing-plans solid-light-grey-bg">
            <div class="inner">
                <div class="container">

 <div class="container breadcrumb-page">
                <ol class="breadcrumb">
                    <li><a href="#">Trang chủ </a></li>
                    <li class="active">Thông tin người mua</li>
                </ol>
            </div> <!-- breadcrumb -->
 <div class="container">
             
                <div class="row">
                    <div class="col-md-12">

                        <!-- block  contact-->
                        <div class="block-contact-us">
                            <div class="block-title">
                               <h3> <p style="">Tổng số tiền thanh toán : <span style="color: #c00;"><?php echo number_format($total_amount); ?> đ</span></p></h3>

                            <form method="post" action="<?php echo base_url('order/checkout'); ?>">
                            <div class="block-content row">



                                <div class="col-sm-6">
                                     <div class="form-group">
                                     <p class="label">Tên công ty</p>
                                     <input type="text" placeholder="Tên công ty" name="company_name" class="form-control" id="company_name" value="<?php echo isset($user->company_name) ? $user->company_name : "" ; ?>">
                                     <?php echo form_error('company_name'); ?>
                                    </div>
                                    <div class="form-group">
                                        <p class="label">Địa chỉ</p>
                                        <input type="text" placeholder="Địa chỉ" name="company_address" class="form-control" id="company_address" value="<?php echo isset($user->company_address) ? $user->company_address : "" ; ?>">
                                        <?php echo form_error('company_address'); ?>
                                    </div>
                                    <div class="form-group">
                                    <p class="label">Người liên hệ *</p>
                                        <input type="text" placeholder="Người liên hệ *" name="company_contact" id="company_contact" class="form-control" value="<?php echo isset($user->company_contact) ? $user->company_contact : "" ; ?>">
                                        <?php echo form_error('company_contact'); ?>
                                    </div>
                                    <div class="form-group">
                                    <p class="label">Email liên hệ *</p>
                                        <input type="text" placeholder="Địa chỉ email *" name="contact_email" id="contact_email" class="form-control" value="<?php echo isset($user->contact_email) ? $user->contact_email : "" ; ?>">
                                        <?php echo form_error('contact_email'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                     <div class="form-group">
                                    <p class="label">Số điện thoại *</p>
                                        <input type="text" placeholder="Nhập số điện thoại liên hệ *" name="contact_phone" id="contact_phone" class="form-control" value="<?php echo isset($user->contact_phone) ? $user->contact_phone : "" ; ?>">
                                        <?php echo form_error('contact_phone'); ?>
                                    </div>
                                    <div class="form-group">
                                <p class="label">Nội dung khác</p>
                                <textarea name="message" class="txtarea2" placeholder="Nội dung khác"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <select name="payment" class="form-control">
                                        <option value="">---Chọn hình thức thanh toán---</option>
                                        <option value="tructiep">Trực tiếp </option>
                                        <option value="chuyenkhoan">Chuyển khoản</option>
                                        <option value="nganluong">Thanh toán qua ngân lượng</option>
                                        <option value="baokim">Thanh toán qua ví bảo kim</option>
                                    </select>
                                    </div>

                                    <div class="text-right">
                                        <button class="button" type="submit">Xác nhận mua gói dịch vụ</button>
                                    </div>
                                </div>
                            </div><!-- block  contact-->
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            </div>
            </div>
            </div>