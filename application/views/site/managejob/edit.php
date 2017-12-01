		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="breadcrumb-menu flex items-center no-column">
						
						<div class="breadcrumb-info-dashboard">
							<h2></h2>
							<h4></h4>
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
							    <li><a href="<?php echo base_url('companies/postjobs'); ?>">Đăng tuyển dụng mới</a></li>
							    <li><a href="<?php echo base_url('managejob/index'); ?>">Tuyển dụng đã đăng</a></li>
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

						<form action="<?php echo base_url('managejob/edit'); ?>" method="post" id="post-resume-form" class="post-resume-form multisteps-form" enctype="multipart/form-data">
					  	<fieldset>
						  	<h2 class="form-title text-center dark">CẬP NHẬT THÔNG TIN TUYỂN DỤNG</h2>
						    <h3 class="step-title text-center dark">Hãy Tham Gia Cùng Hàng Ngàn Ứng Viên Đang Sử Dụng English Work Mỗi Ngày, việc tìm kiếm ứng viên trở lên dễ dàng hơn </h2>

					    	<div class="form-inner">
								<div class="form-fields-wrapper">
										<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Chức danh<sup>*</sup></p>
										<input type="text" id="" name="title" value="<?php echo $job_info->title; ?>" >
									<span style="color: #c00; font-size: 12px;"><?php echo form_error('title'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Mã số</p>
									<input type="text" id="" name="jobcode" value="" >
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Số lượng cần tuyển <sup>*</sup></p>
								<input type="text" id="" name="amount" value="<?php echo $job_info->amount; ?>" >
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('amount'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Cấp bậc</p>
											<select name="level_id" style="width: 100%;">
												<option value="">---Vui lòng chọn---</option>
												<?php foreach($level as $row): ?>
												<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $job_info->level_id) ? "selected" : "" ?> ><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div> <!-- end .form-group -->

										<div class="form-group">
											<p class="label">Loại hình công việc <sup>*</sup></p>
											<select name="type_id" style="width: 100%;">
												<option value="">---Vui lòng chọn---</option>
												<?php foreach($jobtype as $row): ?>
												<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $job_info->type_id) ? "selected" : "" ?>><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Mức lương tháng</p>
											<select name="salary_id" style="width: 100%;">
												<option value="">---Vui lòng chọn---</option>
												<?php foreach($salary as $row): ?>
												<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $job_info->salary_id) ? "selected" : "" ?> ><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div> <!-- end .form-group -->

										<div class="form-group">
											<p class="label">Kinh nghiệm <sup>*</sup></p>
											<select name="require_experience_id" style="width: 100%;">
												<option value="">---Vui lòng chọn---</option>
												<?php foreach($experience as $row): ?>
												<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $job_info->require_experience_id) ? "selected" : "" ?>><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

										<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Bằng cấp</p>
											<select name="literacy_id" style="width: 100%;">
												<option value="0">---Không yêu cầu---</option>
												<?php foreach($literacy as $row): ?>
												<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $job_info->literacy_id) ? "selected" : "" ?> ><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div> <!-- end .form-group -->

										<div class="form-group">
											<p class="label">Lĩnh vực cần tuyển <sup>*</sup></p>
											<select name="career_id" style="width: 100%;">
												<option value="">---Vui lòng chọn---</option>
												<?php foreach($career as $row): ?>
												<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $job_info->career_id) ? "selected" : "" ?>><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Giới tính</p>
											<select name="gender" style="width: 100%;">
												<option value="0">---Không yêu cầu---</option>
												<?php if($job_info->gender==1): ?>
												<option value="1" selected="">Nam</option>
												<option value="2">Nữ</option>
												<?php elseif($job_info->gender==2) : ?>
												<option value="2" selected="">Nữ</option>
												<option value="1">Nam</option>
												<?php else: ?>
												<option value="1">Nam</option>
												<option value="2">Nữ</option>
											<?php endif; ?>
											</select>
										</div> <!-- end .form-group -->

										<div class="form-group">
											<p class="label">Địa điểm làm việc <sup>*</sup></p>
											<select name="city_id" style="width: 100%;">
												<option value="">---Vui lòng chọn---</option>
												<?php foreach($city as $row): ?>
												<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $job_info->city_id) ? "selected" : "" ?>><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Mô tả công việc <sup>*</sup></p>
								<textarea name="content" class="txtarea2"><?php echo $job_info->content; ?></textarea>
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('content'); ?></span>
										</div> <!-- end .form-group -->
									</div>

									<div class="form-group-wrapper space-between items-center">
								<div class="form-group">
								<p class="label">Quyền lợi được hưởng</p>
								<textarea name="benefit" class="txtarea2"><?php echo $job_info->benefit; ?></textarea>
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('benefit'); ?></span>
										</div> <!-- end .form-group -->
									</div>

								<div class="form-group-wrapper space-between items-center">
								<div class="form-group">
								<p class="label">Yêu cầu công việc</p>
								<textarea name="job_requirement" class="txtarea2"><?php echo $job_info->job_requirement; ?></textarea>
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('job_requirement'); ?></span>
								</div> <!-- end .form-group -->
									</div>

								<div class="form-group-wrapper space-between items-center">
								<div class="form-group">
								<p class="label">Yêu cầu hồ sơ</p>
								<textarea name="profile" class="txtarea2"><?php echo $job_info->profile; ?></textarea>
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('profile'); ?></span>
								</div> <!-- end .form-group -->
									</div>
								
								<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
								<p class="label">Hạn nộp hồ sơ</p>
								<input type="text" id="" name="end_date" class="datepicker" value="<?php echo $job_info->end_date; ?>" >
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('end_date'); ?></span>
										</div> <!-- end .form-group -->

										<div class="form-group">
											<p class="label">Ngôn ngữ hồ sơ <sup>*</sup></p>
											<select name="career_id" style="width: 100%;">
												<option value="">---Vui lòng chọn---</option>
												<option value="1">Tiếng Việt</option>
												<option value="2">Tiếng Anh</option>
											</select>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
								</div> <!-- end .form-fields-wrapper -->


				                <div class="divider"></div>

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