		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container-fluid">
					<p class="breadcrumb-menu">
						<a href="<?php echo base_url(); ?>"><i class="ion-ios-home"></i></a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0">Ứng viên - Danh sách ứng viên - Chi tiết ứng viên</a>
					</p> <!-- end .breabdcrumb-menu -->
				</div> <!-- end .container-fluid -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

				<!-- Job Listings Section -->
		<div class="section jobs-details-section">
			<div class="container-fluid">
				<div class="jobs-details-wrapper flex no-wrap">

					<?php $this->load->view('site/candidatelist/left'); ?>
					<div class="right-side-wrapper">
						<div class="right-side-top">
							<h6>
							<span><i class="ion-ios-arrow-left"></i></span>Quay lại <a href="<?php echo base_url('nha-tuyen-dung/tim-ung-vien'); ?>">Danh sách ứng viên</a></h6>
							<div class="right-side-top-inner flex no-wrap">
							
								<div class="job-post-wrapper">
									<div class="job-post-top flex no-column no-wrap">
										<div class="job-post-top-left">
			<?php if($candidate->image!=''): ?>
			<img src="<?php echo base_url('uploads/candidate/'.$candidate->image); ?>" alt="" class="img-responsive">
		<?php else: ?>
			<img src="<?php echo public_url('site/images/userscandi.png'); ?>" alt="" class="img-responsive">
		<?php endif; ?>
										</div> <!-- end .left-side-inner -->
										<div class="job-post-top-right">
											<h4 class="dark"><?php echo $candidate->title; ?></h4>
											<h5><?php echo $candidate->full_name; ?></h5>
											<div class="job-post-meta flex items-center no-column no-wrap">
												<div class="bookmarked-job-meta flex items-center no-wrap no-column">
						        					<h6 class="candidate-location">Mức lương mong muốn : <span><?php echo $salary->name; ?></span></h6>
						        				</div>
					        					<h6 class="full-time"><?php echo $jobtype->name; ?></h6>
											</div> <!-- end .job-post-meta -->
										</div> <!-- end .right-side-inner -->
									</div> <!-- end .job-post-top -->

									<div class="divider"></div>

									<div class="job-post-bottom">
										<h4 class="dark">Mục tiêu nghề nghiệp</h4>
										<?php echo $candidate->description; ?>
										<br><br>

										<h4 class="dark">Kỹ năng bản thân</h4>
										
										<ul class="job-post-nested-list list-unstyled">
											<?php foreach($skill as $row): ?>
											<li class="flex no-column no-wrap"><span><i class="ion-ios-checkmark"></i></span><?php echo $row->name; ?></li>
										<?php endforeach; ?>
											
										</ul> <!-- end .job-post-nested-list -->

										<br>
										
										<h4 class="dark">Kinh nghiệm làm việc</h4>
										<?php foreach($experience as $row): ?>
										<div class="profile-experience flex space-between no-wrap no-column">
												<div class="">
										<h5 class="profile-designation titlejob"><?php echo $row->position; ?></h5>
												<h5 class="profile-company dark"><i class="ion-briefcase"></i> <?php echo $row->company_name; ?></h5>
													<p class="small ultra-light"><i class="ion-clock"></i> <?php echo int_to_date($row->from_date); ?> - <?php echo int_to_date($row->to_date); ?></p>
													<h6 class="projects-count"><i class="ion-help-circled"></i> Mô tả công việc</h6>
													<p><?php echo $row->description; ?></p>
												</div> <!-- end .profile-experience-left -->
												
										</div>
										<?php endforeach; ?>

										<h4 class="dark">Trình độ học vấn</h4>
										<?php foreach($certificare as $row): ?>
										<div class="profile-experience flex space-between no-wrap no-column">
												<div class="">
												<h5 class="profile-designation dark"><?php echo $row->name; ?></h5>
												<h5 class="profile-company dark"><i class="ion-clipboard"></i> <?php echo $row->major; ?></h5>
													<p class="small ultra-light"><i class="ion-clock"></i> <?php echo int_to_date($row->from_date); ?> - <?php echo int_to_date($row->to_date); ?></p>
													<h6 class="projects-count"><i class="ion-university"></i> Mô tả</h6>
													<p><?php echo $row->info; ?></p>
												</div> <!-- end .profile-experience-left -->
												
										</div>
										<?php endforeach; ?>

										<div class="divider"></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
