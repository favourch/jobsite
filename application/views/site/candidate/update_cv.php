		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="breadcrumb-menu flex items-center no-column">
						
						<div class="breadcrumb-info-dashboard">
							<h2><?php echo $info->full_name; ?></h2>
							<h4><?php echo $info->email; ?></h4>
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
								<li class="heading">Quản lý tài khoản</li>

							    <li><a data-toggle="pill" class="active" href="#resume">Hồ sơ của tôi</a></li>
							    <li><a data-toggle="pill" href="#candidate-cv">Cập nhật tài khoản</a></li>
							    <li><a data-toggle="pill" href="#bookmarked-jobs">Việc làm đã xem</a></li>
							    <li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications">Việc làm đã ứng tuyển</a> <span class="notification-count">2</span></li>
							    <li class="nav-divider"></li>
							   	<li class="heading">Manage job</li>
								<li><a data-toggle="pill" href="#manage-applications">Manage Applications</a></li>
							    <li><a data-toggle="pill" href="#job-alerts">Job Alerts</a></li>
							    <li class="nav-divider"></li>
							    <li><a data-toggle="pill" href="#change-password">Change Password</a></li>
							    <li><a data-toggle="pill" href="#signout">Sign Out</a></li>
							</ul>
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">
							<div class="tab-content candidate-dashboard">

										<!-- multistep form -->
					<form action="" method="post" id="post-resume-form" class="post-resume-form multisteps-form" enctype="multipart/form-data">
					  	<fieldset>
						  	
						    <h3 class="step-title text-center dark"><strong><?php echo $info->full_name; ?></strong>, Bổ sung thông tin hồ sơ của bạn để nhận được nhiều cơ hội phỏng vấn hơn.</h2>

					    	<div class="form-inner">
					    		
								<div class="form-fields-wrapper">
								
										<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
								<p class="label">Tên đầy đủ<sup>*</sup></p>
							<input type="text" id="" name="full_name" value="<?php echo $info->full_name; ?>">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('full_name'); ?></span>
										</div> <!-- end .form-group -->
									
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Chức danh<sup>*</sup></p>
								<input type="text" id="" name="title" placeholder="Vị trí hiện tại, ví dụ : Developer" value="<?php echo $info->title; ?>">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('title'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Cấp bậc hiện tại<sup>*</sup></p>
										<select name="level_id" style="width: 100%;">
											<option value="">---Vui lòng chọn---</option>
										<?php foreach($currentlv as $row): ?>
											<option value="<?php echo $row->id; ?>" <?php echo ($row->id==$info->level_id) ? "selected" : ""; ?> ><?php echo $row->name; ?></option>
										<?php endforeach; ?>
										</select>
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('level_id'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										
										<div class="form-group">
											<p class="label">Số năm kinh nghiệm<sup>*</sup></p>
										<select name="experience_id" style="width: 100%;">
											<option value="">---Vui lòng chọn---</option>
										<?php foreach($experience as $row): ?>
											<option value="<?php echo $row->id; ?>" <?php echo ($row->id==$info->experience_id) ? "selected" : ""; ?> ><?php echo $row->name; ?></option>
										<?php endforeach; ?>
										</select>
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('experience_id'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Quốc tịch</p>
											<select name="nationality" style="width: 100%">
												<option value="">---Vui lòng chọn---</option>
												<?php if($info->nationality==1): ?>
												<option value="1" selected="">Người Việt Nam</option>
												<option value="2">Người nước ngoài</option>
											<?php elseif($info->nationality==2): ?>
												<option value="1">Người Việt Nam</option>
												<option value="2" selected="">Người nước ngoài</option>
											<?php else: ?>
												<option value="1">Người Việt Nam</option>
												<option value="2">Người nước ngoài</option>
											<?php endif; ?>
											</select>
										</div> <!-- end .form-group -->


									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Giới tính</p>
											<select name="gender" style="width: 100%">
												<option value="">---Vui lòng chọn---</option>
												<?php if($user_info->gender==1): ?>
												<option value="1" selected="">Nam</option>
												<option value="2">Nữ</option>
											<?php elseif($user_info->gender==2): ?>
												<option value="1">Nam</option>
												<option value="2" selected="">Nữ</option>
											<?php else: ?>
												<option value="1">Nam</option>
												<option value="2">Nữ</option>
											<?php endif; ?>
											</select>
										</div> <!-- end .form-group -->

										<div class="form-group">
											<p class="label">Ngày sinh</p>
											<!-- <input type="date" id="" name="birthday" placeholder=""> -->
								<input type="text" class="datepicker" placeholder="mm/dd/yyyy" id="" name="birthday" value="<?php echo int_to_date($info->birthday); ?>" >
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
								</div> <!-- end .form-fields-wrapper -->

				                <div class="divider"></div>

								<div class="form-fields-wrapper">
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Bạn đang sống tại ? <sup>*</sup></p>
											<select name="city_id" style="width: 100%;">
												<option value="">---Chọn tỉnh/thành phố---</option>
												<?php foreach($city as $row): ?>
												<option value="<?php echo $row->id; ?>" <?php echo ($row->id==$info->city_id) ? "selected" : ""; ?> ><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('city'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Số điện thoại<sup>*</sup></p>
											<input type="text" id="" name="phone" placeholder="Nhập số điện thoại" value="<?php echo $info->phone; ?>">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('phone'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
								
									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Địa chỉ / Quận huyện<sup>*</sup></p>
											<input type="text" id="" name="address" placeholder="Nhập địa chỉ" value="<?php echo $info->address; ?>">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('address'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
										<div class="form-group-wrapper">
										<div class="form-group upload-company-logo">
											<p class="label">Ảnh đại diện<span>(Kích thước tối đa: 1MB)</span></p>
									    	<label for="company-logo-upload" class="flex space-between items-center no-column no-wrap">
									    	<span>Tải lên hình ảnh</span>
									    	<span><i class="ion-ios-folder-outline"></i>Chọn tệp</span>								    	
									    	</label>
										    <input type="file" name="image" id="company-logo-upload">
										</div> <!-- end .form-group -->
									</div>

								</div> <!-- end .form-fields-wrapper -->

					    		<div class="button-wrapper text-center">
					    			<input type="submit" name="" class="button" value="Cập nhật thông tin">
					    			<button type="submit" name="" class="button">Hủy bỏ</button>
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