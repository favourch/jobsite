<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="breadcrumb-menu flex items-center no-column">
						<?php if($user_info->image==''): ?>
						<img src="<?php echo public_url('site/images/user.png'); ?>" class="img-responsive">
						<?php else: ?>
						<img src="<?php echo base_url('uploads/candidate/'.$user_info->image) ?>" class="img-responsive">
					<?php endif; ?>
						<div class="breadcrumb-info-dashboard">
							<h2><?php echo $user_info->full_name; ?></h2>
							<h4><?php echo $user_info->email; ?></h4>
						</div> <!-- end .candidate-info -->
					</div> <!-- end .breadcrumb-menu -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Employer Dashboard -->
		<div class="section employer-dashboard-content solid-light-grey-bg">
			<div class="inner">
				<div class="container">
				<!-- Thông báo dữ liệu -->
				<div class="thongbao-tc"><?php if(isset($message)) { $this->load->view('admin/message', $this->data); } ?></div>
				<!-- End thông báo dữ liệu -->
					<div class="employer-dashboard-wrapper flex space-between no-wrap">

						<div class="left-sidebar-menu">							
							<ul class="nav nav-pills nav-stacked">
								<li class="heading">CÀI ĐẶT TÀI KHOẢN</li>
							    <li><a href="<?php echo base_url('ung-vien'); ?>">Hồ sơ của tôi</a></li>
							    <li><a href="<?php echo base_url('ung-vien/cap-nhat-thong-tin'); ?>">Cập nhật thông tin</a></li>
							    <li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications-employer">Tin nhắn</a> <span class="notification-count">2</span></li>

							    <li class="nav-divider"></li>
							   	<li class="heading">VIỆC LÀM CỦA TÔI</li>
						<li><a href="<?php echo base_url('ung-vien/viec-lam-da-luu'); ?>">Việc làm đã lưu</a></li>
							   <li><a href="<?php echo base_url('ung-vien/viec-lam-da-ung-tuyen'); ?>">Việc làm đã ứng tuyển</a></li>
							    <li><a href="<?php echo base_url('ung-vien/nha-tuyen-dung-xem-ho-so'); ?>">Nhà tuyển dụng xem hồ sơ</a></li>
							    <li class="nav-divider"></li>
							    <li><a href="<?php echo base_url('ung-vien/doi-mat-khau'); ?>">Đổi mật khẩu</a></li>
							    <li><a href="<?php echo base_url('candidate/logout'); ?>">Đăng xuất</a></li>
							</ul>
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">

							<div class="tab-content employer-dashboard">

							    <div id="change-password-employer" class="tab-pane fade in active">							    	
							        <div class="password-form-wrapper">	
							        	<h3 class="dark">Kích hoạt tài khoản</h3>									
			                         <p style="color: #c00; padding-bottom: 30px">Kích hoạt tài khoản thành công ! </p>
							        </div> <!-- end .password-form-wrapper -->						        
							    </div> <!-- end #change-password-tab -->

							</div> <!-- end .employer-dashboard -->
						</div> <!-- end .right-side-content -->

					</div> <!-- end .employer-dashboard-wrapper -->
					</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->