//add dữ liệu
$('#saved').hide();
$(".FormSubmit").click(function (e) {
		e.preventDefault();
		$(".FormSubmit").hide(); //hide submit button
		var ID=$(this).attr('id');		
		jQuery.ajax({
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>candidatelist/savecandidate", //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:"cid="+ID, //Form variables
		success:function(response){
			//$("#"+ID).hide(); //show submit button
			$("#saved").show(); //hide loading image
			$('.FormSubmit').hide();
			window.location.reload();
		},
		error:function (xhr, ajaxOptions, thrownError){
			$(".FormSubmit").show(); //show submit button
			alert("Lỗi không kết nối được");
            //alert(thrownError);
		}
		});
});

});
</script> 
										<div class="job-post-share flex space-between items-center no-wrap">
										
											<div class="job-post-share-right flex items-center no-column no-wrap">
												<?php if($company): ?>
												<?php if($mapcandidate): ?>
												<h6>Đã lưu</h6>
												<span class="#"><i class="ion-flag wishlist-icon"></i></span>
											<?php else: ?>
												<h6>Lưu hồ sơ</h6>
												<span class="FormSubmit" id="<?php echo $candidate->id; ?>"><i class="ion-ios-heart wishlist-icon"></i></span>
											<?php endif; ?>
												<?php endif; ?>
											</div> <!-- end .job-post-share-right -->
											
										</div> <!-- end .job-post-share -->

									</div> <!-- end .job-post-bottom -->

								</div> <!-- end .left-side-inner -->

								<div class="right-side-inner">
									<div class="job-post-company-info">
										<h5 class="dark">THÔNG TIN HỒ SƠ</h5>
										<ul class="list-unstyled">
										<li class="flex no-column no-wrap"><i class="ion-ribbon-b"></i>Bằng cấp cao nhất : <span style="font-weight: bold;"> <?php echo $literacy->name; ?></span></li>
										<li class="flex no-column no-wrap"><i class="ion-calendar"></i>Số năm kinh nghiệm : <span style="font-weight: bold;"><?php echo $requireex->name; ?></span></li>
											<li class="flex no-column no-wrap"><i class="ion-location"></i>Nơi làm việc :  <span style="font-weight: bold;"><?php echo $city->name; ?></span></li>
											<li class="flex no-column no-wrap"><i class="ion-briefcase"></i>Ngành nghề : <b><?php echo $career->name; ?></b></li>
											<li class="flex no-column no-wrap"><i class="ion-cash"></i>Mức lương mong muốn : <span style="font-weight: bold;"><?php echo $salary->name; ?></span></li>
											<li class="flex no-column no-wrap"><i class="ion-social-buffer"></i>Cấp bậc mong muốn : <b><?php echo $level->name; ?></b></li>
											<li class="flex no-column no-wrap"><i class="ion-android-alarm-clock"></i>Ngày cập nhật : <b><?php echo format_date($candidate->modified_date); ?></b></li>
										</ul>
									</div> <!-- end .job-post-company-info -->

					

									<div class="system-login text-center">
										<h6>Or login using our system</h6>
										<button type="submit" class="button">Tải file CV <i class="ion-android-send"></i></button>
									</div> <!-- end .system-login -->

								</div> <!-- end .right-side-inner -->

							</div> <!-- end .left-side-top -->

							<div class="right-side-bottom-wrapper">
							
						        <div class="bookmarked-jobs-list-wrapper on-listing-page on-job-detals-page">
									<h3><span>Hồ sơ tương tự</span></h3>
						        	
									<?php foreach($semilarcandidate as $row): ?>
									<?php $jobtypename = $this->job_type_model->get_info($row->job_type); ?>
									<?php $cityname = $this->city_model->get_info($row->city_id); ?>
						        	<div class="bookmarked-job-wrapper">
						        		<div class="bookmarked-job flex no-wrap no-column ">
							        		<div class="job-company-icon">
			<?php if($row->image!=''): ?>
			<img src="<?php echo base_url('uploads/candidate/'.$row->image); ?>" alt="" class="img-responsive">
		<?php else: ?>
			<img src="<?php echo public_url('site/images/userscandi.png'); ?>" alt="" class="img-responsive">
		<?php endif; ?>
							        		</div> <!-- end .job-icon -->
							        		<div class="bookmarked-job-info">
							        			<h4 class="dark flex no-column"><?php echo $row->title; ?><a href="#0" class="button full-time"><?php echo $jobtypename->name; ?></a></h4>
							        			<h5><?php echo $row->full_name; ?></h5>
							        			<p><?php echo sub($row->description, 150); ?> ...</p>
							        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
							        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
								        			
												<h6 class="bookmarked-job-category"><?php echo $cityname->name; ?></h6>
							        					<h6 class="candidate-location">Cập nhật : <span><?php echo format_date($row->modified_date); ?></span></h6>
							        				</div> <!-- end .bookmarked-job-meta -->
							        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
							    <a href="<?php echo base_url('ho-so/'.$row->id.'/'.$row->cat_name.'.html'); ?>" class="button">Xem thêm</a>
							        				</div> <!-- end .right-side-bookmarked-job-meta -->
							        			</div> <!-- end .bookmarked-job-info-bottom -->
							        		</div> <!-- end .bookmarked-job-info -->
						        		</div> <!-- end .bookmarked-job -->
						        	</div> <!-- end .bookmarked-job-wrapper --> 
						        <?php endforeach; ?>
					        	</div> <!-- end .bookmarked-jobs-list-wrapper -->
							</div> <!-- end .right-side-bottom-wrapper -->
							</div> <!-- end .right-side-top-inner -->
						</div> <!-- end .right-side-top -->
					</div> <!-- end .right-side-wrapper -->
				</div> <!-- end .jobs-details-wrapper -->
			</div> <!-- end .container-fluid -->
		</div> <!-- end .section -->