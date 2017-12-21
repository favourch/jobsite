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
								<script type="text/javascript">
									function selectsearch(){
										fname = document.getElementById('frmlist');
										document.frmlist.submit();
									}
								</script>
								<div class="sort-by dropdown flex no-wrap no-column items-center">
								
									<h6 style="padding-right: 10px;">Sắp xếp theo</h6>
									<form method="post" name="frmlist" id="frmlist">
									<select class="" name="orderlist" id="selecte" onchange="return selectsearch();">
									    <option value="">Mặc định</option>
									    <option value="1">Lương ( Cao đến thấp )</option>
									    <option value="2">Lương ( Thấp đến cao )</option>	
									    <option value="3">Theo ngày</option>					    
								  	</select> <!-- end .dropdown-menu -->
								  	</form>
								</div> <!-- end .sort-by-drop-down -->	
							</div> <!-- end .right-side -->
						</div> <!-- end .sort-by-wrapper -->
						

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
//add dữ liệu
$(".FormSubmit").click(function (e) {
		e.preventDefault();
		$(".FormSubmit").hide(); //hide submit button
		$("#LoadingImage").show(); //show loading image	
		var ID=$(this).attr('id');		
		jQuery.ajax({
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>candidate/savejobs", //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:"cid="+ID, //Form variables
		success:function(response){
			//$("#"+ID).hide(); //show submit button
			$("#LoadingImage").hide(); //hide loading image
			window.location.reload();
		},
		error:function (xhr, ajaxOptions, thrownError){
			$(".FormSubmit").show(); //show submit button
			$("#LoadingImage").hide(); //hide loading image
			alert("Lỗi không kết nối được");
            //alert(thrownError);
		}
		});
});

});
</script> 

				        <div class="bookmarked-jobs-list-wrapper on-listing-page">	
				        <form method="post">			        
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
					        		<?php $where=array('recruitment_id'=>$row->id, 'candidate_id'=>$canidateid); ?>
					        		<?php $mapcandi = $this->map_recruitment_model->get_info_rule($where);?>
					        		<?php if(isset($user_info)): ?>
					        		<?php if($mapcandi): ?>
					        			<h6>Đã lưu</h6>
										<a href="#" id=""><i class="ion-flag"></i></a>
					        		<?php else: ?>
					        		<a class="FormSubmit" href="#" id="<?php echo $row->id; ?>"><i class="ion-ios-heart"></i></a>
					        	<?php endif ?>
					        		<?php endif; ?>

					        					<a href="<?php echo base_url($row->cat_name.'-'.$row->id.'-jv'); ?>" class="button">Xem việc làm</a>
					        				</div> <!-- end .right-side-bookmarked-job-meta -->
					        			</div> <!-- end .bookmarked-job-info-bottom -->
					        		</div> <!-- end .bookmarked-job-info -->
				        		</div> <!-- end .bookmarked-job -->
				        	</div> <!-- end .bookmarked-job-wrapper --> 
				        <?php endforeach; ?>

				        </form>
			        	</div> <!-- end .bookmarked-jobs-list-wrapper -->
			        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
							<?php echo $this->pagination->create_links(); ?>
						</div> <!-- end .jobpress-custom-pager -->	

					</div> <!-- end .center-content -->

					<div class="right-side">
					<script type="text/javascript">
$(document).ready(function() {
//add dữ liệu
$(".job-category").on('change', function (e) {
		e.preventDefault();
		var ID=$(this).attr('id');	
		alert(ID);
		jQuery.ajax({
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>career", //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:"categoryid="+ID, //Form variables
		success:function(response){
			$('frmContent').html(response);
			$("#LoadingImage").hide(); //hide loading image
			//window.location.reload();
		},
		error:function (xhr, ajaxOptions, thrownError){
			alert("Lỗi không kết nối được");
            //alert(thrownError);
		}
		});
});

});
</script> 	
						<form method="POST" action="#">
						<div class="job-categories-widget jobs-widget">
							<h6>Lọc theo danh mục</h6>
					       
					            <div class="form-group">
              <div class="form-group-inner">
             <select class="selectpicker" data-live-search="true" name="careerid">
             <option value="0">Tất cả nghành nghề</option>
            <?php foreach($careerlist as $row): ?>
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
            <option value="<?php echo $row->id; ?>" <?php echo (set_value('cityid') == $row->id) ? "selected" : ""; ?> ><?php echo $row->name; ?></option>
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
            <option value="<?php echo $row->id; ?>" <?php echo (set_value('salaryid') == $row->id) ? "selected" : ""; ?> ><?php echo $row->name; ?></option>
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
            <option value="<?php echo $row->id; ?>" <?php echo (set_value('experienceid') == $row->id) ? "selected" : ""; ?> ><?php echo $row->name; ?></option>
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
            <option value="<?php echo $row->id; ?>" <?php echo (set_value('levelid') == $row->id) ? "selected" : ""; ?> ><?php echo $row->name; ?></option>
             <?php endforeach; ?>
             </select>
                    </div>
						</div> <!-- end .job-locations-widget -->

						<div class="form-group-inner">
							<input type="submit" class="button" value="Lọc việc làm" style="width: 100%;">
						</div>
</form>

						<div class="cta-job-widget">
							<h5 class="dark">Cần việc làm?</h5>
							<h3 class="dark">Đăng ký ngay để tìm kiếm một công việc tốt nhất</h3>
							<a href="<?php echo base_url('ung-vien/dang-ky'); ?>">Đăng ký <span><i class="ion-ios-arrow-thin-right"></i></span></a>
						</div> <!-- end .cta-job-widget -->
					</div> <!-- end .right-side -->
				</div> <!-- end .jobs-listing-wrapper -->
			</div> <!-- end .container-fluid -->
		</div> <!-- end .section -->