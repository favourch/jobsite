		<!-- Post resume Section -->
		<div class="section post-resume-form-section solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<!-- multistep form -->
					<form action="" method="post" id="post-resume-form" class="post-resume-form multisteps-form" enctype="multipart/form-data">
					  	<fieldset>
						  	<h2 class="form-title text-center dark">ĐĂNG KÝ NHÀ TUYỂN DỤNG</h2>
						    <h3 class="step-title text-center dark">Hãy Tham Gia Cùng Hàng Ngàn Ứng Viên Đang Sử Dụng English Work Mỗi Ngày, việc tìm kiếm ứng viên trở lên dễ dàng hơn </h2>

					    	<div class="form-inner">
					    <h6>Đã là thành viên ? <a href="<?php echo base_url('companies/login') ?>">Đăng nhập</a></h6>

								<div class="divider"></div>

								<div class="form-fields-wrapper">
									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Email<sup>*</sup></p>
											<input type="text" id="" name="email" placeholder="" value="<?php echo set_value('email'); ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('email'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Mật khẩu<sup>*</sup></p>
										<input type="password" id="" name="password" placeholder="">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('password'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Xác nhận mật khẩu<sup>*</sup></p>
										<input type="password" id="" name="repassword" placeholder="">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('repassword'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
										<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Tên công ty<sup>*</sup></p>
											<input type="text" id="" name="company_name" placeholder="" value="<?php echo set_value('company_name'); ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_name'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Địa chỉ<sup>*</sup></p>
											<input type="text" id="" name="company_address" placeholder="" value="<?php echo set_value('company_address'); ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_address'); ?></span>
										</div> <!-- end .form-group -->
									</div>

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Tỉnh / Thành phố</p>
											<select name="city_id" style="width: 100%;">
												<option value="">---Chọn tỉnh/thành phố---</option>
												<?php foreach($thanhpho as $row): ?>
												<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div> <!-- end .form-group -->

										<div class="form-group">
											<p class="label">Quy mô công ty</p>
											<select name="company_size_id" style="width: 100%;">
												<option value="">---Chọn---</option>
												<?php foreach($companysize as $row): ?>
												<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Mô tả sơ lược về công ty</p>
											<textarea name="description" class="txtarea"></textarea>
										</div> <!-- end .form-group -->

									</div>
										<div class="form-group-wrapper">
										<div class="form-group upload-company-logo">
											<p class="label">Logo công ty<span>(Kích thước tối đa: 1MB)</span></p>
									    	<label for="company-logo-upload" class="flex space-between items-center no-column no-wrap">
									    	<span>Tải lên logo</span>
									    	<span><i class="ion-ios-folder-outline"></i>Chọn tệp</span>								    	
									    	</label>
										    <input type="file" name="logo_url" id="company-logo-upload">
										</div> <!-- end .form-group -->
									</div>
									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Website</p>
											<input type="text" id="" name="website" placeholder="" value="<?php echo set_value('website'); ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('website'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Số điện thoại</p>
											<input type="text" id="" name="company_phone" placeholder="" value="<?php echo set_value('company_phone'); ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_phone'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Fax</p>
											<input type="text" id="" name="company_fax" placeholder="" value="<?php echo set_value('company_fax'); ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_fax'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
								</div> <!-- end .form-fields-wrapper -->


				                <div class="divider"></div>

								<div class="form-fields-wrapper">
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Tên người liên hệ <sup>*</sup></p>
								<input type="text" id="" name="company_contact" placeholder="" value="<?php echo set_value('company_contact'); ?>" >	
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_contact'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Chức vụ người liên hệ<sup>*</sup></p>
											<input type="text" id="" name="contact_title" value="<?php echo set_value('contact_title'); ?>">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('contact_title'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Email người liên hệ <sup>*</sup></p>
								<input type="text" id="" name="contact_email" placeholder="" value="<?php echo set_value('contact_email'); ?>" >	
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('contact_email'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Điện thoại người liên hệ<sup>*</sup></p>
											<input type="text" id="" name="contact_phone" value="<?php echo set_value('contact_phone'); ?>">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('contact_phone'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									
									

								</div> <!-- end .form-fields-wrapper -->

					    		<div class="button-wrapper text-center">
					    			<input type="submit" name="" class="button" value="Đăng ký nhà tuyển dụng">
					    		</div> <!-- end .button-wrapper -->

					    	</div> <!-- end .form-inner -->
					 	</fieldset>



					</form> <!-- end .job-post-form -->

				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
