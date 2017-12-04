<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="breadcrumb-menu flex items-center no-column">
						
						<?php if($company_info->logo_url==''): ?>
						<img src="<?php echo public_url('site/images/buildingwhite.png'); ?>" alt="logo công ty" class="img-responsive">
						<?php else: ?>
						<img src="<?php echo base_url('uploads/company/'.$company_info->logo_url); ?>" alt="logo công ty" class="img-responsive">
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
							    <li><a href="<?php echo base_url('companies/view'); ?>">Thông tin tài khoản</a></li>
							    <li><a href="<?php echo base_url('companies/edit'); ?>">Cập nhật thông tin</a></li>
							    <li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications-employer">Tin nhắn</a> <span class="notification-count">2</span></li>

							    <li class="nav-divider"></li>
							   	<li class="heading">QUẢN LÝ TUYỂN DỤNG</li>
						<li><a href="<?php echo base_url('companies/postjobs'); ?>">Đăng tin tuyển dụng mới</a></li>
							   <li class="active"><a href="#manage-jobs">Tuyển dụng đã đăng</a></li>
							    <li class="nav-divider"></li>
							    <li class="heading">QUẢN LÝ HỒ SƠ</li>
								<li><a data-toggle="pill" href="#manage-jobs">Hồ sơ đã lưu</a></li>
							   <li><a data-toggle="pill" href="#manage-applications-employer">Tìm ứng viên</a></li>
							    <li class="nav-divider"></li>
							    <li><a data-toggle="pill" href="#change-password-employer">Đổi mật khẩu</a></li>
							    <li><a href="<?php echo base_url('companies/logout'); ?>">Đăng xuất</a></li>
							</ul>
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">

							<div class="tab-content employer-dashboard">

							    <div id="manage-jobs" class="tab-pane fade in active">
							        <h3 class="tab-pane-title">Tất cả tin đã đăng</h3>
							        <div class="posted-jobs-list-wrapper">

							        	<ul class="posted-jobs-table-headings flex items-center no-column list-unstyled">
							        		<li class="posted-job-title-cell"><h6>Vị trí tuyển dụng</h6></li>
							        		<li class="posted-job-type-cell"><h6>Lượt xem</h6></li>
							        		<li class="posted-job-candidates-cell"><h6>Lượt ứng tuyển</h6></li>
							        		<li class="posted-job-featured-cell"><h6>Làm mới</h6></li>
							        	</ul> <!-- end .posted-jobs-table-headings -->

							        	<div class="posted-jobs-wrapper">

							        	<?php foreach($info_job as $row): ?>
							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Vị trí tuyển dụng</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4><?php echo $row->title; ?></h4>
										<p><i class="ion-person-stalker"></i>Số lượng : <?php echo $row->amount; ?></p>
										<p><i class="ion-clock"></i>Ngày cập nhật : <?php echo int_to_date($row->start_date); ?></p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Lượt xem</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap" style="padding-left: 20px;">
									        			<?php echo $row->view; ?>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Lượt ứng tuyển</h6>
													</div> <!-- end .cell-label -->												<span style="padding-left: 20px;">3</span>	
																				        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<span>Làm mới</span>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
													<span style="padding-left: 20px;">3</span>	
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<a href="<?php echo base_url($row->cat_name.'-'.$row->id.'-jv'); ?>" class="button button-sm full-time" title="Xem"><i class="ion-information-circled" style="font-size: 15px"></i></a>
								        			<a href="<?php echo base_url('managejob/edit/'.$row->id); ?>" class="button button-sm part-time" title="Sửa"><i class="ion-compose" style="font-size: 15px"></i></a>
								        			<a href="#" class="button button-sm freelancer" title="Khóa tin" ><i class="ion-locked" style="font-size: 15px"></i></a>					        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>
							        	<?php endforeach; ?>

							        	</div> <!-- end .posted-jobs-wrapper -->
						        	</div> <!-- end .posted-jobs-list-wrapper -->

						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<?php echo $this->pagination->create_links(); ?>
									</div> <!-- end .jobpress-custom-pager -->							        
							    </div> <!-- end #manage-applications-tab -->

							</div> <!-- end .employer-dashboard -->
						</div> <!-- end .right-side-content -->

					</div> <!-- end .employer-dashboard-wrapper -->
					</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->