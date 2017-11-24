		<!-- Post resume Section -->
		<div class="section post-resume-form-section solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<!-- multistep form -->
					<form action="" method="post" id="post-resume-form" class="post-resume-form multisteps-form">
					  	<fieldset>
						  	<h2 class="form-title text-center dark">Đăng ký Ứng Viên</h2>
						    <h3 class="step-title text-center dark">Hãy Tham Gia Cùng Hàng Ngàn Ứng Viên Đang Sử Dụng English Work Mỗi Ngày</h2>							

					    	<div class="form-inner">
					    		<h6>Đã là thành viên ? <a href="<?php echo base_url('candidate/login') ?>">Đăng nhập</a></h6>	

								<div class="divider"></div>

								<div class="form-fields-wrapper">
									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Tên đầy đủ<sup>*</sup></p>
											<input type="text" id="" name="name" placeholder="Nhập họ tên đầy đủ" value="<?php echo set_value('name'); ?>">
									<span style="color: #c00; font-size: 12px;"><?php echo form_error('name'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Email<sup>*</sup></p>
											<input type="text" id="" name="email" placeholder="Địa chỉ email" value="<?php echo set_value('email'); ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('email'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->									

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Mật khẩu<sup>*</sup></p>
										<input type="password" id="" name="password" placeholder="Nhập mật khẩu">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('password'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Xác nhận mật khẩu<sup>*</sup></p>
										<input type="password" id="" name="repassword" placeholder="Nhập lại mật khẩu">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('repassword'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Giới tính</p>
											<select name="sex" style="width: 100%">
												<option value="">---Chọn giới tính---</option>
												<option value="Nam">Nam</option>
												<option value="Nữ">Nữ</option>
											</select>
										</div> <!-- end .form-group -->
										
										<div class="form-group">
											<p class="label">Ngày sinh</p>
											<input type="date" id="" name="birthday" placeholder="">
										</div> <!-- end .form-group -->

									</div> <!-- end .form-group-wrapper -->

								</div> <!-- end .form-fields-wrapper -->

				                <div class="divider"></div>

								<div class="form-fields-wrapper">
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Bạn đang sống tại ? <sup>*</sup></p>
											<select name="city" style="width: 100%;">
												<option value="">---Chọn tỉnh/thành phố---</option>
												<?php foreach($thanhpho as $row): ?>
												<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('city'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Số điện thoại<sup>*</sup></p>
											<input type="text" id="" name="phone" placeholder="Nhập số điện thoại" value="<?php echo set_value('phone'); ?>">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('phone'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->									

									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Địa chỉ<sup>*</sup></p>
											<input type="text" id="" name="address" placeholder="Nhập địa chỉ" value="<?php echo set_value('address'); ?>">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('address'); ?></span>
										</div> <!-- end .form-group -->
										
									</div> <!-- end .form-group-wrapper -->

								</div> <!-- end .form-fields-wrapper -->
					    		
					    		<div class="button-wrapper text-center">
					    			<input type="submit" name="" class="btnsumit" value="Đăng ký ứng viên"> 
					    		</div> <!-- end .button-wrapper -->			    		

					    	</div> <!-- end .form-inner -->							
					 	</fieldset>



					</form> <!-- end .job-post-form -->

				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
