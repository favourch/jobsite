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
						<form method="GET" action="#">
						<div class="job-categories-widget jobs-widget">
							<h6>Lọc theo danh mục</h6>
					       
					            <div class="form-group">
              <div class="form-group-inner">
             <select class="selectpicker" data-live-search="true" name="careerid">
             <option value="0">Tất cả nghành nghề</option>
            <?php foreach($listcareer as $row): ?>
            <option value="<?php echo $row->id; ?>" <?php echo (set_value('careerid') == $row->id) ? "selected" : ""; ?> ><?php echo $row->name; ?></option>
             <?php endforeach; ?>
             </select>
                    </div>
                     </div>
						</div> <!-- end .job-categories-widget -->

						<div class="job-status-widget jobs-widget">
			<h6>Địa điểm làm việc</h6>
			<div class="form-group-inner">
             <select class="selectpicker" data-live-search="true" name="cityid">
             <option value="0">Tất cả địa điểm</option>
            <?php foreach($listcity as $row): ?>
            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
             <?php endforeach; ?>
             </select>
                    </div>
		                    </ul> <!-- end .job-status-wrapper -->
						</div> <!-- end .job-status-widget -->

						<div class="job-locations-widget jobs-widget">
							<h6>Mức lương</h6>
					  <div class="form-group-inner">
             <select class="selectpicker" data-live-search="true" name="salaryid">
             <option value="0">Tất cả mức lương</option>
            <?php foreach($listsalary as $row): ?>
            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
             <?php endforeach; ?>
             </select>
                    </div>
						</div> <!-- end .job-locations-widget -->
						<div class="job-locations-widget jobs-widget">
							<h6>Kinh nghiệm làm việc</h6>
					  <div class="form-group-inner">
             <select class="selectpicker" data-live-search="true" name="experienceid">
             <option value="0">Tất cả kinh nghiệm</option>
            <?php foreach($listexperience as $row): ?>
            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
             <?php endforeach; ?>
             </select>
                    </div>
						</div> <!-- end .job-locations-widget -->

						<div class="job-locations-widget jobs-widget">
							<h6>Cấp bậc</h6>
					  <div class="form-group-inner">
             <select class="selectpicker" data-live-search="true" name="levelid">
             <option value="0">Tất cả cấp bậc</option>
            <?php foreach($listlevel as $row): ?>
            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
             <?php endforeach; ?>
             </select>
                    </div>
						</div> <!-- end .job-locations-widget -->

						<div class="form-group-inner">
							<input type="submit" class="button" value="Lọc việc làm" style="width: 100%;">
						</div>
</form>
						

					</div> <!-- end .right-side -->
					</div>
				</div> <!-- end .jobs-listing-wrapper -->
			</div> <!-- end .container-fluid -->
		</div> <!-- end .section -->
		</div>
