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

						<?php $this->load->view('site/candidate/left'); ?>
						
						<div class="right-side-content">

							<div class="tab-content employer-dashboard">

							    <div id="change-password-employer" class="tab-pane fade in active">							    	
							        <div class="password-form-wrapper">	
							        	<h3 class="dark">Danh sách hồ sơ mẫu tại English Center Work</h3>									

			                         <div class="news-grid">
						
						<div class="news-grid-row flex space-between">
							<div class="news-item">
								<img src="<?php echo public_url('site/images/cv1.png'); ?>" class="img-responsive" style="height: 248px">
								<div class="news-content">
									<h3 class="news-title" style="text-align: center;">Basic style 1</p>
									<a href="<?php echo base_url('ung-vien/mau-ho-so-1'); ?>" target="_blank" class="button" style="width: 100%">Tải về <i class="ion-paper-airplane"></i></a>
								</div> <!-- end .news-content -->
							</div> <!-- end .news-item -->
							<div class="news-item">
								<img src="<?php echo public_url('site/images/cv2.png'); ?>" class="img-responsive" style="height: 248px">
								<div class="news-content">
									<h3 class="news-title" style="text-align: center;">Basic style 2</p>
									<a href="#0" target="_blank" class="button" style="width: 100%">Tải về <i class="ion-paper-airplane"></i></a>
								</div> <!-- end .news-content -->
							</div> <!-- end .news-item -->

							<div class="news-item">
								<img src="<?php echo public_url('site/images/cv3.png'); ?>" class="img-responsive" style="height: 248px">
								<div class="news-content">
									<h3 class="news-title" style="text-align: center;">Basic style 3</p>
									<a href="#0" target="_blank" class="button" style="width: 100%">Tải về <i class="ion-paper-airplane"></i></a>
								</div> <!-- end .news-content -->
							</div> <!-- end .news-item -->


							
			
						</div>  <!-- end .news-grid-row -->
			
					</div>
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