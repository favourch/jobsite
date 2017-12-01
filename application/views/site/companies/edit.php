		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="breadcrumb-menu flex items-center no-column">
						
						<div class="breadcrumb-info-dashboard">
							<h2><?php echo $info_company->company_name; ?></h2>
							<h4><?php echo $info_company->email; ?></h4>
						</div> <!-- end .candidate-info -->
					</div> <!-- end .breadcrumb-menu -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
			<!-- Candidate Dashboard -->
		<div class="section candidate-dashboard-content solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="candidate-dashboard-wrapper flex space-between no-wrap">

						<div class="left-sidebar-menu">							
							<ul class="nav nav-pills nav-stacked">

								<li class="heading">CÀI ĐẶT TÀI KHOẢN</li>
								<li><a href="<?php echo base_url('companies/view'); ?>">Trang quản lý</a></li>
							    <li><a href="#">Đăng tuyển dụng mới</a></li>
							    <li><a href="#">Tuyển dụng đã đăng</a></li>
							    <li class="nav-divider"></li>
							    <li><a href="#">Đổi mật khẩu</a></li>
							    <li><a href="<?php echo base_url('companies/logout'); ?>">Đăng xuất</a></li>
							    <li class="nav-divider"></li>
								<li class="heading">HOTLINE HỖ TRỢ NHÀ TUYỂN DỤNG</li>
							    <li><span style="font-size: 13px;">Nguyễn Xuân Hương</span> <span style="font-size: 13px; color: #1790d4; float: right;">0979 823 452</span></li>
							    <li><span style="font-size: 13px;">Nguyễn Xuân Hương</span> <span style="font-size: 13px; color: #1790d4; float: right;">0979 823 452</span></li>
							    <li><span style="font-size: 13px;">Nguyễn Xuân Hương</span> <span style="font-size: 13px; color: #1790d4; float: right;">0979 823 452</span></li>
							    <li><span style="font-size: 13px;">Nguyễn Xuân Hương</span> <span style="font-size: 13px; color: #1790d4; float: right;">0979 823 452</span></li>
							</ul>
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">
							<div class="tab-content candidate-dashboard">

									<form action="" method="post" id="post-resume-form" class="post-resume-form multisteps-form" enctype="multipart/form-data">
					  	<fieldset>
						  	<h2 class="form-title text-center dark">CẬP NHẬT THÔNG TIN CÔNG TY</h2>
						    <h3 class="step-title text-center dark">Hãy Tham Gia Cùng Hàng Ngàn Ứng Viên Đang Sử Dụng English Work Mỗi Ngày, việc tìm kiếm ứng viên trở lên dễ dàng hơn </h2>

					    	<div class="form-inner">
		
								<div class="divider"></div>

								<div class="form-fields-wrapper">
								
								
										<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Tên công ty<sup>*</sup></p>
											<input type="text" id="" name="company_name" placeholder="" value="<?php echo $info_company->company_name; ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_name'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Địa chỉ<sup>*</sup></p>
											<input type="text" id="" name="company_address" placeholder="" value="<?php echo $info_company->company_address; ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_address'); ?></span>
										</div> <!-- end .form-group -->
									</div>

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Tỉnh / Thành phố</p>
											<select name="city_id" style="width: 100%;">
												<option value="">---Chọn tỉnh/thành phố---</option>
												<?php foreach($thanhpho as $row): ?>
												<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $info_company->city_id) ? "selected" : "" ?> ><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div> <!-- end .form-group -->

										<div class="form-group">
											<p class="label">Quy mô công ty</p>
											<select name="company_size_id" style="width: 100%;">
												<option value="">---Chọn---</option>
												<?php foreach($companysize as $row): ?>
												<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $info_company->company_size_id) ? "selected" : "" ?>><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Mô tả sơ lược về công ty</p>
											<textarea name="description" class="txtarea"><?php echo $info_company->description; ?></textarea>
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
											<input type="text" id="" name="website" placeholder="" value="<?php echo $info_company->website; ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('website'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Số điện thoại</p>
											<input type="text" id="" name="company_phone" placeholder="" value="<?php echo $info_company->company_phone; ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_phone'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Fax</p>
											<input type="text" id="" name="company_fax" placeholder="" value="<?php echo $info_company->company_fax; ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_fax'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
								</div> <!-- end .form-fields-wrapper -->


				                <div class="divider"></div>

								<div class="form-fields-wrapper">
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Tên người liên hệ <sup>*</sup></p>
								<input type="text" id="" name="company_contact" placeholder="" value="<?php echo $info_company->company_contact; ?>" >	
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_contact'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Chức vụ người liên hệ<sup>*</sup></p>
											<input type="text" id="" name="contact_title" value="<?php echo $info_company->contact_title; ?>">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('contact_title'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Email người liên hệ <sup>*</sup></p>
								<input type="text" id="" name="contact_email" placeholder="" value="<?php echo $info_company->contact_email; ?>" >	
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('contact_email'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Điện thoại người liên hệ<sup>*</sup></p>
											<input type="text" id="" name="contact_phone" value="<?php echo $info_company->contact_phone; ?>">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('contact_phone'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
								</div> <!-- end .form-fields-wrapper -->

					    		<div class="button-wrapper text-center">
					    			<input type="submit" name="" class="button" value="Cập nhật thông tin">
					    		</div> <!-- end .button-wrapper -->

					    	</div> <!-- end .form-inner -->
					 	</fieldset>



					</form> <!-- end .job-post-form -->



							</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->