		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="breadcrumb-menu flex items-center no-column">
						
						<div class="breadcrumb-info-dashboard">
							<h2><?php echo $user_info->full_name; ?></h2>
							<h4><?php echo $user_info->email; ?></h4>
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
					<form action="" method="post" id="post-resume-form" class="post-resume-form multisteps-form">
					  	<fieldset>
						  	
						    <h3 class="step-title text-center dark"><strong><?php echo $user_info->full_name; ?></strong>, Bổ sung thông tin hồ sơ của bạn để nhận được nhiều cơ hội phỏng vấn hơn.</h2>

					    	<div class="form-inner">
					    		
								<div class="form-fields-wrapper">
								

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Chức danh<sup>*</sup></p>
										<input type="text" id="" name="title" placeholder="Vị trí hiện tại, ví dụ : Developer">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('title'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Cấp bậc hiện tại<sup>*</sup></p>
										<select name="currentjoblevel" style="width: 100%;">
											<option value="">---Vui lòng chọn---</option>
											<?php foreach($currentlv as $row): ?>
											<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
										<?php endforeach; ?>
										</select>
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
											<!-- <input type="date" id="" name="birthday" placeholder=""> -->
											<input type="text" class="datepicker" placeholder="mm/dd/yyyy" id="" name="birthday" >
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