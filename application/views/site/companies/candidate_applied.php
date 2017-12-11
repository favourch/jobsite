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

							<div class="tab-content employer-dashboard">
	    <div id="manage-applications-employer" class="tab-pane fade in active">
							        <h3 class="tab-pane-title">Danh sách ứng viên nộp hồ sơ</h3>
							        <div class="candidate-applications-list-wrapper">

							        	<ul class="candidate-applications-table-headings flex items-center no-column no-wrap list-unstyled">
							        		<li class="candidate-name-cell candidate-cell"><h6>Ứng Viên</h6></li>
							        		<li class="candidate-job-cell candidate-cell"><h6>Vị trí ứng tuyển</h6></li>
							        		<li class="candidate-resume-cell"><h6>Hồ sơ</h6></li>
							        		<li class="candidate-actions-cell"><h6>Ngày nộp hồ sơ</h6></li>
							        	</ul> <!-- end .fav-candidates-table-headings -->

							        	<?php foreach($listapplied as $row): ?>
							        	<?php $candidate = $this->member_candidate_model->get_info($row->candidate_id); ?>
							        	<?php $recuitment = $this->recruitment_model->get_info($row->recruitment_id); ?>
							        	<div class="candidate-applications-wrapper">
							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Ứng Viên</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
					<div class="candidate-img">
					<img src="<?php echo base_url('uploads/candidate/'.$candidate->image); ?>" alt="" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4><?php echo $candidate->full_name; ?></h4>
															<p><?php echo $candidate->title; ?></p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Vị trí ứng tuyển</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><?php echo $recuitment->title; ?></p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Hồ sơ</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><a href="<?php echo base_url('uploads/candidatecv/'.$row->cv_upload); ?>" target="_blank"><i class="ion-document"></i></span><?php echo $row->cv_upload; ?></a></p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Ngày nộp hồ sơ</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<?php echo int_to_date_full($row->apply_date); ?>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        	</div> <!-- end .candidate-applications-wrapper -->
							        <?php endforeach; ?>

						        	</div> <!-- end .candidate-applications-list-wrapper -->

						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<?php echo $this->pagination->create_links(); ?>
									</div> <!-- end .jobpress-custom-pager -->

							    </div> <!-- end #manage-applications-employer -->

							</div> <!-- end .employer-dashboard -->
						</div> <!-- end .right-side-content -->

					</div> <!-- end .employer-dashboard-wrapper -->
					</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->