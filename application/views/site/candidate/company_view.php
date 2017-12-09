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

						<?php $this->load->view('site/candidate/left'); ?>

						<div class="right-side-content">
							<div class="tab-content candidate-dashboard">

					    <div id="job-alerts" class="tab-pane fade in active">
							        <h3 class="tab-pane-title">Nhà tuyển dụng đã xem hồ sơ</h3>
							        <div class="job-alerts-list-wrapper">
							        	<ul class="job-alert-table-headings flex items-center no-column list-unstyled">
							        		<li class="company-name-cell"><h6>Company Name</h6></li>
							        		<li class="job-position-cell"><h6>Position</h6></li>
							        		<li class="contract-type-cell"><h6>Contract Type</h6></li>
							        		<li class="job-frequency-cell"><h6>Frequency</h6></li>
							        	</ul> <!-- end .job-alert-table-headings -->
							        	<div class="job-alerts-wrapper">											
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Banana Inc.</h4>
														<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>web designer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>

							        	</div> <!-- end .job-alerts-wrapper -->
						        	</div> <!-- end .job-alerts-list-wrapper -->
						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
										<ul class="list-unstyled flex no-column items-center">
											<li><a href="#0">1</a></li>
											<li><a href="#0">2</a></li>
											<li><a href="#0">3</a></li>
											<li><a href="#0">4</a></li>
											<li><a href="#0">5</a></li>									
										</ul>
										<a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
									</div> <!-- end .jobpress-custom-pager -->							        
							    </div> <!-- end #job-alerts-tab -->


							</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->