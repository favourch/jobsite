<!-- Post Job Section -->
		<div class="section job-post-form-section solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<!-- multistep form -->
					<form action="<?php echo base_url('companies/postjobs'); ?>" method="post" id="job-post-form" class="job-post-form multisteps-form">
					  	<fieldset>
						  	<h2 class="form-title text-center dark">Đăng tin tuyển dụng</h2>
						    <h3 class="step-title text-center dark">Hãy điền đầy đủ chi tiết những thông tin dưới đây để ứng viên có thể hiểu rõ hơn về yêu cầu của công ty bạn với vị trí này.</h2>

					    	<div class="form-inner">
								<div class="form-fields-wrapper">
									<h4 class="form-fields-title dark">Xem <a href="#">Quy định đăng tin của English center work</a> để đảm bảo Quý công ty điền đủ, đúng thông tin tuyển dụng.</h4>
									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Chức danh (*)</p>
											 <input type="text" id="title" name="title" value="<?php echo set_value('title'); ?>" required="">
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
											<input type="text" id="amount" name="amount" required="">
								<span style="font-size: 12px; color: #c00"><?php echo form_error('amount'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Cấp bậc (*)</p>
											<select class="form-control" id="level_id" name="level_id" required="">
											    <option value="">---Vui lòng chọn---</option>
											    <?php foreach($level as $row): ?>
											    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
											   <?php endforeach; ?>
											</select>
										</div>
										<div class="form-group">
											<p class="label">Loại hình công việc (*)</p>
											<select class="form-control" id="type_id" name="type_id" required="">
											    <option value="">---Vui lòng chọn---</option>
											    <?php foreach($jobtype as $row): ?>
											    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
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
											    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
											   <?php endforeach; ?>
											</select>
										</div>
										<div class="form-group">
											<p class="label">Kinh nghiệm (*)</p>
											<select class="form-control" id="require_experience_id" name="require_experience_id" required="">
											    <option value="">---Vui lòng chọn---</option>
											    <?php foreach($experience as $row): ?>
											    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
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
											    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
											   <?php endforeach; ?>
											</select>
										</div>
										<div class="form-group">
											<p class="label">Lĩnh vực cần tuyển (*)</p>
											<select class="form-control" id="career_id" name="career_id" required="">
											    <option value="">---Vui lòng chọn---</option>
											    <?php foreach($career as $row): ?>
											    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
											   <?php endforeach; ?>
											</select>
										</div>
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Giới tính</p>
											<select class="form-control" id="gender" name="gender">
											    <option value="0">---Không yêu cầu---</option>
											    <option value="1">Nam</option>
											    <option value="2">Nữ</option>
											</select>
										</div>
										<div class="form-group">
											<p class="label">Địa điểm làm việc (*)</p>
											<select class="form-control" id="city_id" name="city_id" required="">
											   <option value="">---Vui lòng chọn---</option>
											    <?php foreach($city as $row): ?>
											    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
											   <?php endforeach; ?>
											</select>
										</div>
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Mô tả công việc (*)</p>
											<textarea name="content" id="content" class="txtarea2" rows="6"></textarea>
								<span style="font-size: 12px; color: #c00"><?php echo form_error('content'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Quyền lợi được hưởng</p>
											<textarea name="benefit" id="benefit" class="txtarea2" rows="6"></textarea>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Yêu cầu công việc (*)</p>
								<textarea name="job_requirement" class="txtarea2" rows="6"></textarea>
								<span style="font-size: 12px; color: #c00"><?php echo form_error('job_requirement'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Yêu cầu hồ sơ</p>
<textarea name="profile" class="txtarea2">- Đơn xin việc.
- Sơ yếu lý lịch.
- Hộ khẩu, chứng minh nhân dân và giấy khám sức khỏe.
- Các bằng cấp có liên quan.</textarea>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Hạn nộp hồ sơ (*)</p>
						<input type="text" id="end_date" name="end_date" class="datepicker" required="">
						<span style="font-size: 12px; color: #c00"><?php echo form_error('end_date'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Ngôn ngữ hồ sơ (*)</p>
											<select class="form-control" id="language" name="language" required="">
                                        <option value="">-- Vui lòng chọn --</option>
                                        <option value="1">Tiếng Việt</option>
                                        <option value="2">Tiếng Anh</option>
                                        <option value="3">Tiếng Pháp</option>
                                        <option value="4">Tiếng Nhật</option>
                                        <option value="5">Tiếng Trung Quốc</option>
                                        <option value="6">Tiếng Hàn Quốc</option>
                                        <option value="20">Bất kỳ</option>
											</select>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

								</div> <!-- end .form-fields-wrapper -->

								<div class="divider"></div>

					    		<div class="button-wrapper text-center">
					    			<input type="submit" class="button" value="ĐĂNG TIN TUYỂN DỤNG">
					    		</div> <!-- end .button-wrapper -->			    		

					    	</div> <!-- end .form-inner -->							
					 	</fieldset>

					</form> <!-- end .job-post-form -->

				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->