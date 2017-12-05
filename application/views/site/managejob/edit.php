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
								<li><a href="<?php echo base_url('nha-tuyen-dung'); ?>">Trang quản lý</a></li>
							    <li><a href="<?php echo base_url('nha-tuyen-dung/dang-tin'); ?>">Đăng tuyển dụng mới</a></li>
							    <li><a href="<?php echo base_url('nha-tuyen-dung/danh-sach-tin-dang'); ?>">Tuyển dụng đã đăng</a></li>
							    <li class="nav-divider"></li>
							    <li><a href="<?php echo base_url('nha-tuyen-dung/doi-mat-khau'); ?>">Đổi mật khẩu</a></li>
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

				<form action="#" method="post" id="job-post-form" class="job-post-form multisteps-form">
					  	<fieldset>
						  	<h2 class="form-title text-center dark">CẬP NHẬT THÔNG TIN TUYỂN DỤNG</h2>
					    	<div class="form-inner">
								<div class="form-fields-wrapper">
									<h4 class="form-fields-title dark">Xem <a href="#">Quy định đăng tin của English center work</a> để đảm bảo Quý công ty điền đủ, đúng thông tin tuyển dụng.</h4>
									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Chức danh (*)</p>
											 <input type="text" id="title" name="title" value="<?php echo $job_info->title; ?>" required="">
								<span style="font-size: 12px; color: #c00"><?php echo form_error('title'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Mã số</p>
											<input type="text" id="jobcode" name="jobcode" placeholder="" >
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Số lượng cần tuyển (*)</p>
								<input type="text" id="amount" name="amount" value="<?php echo $job_info->amount; ?>" required="">
								<span style="font-size: 12px; color: #c00"><?php echo form_error('amount'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Cấp bậc (*)</p>
											<select class="form-control" id="level_id" name="level_id" required="">
											    <option value="">---Vui lòng chọn---</option>
											    <?php foreach($level as $row): ?>
											    <option value="<?php echo $row->id; ?>" <?php echo ($row->id==$job_info->level_id) ? "selected" : ""  ?> ><?php echo $row->name; ?></option>
											   <?php endforeach; ?>
											</select>
										</div>
										<div class="form-group">
											<p class="label">Loại hình công việc (*)</p>
											<select class="form-control" id="type_id" name="type_id" required="">
											    <option value="">---Vui lòng chọn---</option>
											    <?php foreach($jobtype as $row): ?>
											    <option value="<?php echo $row->id; ?>" <?php echo ($row->id==$job_info->type_id) ? "selected" : ""  ?> ><?php echo $row->name; ?></option>
											    <?php endforeach; ?>
											</select>
										</div>
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Mức lương tháng (*)</p>
											<select class="form-control" id="salary_id" name="salary_id" required="">
											    <option value="">---Vui lòng chọn---</option>
											   <?php foreach($salary as $row): ?>
											    <option value="<?php echo $row->id; ?>" <?php echo ($row->id==$job_info->salary_id) ? "selected" : ""  ?> ><?php echo $row->name; ?></option>
											   <?php endforeach; ?>
											</select>
										</div>
										<div class="form-group">
											<p class="label">Kinh nghiệm (*)</p>
											<select class="form-control" id="require_experience_id" name="require_experience_id" required="">
											    <option value="">---Vui lòng chọn---</option>
											    <?php foreach($experience as $row): ?>
											    <option value="<?php echo $row->id; ?>" <?php echo ($row->id==$job_info->require_experience_id) ? "selected" : ""  ?>><?php echo $row->name; ?></option>
											   <?php endforeach; ?>
											</select>
										</div>
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Bằng cấp(*)</p>
											<select class="form-control" id="literacy_id" name="literacy_id">
											    <option value="0">---Không yêu cầu---</option>
											    <?php foreach($literacy as $row): ?>
											    <option value="<?php echo $row->id; ?>" <?php echo ($row->id==$job_info->literacy_id) ? "selected" : ""  ?>><?php echo $row->name; ?></option>
											   <?php endforeach; ?>
											</select>
										</div>
										<div class="form-group">
											<p class="label">Lĩnh vực cần tuyển (*)</p>
											<select class="form-control" id="career_id" name="career_id" required="">
											    <option value="">---Vui lòng chọn---</option>
											    <?php foreach($career as $row): ?>
											    <option value="<?php echo $row->id; ?>" <?php echo ($row->id==$job_info->career_id) ? "selected" : ""  ?>><?php echo $row->name; ?></option>
											   <?php endforeach; ?>
											</select>
										</div>
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Giới tính</p>
											<select class="form-control" id="gender" name="gender">
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
										</div>
										<div class="form-group">
											<p class="label">Địa điểm làm việc (*)</p>
											<select class="form-control" id="city_id" name="city_id" required="">
											   <option value="">---Vui lòng chọn---</option>
											    <?php foreach($city as $row): ?>
											    <option value="<?php echo $row->id; ?>" <?php echo ($row->id==$job_info->city_id) ? "selected" : ""  ?>><?php echo $row->name; ?></option>
											   <?php endforeach; ?>
											</select>
										</div>
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Mô tả công việc (*)</p>
											<textarea name="content" id="content" class="txtarea2" rows="6"><?php echo $job_info->content; ?></textarea>
								<span style="font-size: 12px; color: #c00"><?php echo form_error('content'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Quyền lợi được hưởng</p>
											<textarea name="benefit" id="benefit" class="txtarea2" rows="6"><?php echo $job_info->benefit; ?></textarea>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Yêu cầu công việc (*)</p>
								<textarea name="job_requirement" class="txtarea2" rows="6"><?php echo $job_info->job_requirement; ?></textarea>
								<span style="font-size: 12px; color: #c00"><?php echo form_error('job_requirement'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Yêu cầu hồ sơ</p>
								<textarea name="profile" class="txtarea2"><?php echo $job_info->profile; ?></textarea>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Hạn nộp hồ sơ (*)</p>
						<input type="text" id="end_date" name="end_date" class="datepicker" value="<?php echo int_to_date($job_info->end_date); ?>" required="">
						<span style="font-size: 12px; color: #c00"><?php echo form_error('end_date'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Ngôn ngữ hồ sơ (*)</p>
											<select class="form-control" id="language" name="language" required="">
                                        <option value="">-- Vui lòng chọn --</option>
                                        <?php if($job_info->language==1): ?>
                                        <option value="1" selected="">Tiếng Việt</option>
                                        <option value="2">Tiếng Anh</option>
                                        <?php elseif($job_info->gender==2) : ?>
                                        <option value="1">Tiếng Việt</option>
                                        <option value="2" selected="">Tiếng Anh</option>
                                        <?php else: ?>
                                        <option value="1">Tiếng Việt</option>
                                        <option value="2" selected="">Tiếng Anh</option>
                                    <?php endif; ?>
											</select>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

								</div> <!-- end .form-fields-wrapper -->

								<div class="divider"></div>

					    		<div class="button-wrapper text-center">
					    			<input type="submit" class="button" value="XÁC NHẬN THÔNG TIN">
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