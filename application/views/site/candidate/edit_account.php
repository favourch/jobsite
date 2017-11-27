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

							    <div id="change-password" class="">							    	
							        <div class="password-form-wrapper">	
							        	<h3 class="dark">Cập nhật tài khoản</h3>

			                            <form class="password-form" method="post" action="" enctype="multipart/form-data">
											<div class="form-group">
											    <label for="InputEmail1">Tên đầy đủ<sup>*</sup></label>
											    <input type="text" class="form-control" name="full_name" value="<?php echo $info->full_name; ?>" placeholder="">
											    <span style="color: #c00; font-size: 13px"><?php echo form_error('full_name'); ?></span>
											</div>

											<div class="form-group">
											    <label for="InputPassword1">Ngày sinh<sup>*</sup></label>
											    <input type="date" class="form-control" id="InputPassword1" placeholder="">
											</div>

											<div class="form-group">
											    <label for="InputPassword1">Giới tính<sup>*</sup></label>
											    <select name="gender" style="width: 100%;">
											    	<option value="">---Chọn---</option>
											    	<?php if($info->gender==1): ?>
											    	<option value="1" selected>Nam</option>
											    	<option value="2">Nữ</option>
											    <?php  elseif($info->gender==2): ?>
											    	<option value="2" selected>Nữ</option>
											    	<option value="1">Nam</option>
											    <?php else: ?>
											    	<option value="1">Nam</option>
											    	<option value="2">Nữ</option>
											    <?php endif; ?>
											    </select>
											</div>		
											<div class="form-group">
											    <label for="InputPassword1">Nơi cư ngụ<sup>*</sup></label>			
											     <select name="city_id" style="width: 100%;">
											    	<option value="">Vui lòng chọn...</option>
											    	<?php foreach($city as $row): ?>
											    	<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $info->city_id) ? "selected" : "" ?> ><?php echo $row->name; ?></option>
											    <?php endforeach; ?>
											    	</select>
											    </div>	
											 <div class="form-group">
											    <label for="InputPassword1">Số điện thoại<sup>*</sup></label>
											    <input type="text" class="form-control" id="" value="<?php echo $info->phone; ?>" name="phone" placeholder="">
											</div>
											<div class="form-group">
											    <label for="InputPassword1">Địa chỉ<sup>*</sup></label>
											    <input type="text" class="form-control" id="" value="<?php echo $info->address; ?>" name="address" placeholder="">
											</div>
											<div class="form-group">
											    <label for="InputPassword1">Ảnh thẻ<sup>*</sup></label>
											    <input type="file" class="form-control" value="" name="image">
											</div>

											    <div class="password-button-wrapper">
												<input type="submit" class="button" value="Lưu thông tin">
												<button type="button" class="button" value="">Hủy bỏ</button>
										</div> <!-- end .password-button-wrapper -->		
										</form> <!-- end .password-form -->
										
							        </div> <!-- end .password-form-wrapper -->						        
							    </div> <!-- end #change-password-tab -->

							</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->