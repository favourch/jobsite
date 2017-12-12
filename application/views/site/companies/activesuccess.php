<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="breadcrumb-menu flex items-center no-column">
						<?php if($company_info->logo_url==''): ?>
						<img src="<?php echo public_url('site/images/buildingwhite.png'); ?>" class="img-responsive">
						<?php else: ?>
						<img src="<?php echo base_url('uploads/company/'.$company_info->logo_url) ?>" class="img-responsive">
					<?php endif; ?>
						<div class="breadcrumb-info-dashboard">
							<h2><?php echo $company_info->company_name; ?></h2>
							<h4><?php echo $company_info->company_address; ?></h4>
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
							    <li><a href="<?php echo base_url('nha-tuyen-dung'); ?>">Thông tin tài khoản</a></li>
							    <li><a href="<?php echo base_url('nha-tuyen-dung/cap-nhat-thong-tin'); ?>">Cập nhật thông tin</a></li>
							    <li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications-employer">Tin nhắn</a> <span class="notification-count">2</span></li>

							    <li class="nav-divider"></li>
							   	<li class="heading">QUẢN LÝ TUYỂN DỤNG</li>
						<li><a href="<?php echo base_url('nha-tuyen-dung/dang-tin'); ?>">Đăng tin tuyển dụng mới</a></li>
							   <li><a href="<?php echo base_url('nha-tuyen-dung/danh-sach-tin-dang'); ?>">Tuyển dụng đã đăng</a></li>
							    <li class="nav-divider"></li>
							    <li class="heading">QUẢN LÝ HỒ SƠ</li>
								<li><a data-toggle="pill" href="#manage-jobs">Hồ sơ đã lưu</a></li>
							   <li><a data-toggle="pill" href="#manage-applications-employer">Tìm ứng viên</a></li>
							    <li class="nav-divider"></li>
							    <li class="active"><a href="#">Đổi mật khẩu</a></li>
							    <li><a href="<?php echo base_url('companies/logout'); ?>">Đăng xuất</a></li>
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