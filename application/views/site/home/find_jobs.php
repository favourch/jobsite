<script type="text/javascript" src="<?php echo public_url('site/js/angular.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo public_url('site/js/myapp.js'); ?>"></script>
		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container-fluid">
					<p class="breadcrumb-menu">
						<a href="index.html"><i class="ion-ios-home"></i></a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0">Tìm việc nhanh</a>
					</p> <!-- end .breabdcrumb-menu -->
					<h2 class="breadcrumb-title">Tất cả việc làm</h2>
				</div> <!-- end .container-fluid -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div ng-app="myApp">
			<!-- Job Listings Section -->
		<div class="section jobs-listing-section">
			<div class="container-fluid">

			<div ng-controller="MyController">

				<div class="jobs-listing-wrapper flex no-wrap">

					<div class="left-side">

						<div class="statistics-widget-wrapper jobs-widget">
							<h6>Thống kê việc làm</h6>
							<div class="statistics-widget flex no-column no-wrap">
								<div class="left-side-inner">
									<h2 class="dark"><?php echo $total_candidate; ?></h2>
									<h5>Ứng viên</h5>
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<button type="button" class="button button-sm grey">+583 tuần này</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .statisstics-widget -->

							<div class="statistics-widget flex no-column no-wrap">
								<div class="left-side-inner">
										<h2 class="dark"><?php echo $total_recruitment; ?></h2>
										<h5>Việc làm</h5>
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<button type="button" class="button button-sm grey">+364 tuần này</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .statisstics-widget -->

						</div> <!-- end .statistics-widget-wrapper -->

						<div class="divider"></div>

						<div class="featured-jobs-widget-wrapper jobs-widget">
							<div class="featured-jobs" style="text-align: center;">
								<a href="#"><img src="<?php echo public_url('site/images/bannertest.jpg'); ?>"></a>
								<a href="#"><img src="<?php echo public_url('site/images/topica.jpg'); ?>"></a>
							</div> <!-- end .featured-jobs-widget -->

						</div> <!-- end .featured-jobs-widget-wrapper -->

						<div class="divider"></div>

					</div> <!-- end .left-side -->

					<div class="center-content-wrapper">
					<?php $careername = $this->career_model->get_info($careerid); ?>
					<?php $cityname = $this->city_model->get_info($cityid); ?>
						<div class="sort-by-wrapper on-listing-page flex space-between items-center no-wrap">
							<div class="left-side-inner">
								<h6>Có tất cả <span><?php echo $total_row; ?></span>Việc làm 
								<?php if($keyword): ?><a href="#0">"<?php echo $keyword; ?>"</a><?php endif; ?>
					<?php if($careerid): ?> Danh mục <a href="#0"><?php echo $careername->name; ?></a><?php endif; ?>
					<?php if($cityid): ?> Địa điểm <a href="#0"><?php echo $cityname->name; ?></a><?php endif; ?>
								</h6>								
							</div> <!-- end .left-side -->								
					
						</div> <!-- end .sort-by-wrapper -->
						
				        <div class="bookmarked-jobs-list-wrapper on-listing-page" id="txtHint">
				        	
				        <?php foreach($listjobs as $row): ?>
				        <?php $company = $this->member_company_model->get_info($row->company_id); ?>
				        <?php $city = $this->city_model->get_info($row->city_id); ?>
				        <?php $jobtype = $this->job_type_model->get_info($row->type_id); ?>
				        <?php $salary = $this->salary_model->get_info($row->salary_id); ?>
				        	<div class="bookmarked-job-wrapper">
				        		<div class="bookmarked-job flex no-wrap no-column ">
					        		<div class="job-company-icon">
					   <?php if($company->logo_url!=''): ?>
					   <img src="<?php echo base_url('uploads/company/'.$company->logo_url); ?>" alt="" class="img-responsive">
					<?php else: ?>
						<img src="<?php echo public_url('site/images/building.png'); ?>" alt="" class="img-responsive">
					<?php endif; ?>
					        		</div> <!-- end .job-icon -->
					        		<div class="bookmarked-job-info">
					        			<h4 class="dark flex no-column"><?php echo $row->title; ?><a href="#0" class="button full-time"><?php echo $jobtype->name; ?></a></h4>
					        			<h5><?php echo $company->company_name; ?></h5>
					        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
					        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
						        				
												<h6 class="bookmarked-job-category"><?php echo $city->name; ?></h6>
					        					<h6 class="candidate-location"><?php echo int_to_date($row->end_date); ?></h6>
												<h6 class="hourly-rate"><span><?php echo $salary->name; ?></span></h6>
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
			        	</div> 


			        	<!-- end .bookmarked-jobs-list-wrapper -->
			        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
							<?php echo $this->pagination->create_links(); ?>
						</div> <!-- end .jobpress-custom-pager -->	

					</div> <!-- end .center-content -->

					<div class="right-side">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>					
<script type="text/javascript">
$(document).ready(function() {
//edit dữ liệu
$(".careerfiel").on("change", function () {		
	 	var id = 'careid='+$(".careerfiel").val();
	 	jQuery.ajax({
		cache: false,
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>home/find_jobs", //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data :id,
        async : false,
        contentType : false,
        processData : true,
		success:function(response){
			 alert(id);
		},
		error:function (xhr, ajaxOptions, thrownError){
			$("#LoadingCV").hide(); //hide loading image
			alert("Lỗi không kết nối được");
            //alert(thrownError);
		}
		});
		
});
});
</script> 
						<div class="job-categories-widget jobs-widget">
							<h6>Lọc theo danh mục</h6>
					       <form method="GET">
					        <ul class="job-categories list-unstyled">
			                    <?php foreach($listcareer as $row): ?>
			                    <?php $input['where'] = array('career_id'=>$row->id); ?>
			                    <?php $total_recruit = $this->recruitment_model->get_total($input); ?>
			                    <li class="job-category checkbox flex space-between items-center no-column no-wrap">
			                  <input id="checkbox<?php echo $row->id; ?>" type="checkbox" value="<?php echo $row->id; ?>" class="careerfiel">
			                   <label for="checkbox<?php echo $row->id; ?>"><?php echo $row->name; ?><span>( <?php echo $total_recruit; ?> )</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>
			                <?php endforeach; ?>
		                    </ul> <!-- end .job-categories -->
		                    </form>

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

						

					</div> <!-- end .right-side -->
					</div>
				</div> <!-- end .jobs-listing-wrapper -->
			</div> <!-- end .container-fluid -->
		</div> <!-- end .section -->
		</div>
