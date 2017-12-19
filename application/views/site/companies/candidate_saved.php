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

					<div id="favorite-candidates" class="tab-pane fade active in active">
							        <br>
							        <h3 class="tab-pane-title">Danh sách hồ sơ đã lưu</h3>
							        <div class="favorite-candidates-list-wrapper">

							        <ul class="fav-candidates-table-headings flex items-center no-column list-unstyled">
							        	<li class="candidate-name-cell candidate-cell"><h6>Thông tin ứng viên</h6></li>
							        		<li class="candidate-skills-cell candidate-cell"><h6>Loại công việc</h6></li>
							        		<li class="candidate-location-cell"><h6>Địa điểm làm việc</h6></li>	
							        	</ul> <!-- end .fav-candidates-table-headings -->

							        	<div class="fav-candidates-wrapper">
							        	<?php foreach($listsaved as $row): ?>
							        	<?php $candidate = $this->member_candidate_model->get_info($row->candidate_id); ?>
							        	<?php $jobtype = $this->job_type_model->get_info($candidate->job_type); ?>
							        	<?php $city = $this->city_model->get_info($candidate->city_id); ?>
							        		<div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Thông tin ứng viên</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
			<?php if($candidate->image!=''): ?>
			<a href="<?php echo base_url('ho-so/'.$candidate->id.'/'.$candidate->cat_name.'.html'); ?>"><img src="<?php echo base_url('uploads/candidate/'.$candidate->image); ?>" alt="" class="img-responsive"></a>
		<?php else: ?>
			<a href="<?php echo base_url('ho-so/'.$candidate->id.'/'.$candidate->cat_name.'.html'); ?>"><img src="<?php echo public_url('site/images/userscandi.png'); ?>" alt="" class="img-responsive">
		<?php endif; ?></a>
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4><?php echo $candidate->full_name; ?></h4>
															<p><?php echo $candidate->title; ?></p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Loại công việc</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        	<button type="button" class="button button-sm full-time"><?php echo $jobtype->name; ?></button>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-skills-cell -->

								        	<div class="candidate-location-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Địa điểm làm việc</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><?php echo $city->name; ?></p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-location-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
	
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<a href="<?php echo base_url('companies/delsaved/'.$row->id); ?>"><i class="ion-ios-close-empty trash-icon"></i></a>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div>
							        		</div> <!-- end .fav-candidate -->

							        		<div class="divider"></div>
							        	<?php endforeach; ?>

							        	</div> <!-- end .fav-candidates-wrapper -->
						        	</div> <!-- end .favorite-candidates-list-wrapper -->
									
									<div class="divider"></div>	
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