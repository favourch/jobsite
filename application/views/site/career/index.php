		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container-fluid">
					<p class="breadcrumb-menu">
						<a href="<?php echo base_url(); ?>"><i class="ion-ios-home"></i></a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0">Danh mục việc làm</a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0"><?php echo $category->name; ?></a>
					</p> <!-- end .breabdcrumb-menu -->
				</div> <!-- end .container-fluid -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Job Listings Section -->
		<div class="section jobs-listing-section">
			<div class="container-fluid">
				<div class="jobs-listing-wrapper flex no-wrap">
				<!-- Left career home -->
					<?php $this->load->view('site/career/left'); ?>
				<!-- End left -->
					<div class="center-content-wrapper">

						<div class="sort-by-wrapper on-listing-page flex space-between items-center no-wrap">
							<div class="left-side-inner">
								<h6>Tất cả <span><?php echo $total_row; ?></span>Việc làm<a href="#0"> <?php echo $category->name; ?></a> Tại English center work</h6>								
							</div> <!-- end .left-side -->								
							<div class="right-side-inner">
								<div class="sort-by dropdown flex no-wrap no-column items-center">
									<h6>Sắp xếp theo</h6>
									<button class="button dropdown-toggle" type="button" id="sort-by" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						       			Mặc định
						    		<i class="ion-ios-arrow-down"></i>
						 			</button>
									<ul class="dropdown-menu" aria-labelledby="sort-by">
									    <li><a href="#">Featured</a></li>
									    <li><a href="#">Top candidates</a></li>
									    <li><a href="#">Price, high to low</a></li>							    
									    <li><a href="#">Alphabetically, A-Z</a></li>
									    <li><a href="#">Alphabetically, Z-A</a></li>
									    <li><a href="#">Best sellers</a></li>
								  	</ul> <!-- end .dropdown-menu -->
								</div> <!-- end .sort-by-drop-down -->	
							</div> <!-- end .right-side -->
						</div> <!-- end .sort-by-wrapper -->
						
				        <div class="bookmarked-jobs-list-wrapper on-listing-page">				        
				        <?php foreach($list as $row): ?>
				        	<?php $company = $this->member_company_model->get_info($row->company_id); ?>
				        	<?php $city = $this->city_model->get_info($row->city_id); ?>
				        	<?php $salary = $this->salary_model->get_info($row->salary_id); ?>
				        	<div class="bookmarked-job-wrapper">
				        		<div class="bookmarked-job flex no-wrap no-column ">
					        		<div class="job-company-icon">
					        		<?php if($company->logo_url==''): ?>
                                    <img src="<?php echo public_url('site/images/building.png'); ?>" alt="" class="img-responsive">
                                    <?php else: ?>     
					        			<img src="<?php echo base_url('uploads/company/'.$company->logo_url); ?>" alt="" class="img-responsive">
					        		<?php endif; ?>
					        		</div> <!-- end .job-icon -->
					        		<div class="bookmarked-job-info">
					        			<h4 class="dark flex no-column"><?php echo $row->title; ?><a href="#0" class="button full-time"><?php echo $salary->name; ?></a></h4>
					        			<h5><?php echo $company->company_name; ?></h5>
					        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
					        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
						        		
												<h6 class="bookmarked-job-category"><?php echo $city->name; ?></h6>
					      <h6 class="candidate-location">Hạn nộp hồ sơ : <?php echo int_to_date($row->end_date); ?></h6>
												
					        				</div> <!-- end .bookmarked-job-meta -->
					        			<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
					        					<i class="ion-ios-heart wishlist-icon"></i>
					        					<a href="<?php echo base_url($row->cat_name.'-'.$row->id.'-jv'); ?>" class="button">Xem việc làm</a>
					        				</div> <!-- end .right-side-bookmarked-job-meta -->
					        			</div> <!-- end .bookmarked-job-info-bottom -->
					        		</div> <!-- end .bookmarked-job-info -->
				        		</div> <!-- end .bookmarked-job -->
				        	</div> <!-- end .bookmarked-job-wrapper --> 
				        <?php endforeach; ?>


			        	</div> <!-- end .bookmarked-jobs-list-wrapper -->
			        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
							<?php echo $this->pagination->create_links(); ?>
						</div> <!-- end .jobpress-custom-pager -->	

					</div> <!-- end .center-content -->

					<div class="right-side">
						
						<div class="job-categories-widget jobs-widget">
							<h6>Categories</h6>
					        <ul class="job-categories list-unstyled">
			                    <li class="job-category checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox1" type="checkbox">
			                        <label for="checkbox1">Fianance<span>4,286 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox2" type="checkbox">
			                        <label for="checkbox2">Constructions<span>452 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox3" type="checkbox">
			                        <label for="checkbox3">Logistics<span>1,867 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox4" type="checkbox" checked="">
			                        <label for="checkbox4">Art/Design<span>3,094 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox5" type="checkbox">
			                        <label for="checkbox5">Sales/Marketing<span>2,955 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox6" type="checkbox">
			                        <label for="checkbox6">Science<span>470 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox7" type="checkbox" checked="">
			                        <label for="checkbox7">Technologies<span>4,536 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox8" type="checkbox">
			                        <label for="checkbox8">Healthcare<span>2,619 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox9" type="checkbox">
			                        <label for="checkbox9">Education Training<span>1,132 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox10" type="checkbox">
			                        <label for="checkbox10">Food Services<span>757 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>
		                    </ul> <!-- end .job-categories -->
						</div> <!-- end .job-categories-widget -->

						<div class="job-status-widget jobs-widget">
							<h6>Categories</h6>
					        <ul class="job-status-wrapper list-unstyled">
			                    <li class="job-status checkbox">
			                        <input id="job-status-checkbox1" type="checkbox">
			                        <label for="job-status-checkbox1">Full Time<span>4,286 Jobs</span></label>
			                    </li>

			                    <li class="job-status checkbox">
			                        <input id="job-status-checkbox2" type="checkbox">
			                        <label for="job-status-checkbox2">Part time<span>6,883 Jobs</span></label>
			                    </li>
			                    <li class="job-status checkbox">
			                        <input id="job-status-checkbox3" type="checkbox">
			                        <label for="job-status-checkbox3">Freelancer<span>1,724 Jobs</span></label>
			                    </li>

			                    <li class="job-status checkbox">
			                        <input id="job-status-checkbox4" type="checkbox">
			                        <label for="job-status-checkbox4">Internship<span>876 Jobs</span></label>
			                    </li>
		                    </ul> <!-- end .job-status-wrapper -->
						</div> <!-- end .job-status-widget -->

						<div class="job-locations-widget jobs-widget">
							<h6>Locations</h6>
					        <ul class="job-locations list-unstyled">
			                    <li class="job-category checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox1" type="checkbox">
			                        <label for="job-locations-checkbox1">New York<span>7,286 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox2" type="checkbox" checked="">
			                        <label for="job-locations-checkbox2">San Francisco<span>452 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox3" type="checkbox">
			                        <label for="job-locations-checkbox3">San Diego<span>1,867 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox4" type="checkbox">
			                        <label for="job-locations-checkbox4">Los Angeles<span>3,094 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox5" type="checkbox">
			                        <label for="job-locations-checkbox5">Chicago<span>2,955 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox6" type="checkbox">
			                        <label for="job-locations-checkbox6">Houston<span>470 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox7" type="checkbox">
			                        <label for="job-locations-checkbox7">New Orleans<span>4,536 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>
		                    </ul> <!-- end .job-locations -->
						</div> <!-- end .job-locations-widget -->

						<div class="cta-job-widget">
							<h5 class="dark">Need a job?</h5>
							<h3 class="dark">Join our community and search for a better job</h3>
							<a href="#0">Get started now <span><i class="ion-ios-arrow-thin-right"></i></span></a>
						</div> <!-- end .cta-job-widget -->
					</div> <!-- end .right-side -->
				</div> <!-- end .jobs-listing-wrapper -->
			</div> <!-- end .container-fluid -->
		</div> <!-- end .section -->