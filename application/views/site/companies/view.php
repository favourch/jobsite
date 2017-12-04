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
							    <li class="active"><a data-toggle="pill" href="#profile">Thông tin tài khoản</a></li>
							    <li><a href="<?php echo base_url('companies/edit'); ?>">Cập nhật thông tin</a></li>
							    <li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications-employer">Tin nhắn</a> <span class="notification-count">2</span></li>

							    <li class="nav-divider"></li>
							   	<li class="heading">QUẢN LÝ TUYỂN DỤNG</li>
						<li><a href="<?php echo base_url('companies/postjobs'); ?>">Đăng tin tuyển dụng mới</a></li>
							   <li><a href="<?php echo base_url('managejob'); ?>">Tuyển dụng đã đăng</a></li>
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

							    <div id="favorite-candidates" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Favorite Candidates</h3>
							        <div class="favorite-candidates-list-wrapper">

							        	<ul class="fav-candidates-table-headings flex items-center no-column list-unstyled">
							        		<li class="candidate-name-cell candidate-cell"><h6>Name</h6></li>
							        		<li class="candidate-skills-cell candidate-cell"><h6>Skills</h6></li>
							        		<li class="candidate-location-cell"><h6>Location</h6></li>	
							        	</ul> <!-- end .fav-candidates-table-headings -->

							        	<div class="fav-candidates-wrapper">

							        		<div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="images/candidate-small01.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/candidate-small01.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Richard Thomas</h4>
															<p>UI/UX Designer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Skills</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm grey ">PS</button>
									        			<button type="button" class="button button-sm grey">AI</button>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-skills-cell -->

								        		<div class="candidate-location-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Location</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Park Ave, NYC, USA</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-location-cell -->

								        		<div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .fav-candidate -->

							        		<div class="divider"></div>


							        		<div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="images/candidate-small02.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/candidate-small02.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>David Ortega</h4>
															<p>Front-end developer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Skills</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm grey ">PS</button>
									        			<button type="button" class="button button-sm grey">AI</button>
									        			<button type="button" class="button button-sm grey">HTML/CSS</button>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-skills-cell -->

								        		<div class="candidate-location-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Location</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Park Ave, NYC, USA</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-location-cell -->

								        		<div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .fav-candidate -->

							        		<div class="divider"></div>

							        		<div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="images/candidate-small03.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/candidate-small03.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Tammy Dixon</h4>
															<p>Copywriter</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Skills</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm grey ">MS WORD</button>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-skills-cell -->

								        		<div class="candidate-location-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Location</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Park Ave, NYC, USA</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-location-cell -->

								        		<div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .fav-candidate -->

							        		<div class="divider"></div>

							        		<div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="images/candidate-small04.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/candidate-small04.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Brandon Reynolds</h4>
															<p>Web Developer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Skills</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm grey ">HTML/CSS</button>
									        			<button type="button" class="button button-sm grey">PHP</button>
									        			<button type="button" class="button button-sm grey">Jquery</button>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-skills-cell -->

								        		<div class="candidate-location-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Location</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Park Ave, NYC, USA</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-location-cell -->

								        		<div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .fav-candidate -->

							        		<div class="divider"></div>


							        		<div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="images/candidate-small05.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/candidate-small05.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Kathy Crawford</h4>
															<p>Graphic Designer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Skills</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm grey ">PS</button>
									        			<button type="button" class="button button-sm grey">AI</button>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-skills-cell -->

								        		<div class="candidate-location-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Location</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Park Ave, NYC, USA</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-location-cell -->

								        		<div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .fav-candidate -->

							        		<div class="divider"></div>

							        	</div> <!-- end .fav-candidates-wrapper -->
						        	</div> <!-- end .favorite-candidates-list-wrapper -->

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

							    </div> <!-- end #favorite-candidates-tab -->



							    <div id="manage-applications-employer" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Manage applications</h3>
							        <div class="candidate-applications-list-wrapper">

							        	<ul class="candidate-applications-table-headings flex items-center no-column no-wrap list-unstyled">
							        		<li class="candidate-name-cell candidate-cell"><h6>Name</h6></li>
							        		<li class="candidate-job-cell candidate-cell"><h6>Job</h6></li>
							        		<li class="candidate-resume-cell"><h6>Resume</h6></li>
							        		<li class="candidate-actions-cell"><h6>Actions</h6></li>
							        	</ul> <!-- end .fav-candidates-table-headings -->

							        	<div class="candidate-applications-wrapper">

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="images/candidate-small01.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/candidate-small01.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Richard Thomas</h4>
															<p>UI/UX Designer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Web Designer needed</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="images/candidate-small02.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/candidate-small02.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>David Ortega</h4>
															<p>Front-end developer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Front-end developer needed</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="images/candidate-small06.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/candidate-small06.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Nancy Suvillivan</h4>
															<p>Graphic Designer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Graphic Designer needed</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="images/candidate-small07.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/candidate-small07.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Gregory cooper</h4>
															<p>Web Designer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Web Designer needed</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="images/candidate-small08.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/candidate-small08.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Brittany Riley</h4>
															<p>Marketer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Looking for a market position</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        	</div> <!-- end .candidate-applications-wrapper -->
						        	</div> <!-- end .candidate-applications-list-wrapper -->

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

							    </div> <!-- end #manage-applications-employer -->

							    <div id="manage-jobs" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Manage Jobs</h3>
							        <div class="posted-jobs-list-wrapper">

							        	<ul class="posted-jobs-table-headings flex items-center no-column list-unstyled">
							        		<li class="posted-job-title-cell"><h6>Name</h6></li>
							        		<li class="posted-job-type-cell"><h6>Job Type</h6></li>
							        		<li class="posted-job-candidates-cell"><h6>Candidates</h6></li>
							        		<li class="posted-job-featured-cell"><h6>Featured</h6></li>
							        	</ul> <!-- end .posted-jobs-table-headings -->

							        	<div class="posted-jobs-wrapper">

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>Web Designer needed</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm freelancer">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="images/avatar02.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="images/avatar03.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="images/avatar04.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star grey"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>We're hring a fullstack developer</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm full-time">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="images/avatar02.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="images/avatar03.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="images/avatar04.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star safron"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>Front-end developer needed</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm part-time">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="images/avatar02.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="images/avatar03.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="images/avatar04.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star grey"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>Looking for internship web designer</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm internship">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="images/avatar02.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="images/avatar03.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="images/avatar04.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star grey"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>We're looking for an project leader</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm full-time">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="images/avatar02.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="images/avatar03.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="images/avatar04.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star safron"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        	</div> <!-- end .posted-jobs-wrapper -->
						        	</div> <!-- end .posted-jobs-list-wrapper -->

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
							    </div> <!-- end #manage-applications-tab -->

							    <div id="notifications-employer" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Your notifications</h3>
							        <div class="notifications-list-wrapper">

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo07.jpg.png" tppabs="http://jobpress.wecookcode.com/demo/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>has expired.</p>
												<p class="ultra-light">3 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification highlighted flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo07.jpg.png" tppabs="http://jobpress.wecookcode.com/demo/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Banana Inc. posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">4 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo13.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/company-logo13.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “Web designer needed” from<span class="company-name">Bull Creative Agency.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
												<p class="ultra-light">5 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo14.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/company-logo14.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “We’re looking for a designer” from<span class="company-name">Cat Studio</span>has expired.</p>
												<p class="ultra-light">6 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification highlighted flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo07.jpg.png" tppabs="http://jobpress.wecookcode.com/demo/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
												<p class="ultra-light">1 day ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo12.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/company-logo12.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Prymb Creative Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo08.jpg.png" tppabs="http://jobpress.wecookcode.com/demo/images/company-logo08.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Elephant Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo11.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/company-logo11.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Evotweet</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo14.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/company-logo14.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
											<p>Your bookmarked job “We're looking for a designer'” from<span class="company-name">Cat studio</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo15.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/company-logo15.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Audiotorium</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        </div> <!-- end .notifications-list-wrapper -->
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
							    </div> <!-- end #notifications-tab -->

							    <div id="profile" class="tab-pane fade in active">
							    	<div class="profile-badge"><h6>Thông tin công ty</h6></div>
							        <div class="profile-wrapper">

										<div class="profile-info profile-section flex no-column no-wrap">
											<div class="profile-picture">
												<?php if($company_info->logo_url==''): ?>
												<img src="<?php echo public_url('site/images/building.png'); ?>" alt="logo công ty" class="img-responsive">
											<?php else: ?>
												<img src="<?php echo base_url('uploads/company/'.$company_info->logo_url); ?>" alt="logo công ty" class="img-responsive">
											<?php endif; ?>

											</div> <!-- end .user-picture -->
											<div class="profile-meta">
												<h4 class="dark"><?php echo $company_info->company_name; ?></h4>

												<p><i class="ion-location"></i></a> <?php echo $company_info->company_address; ?></p>
												<div class="items-center no-wrap no-column">													
											<span class="contact-phone"><i class="ion-iphone"></i> <?php echo $company_info->company_phone; ?></span> -
											<span class="contact-email"><i class="ion-email"></i> <?php echo $company_info->email; ?></span>
											
												</div> <!-- end .profile-contact -->
												<div class="items-center no-wrap no-column">	
												<p><i class="ion-android-globe"></i> Website : <?php echo $company_info->website; ?></p>
												</div>
												
											</div> <!-- end .profile-meta -->
										</div> <!-- end .profile-info -->

										<div class="divider"></div>

										<div class="profile-about profile-section">
											<h3 class="dark profile-title">THÔNG TIN NHÀ TUYỂN DỤNG<span>
											<a href="<?php echo base_url('companies/edit'); ?>"><i class="ion-edit"></i></a></span></h3>
											<ul class="profile-ul">
												<li class="reg1"><p>Tên công ty</p></li>
												<li class="reg2"><p><?php echo $company_info->company_name; ?></p></li>
												<li class="reg1"><p>Địa chỉ</p></li>
										<li class="reg2"><p><?php echo $company_info->company_address; ?></p></li>
												
												<li class="reg1"><p>Tỉnh / thành phố</p></li>
												<?php if($company_info->city_id==0): ?>
												<li class="reg2"><p>Chưa cập nhật...</p></li>
											<?php else: ?>
												<li class="reg2"><p><?php echo $citycompany->name; ?></p></li>
											<?php endif; ?>
												<li class="reg1"><p>Quy mô công ty</p></li>
											<?php if($company_info->company_size_id==0): ?>
												<li class="reg2"><p>Chưa cập nhật...</p></li>
												<?php else: ?>
											<li class="reg2"><p><?php echo $companysize->name; ?></p></li>
											<?php endif; ?>
											<li class="reg1"><p>Giới thiệu</p></li>
											<li class="reg2"><p><?php echo $company_info->description; ?></p></li>
											<li class="reg1"><p>Logo công ty</p></li>
											<li class="reg2"><p><img src="<?php echo base_url('uploads/company/'.$company_info->logo_url); ?>" width="100"></p></li>
											<li class="reg1"><p>Website</p></li>
											<li class="reg2"><p style="color: #1790D4"><?php echo $company_info->website; ?></p></li>
											<li class="reg1"><p>Số điện thoại</p></li>
											<li class="reg2"><p style="color: #1790D4"><?php echo $company_info->company_phone; ?></p></li>
											<li class="reg1"><p>Fax</p></li>
											<li class="reg2"><p style="color: #1790D4"><?php echo $company_info->company_fax; ?></p></li>
											</ul>					
											</p>
										</div> <!-- end .profile-about -->

										<div class="divider"></div>

										<div class="profile-experience-wrapper profile-section">
											<h3 class="dark profile-title">THÔNG TIN LIÊN HỆ<span>
											<a href="<?php echo base_url('companies/edit'); ?>"><i class="ion-edit"></i></a></span></h3>
										<ul class="profile-ul">
										<li class="reg1"><p>Người liên hệ</p></li>
										<li class="reg2"><p><?php echo $company_info->company_contact; ?></p></li>
										<li class="reg1"><p>Chức vụ</p></li>
										<li class="reg2"><p><?php echo $company_info->contact_title; ?></p></li>
										<li class="reg1"><p>Số điện thoại</p></li>
										<li class="reg2"><p><?php echo $company_info->contact_phone; ?></p></li>
										<li class="reg1"><p>Email liên hệ</p></li>
										<li class="reg2"><p><?php echo $company_info->contact_email; ?></p></li>
										</ul>
											<div class="spacer-md"></div>
											<div class="profile-experience flex space-between no-wrap no-column">
											
											</div> <!-- end .profile-experience -->
										</div> <!-- end .profile-experience-wrapper -->

							        </div> <!-- end .profile-wrapper -->						        
							    </div> <!-- end #profile-tab -->

							    <div id="change-password-employer" class="tab-pane fade in">							    	
							        <div class="password-form-wrapper">	
							        	<h3 class="dark">Change Password</h3>									
			                            <form class="password-form">
											<div class="form-group">
											    <label for="InputEmail1">Old password<sup>*</sup></label>
											    <input type="email" class="form-control" id="InputEmail1" placeholder="">
											</div>

											<div class="form-group">
											    <label for="InputPassword1">New Password<sup>*</sup></label>
											    <input type="password" class="form-control" id="InputPassword1" placeholder="">
											</div>

											<div class="form-group">
											    <label for="InputPassword1">Confirm New Password<sup>*</sup></label>
											    <input type="password" class="form-control" id="InputPassword1" placeholder="">
											</div>											
										</form> <!-- end .password-form -->
										<div class="password-button-wrapper">
												<button type="submit" class="button">Save change</button>
										</div> <!-- end .password-button-wrapper -->
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