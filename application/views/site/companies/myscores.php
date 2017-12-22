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

				<?php $this->load->view('site/companies/left'); ?>
						
						<div class="right-side-content">

						<div id="notifications-employer" class="tab-pane fade active in">
							     <h3 class="tab-pane-title">Điểm hiện tại : <span style="color: #c00;"><?php echo $company_info->scores; ?></span></h3>
							        <div class="notifications-list-wrapper">
							        <?php foreach($listscores as $row): ?>
							        <?php $transaction = $this->transaction_model->get_info($row->transaction_id); ?>
							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<?php echo int_to_date($transaction->created); ?>
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Nạp tiền thành công ! bạn được <span style="color: #c00;"> + <?php echo $row->scores; ?> Điểm</span> vào tài khoản</p>
												<p class="ultra-light">Số tiền đã nạp : <span style="color: #006600;"><?php echo number_format($row->amount); ?> đ</span></p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>
							        <?php endforeach; ?>

							        </div> <!-- end .notifications-list-wrapper -->
						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<?php echo $this->pagination->create_links(); ?>
									</div> <!-- end .jobpress-custom-pager -->							        
							    </div>

						</div> <!-- end .right-side-content -->

					</div> <!-- end .employer-dashboard-wrapper -->
					</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->