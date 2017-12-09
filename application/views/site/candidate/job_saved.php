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

				<script type="text/javascript">
$(document).ready(function() {

//del dữ liệu
$(".wrapper-bookmark").on("click", "#respondmark .del_bookmark", function(e) {
	 e.preventDefault();
	 var clickedID = this.id.split('-'); //Split ID string (Split works as PHP explode)
	 var DbNumberID = clickedID[1]; //and get number from array
	 var myData = 'recordToDelete='+ DbNumberID; //build a post data structure
	$('#itemmk_'+DbNumberID).addClass( "sel" ); //change background of this element by adding class
	$(this).hide(); //hide currently clicked delete button
	 
		jQuery.ajax({
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>candidate/delbookmark/"+DbNumberID, //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:myData, //Form variables
		success:function(response){
			//on success, hide  element user wants to delete.
			$('#itemmk_'+DbNumberID).fadeOut();
		},
		error:function (xhr, ajaxOptions, thrownError){
			//On error, we alert user
			alert(thrownError);
		}
		});
 });
});
</script> 
							    <div id="bookmarked-jobs" class="tab-pane fade in active">
							    <div class="wrapper-bookmark">
							        <h3 class="tab-pane-title">Danh sách việc làm đã lưu</h3>
							        
							        <div class="bookmarked-jobs-list-wrapper">
							        <div id="respondmark">
							        	<?php foreach($listsave as $row): ?>
							        	<?php $job = $this->recruitment_model->get_info($row->recruitment_id); ?>
							        	<?php $companysave = $this->member_company_model->get_info($job->company_id); ?>
							        	<?php $citysave = $this->city_model->get_info($companysave->city_id); ?>
							        	<?php $salarysave = $this->salary_model->get_info($job->salary_id); ?>
							        	<div id="itemmk_<?php echo $row->id; ?>">
							        	<div class="bookmarked-job-wrapper">
							        		<div class="bookmarked-job flex no-wrap no-column ">
								        		<div class="job-company-icon">
								        			<img src="<?php echo base_url('uploads/company/'.$companysave->logo_url); ?>" class="img-responsive">
								        		</div> <!-- end .job-icon -->
								        		<div class="bookmarked-job-info">
								        			<h4 class="dark flex no-column"><?php echo $job->title; ?></h4>
								        			<h5><?php echo $companysave->company_name; ?></h5>
								        			
								        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
								        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
									        			
															<h6 class="bookmarked-job-category">Hạn nộp hồ sơ : <?php echo int_to_date($job->end_date); ?></h6>
								        					<h6 class="candidate-location"><?php echo $citysave->name; ?></span></h6>
															<h6 class="hourly-rate"><?php echo $salarysave->name; ?></h6>
								        				</div> <!-- end .bookmarked-job-meta -->
								        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
								        					<a href="<?php echo base_url($job->cat_name.'-'.$job->id.'-jv'); ?>" class="button">Ứng tuyển</a>
								        					<a href="javascript:void();" class="del_bookmark button" id="xoa-<?php echo $row->id; ?>">Xóa</a>
								        				</div> <!-- end .right-side-bookmarked-job-meta -->
								        			</div> <!-- end .bookmarked-job-info-bottom -->
								        		</div> <!-- end .bookmarked-job-info -->
							        		</div> <!-- end .bookmarked-job -->
							        	</div> <!-- end .bookmarked-job-wrapper --> 
							        	</div>
							        	<?php endforeach; ?>
							        	</div>
						        	</div> <!-- end .bookmarked-jobs-list-wrapper -->
						       	</div>		        
							    </div> <!-- end #bookmarked-jobs-tab -->



							</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->