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

						<div class="left-sidebar-menu">							
							<ul class="nav nav-pills nav-stacked">
								<li class="heading">Quản lý tài khoản</li>

							    <li><a data-toggle="pill" class="active" href="#">Hồ sơ của tôi</a></li>
							    <li><a href="<?php echo base_url('candidate/update_cv'); ?>">Cập nhật hồ sơ</a></li>
							   <li><a href="<?php echo base_url('candidate/edit_account'); ?>">Cập nhật tài khoản</a></li>
							    <li><a data-toggle="pill" href="#bookmarked-jobs">Việc làm đã xem</a></li>
							    <li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications">Việc làm đã ứng tuyển</a> <span class="notification-count">2</span></li>
							    <li class="nav-divider"></li>
							   	<li class="heading">Manage job</li>
								<li><a data-toggle="pill" href="#manage-applications">Manage Applications</a></li>
							    <li><a data-toggle="pill" href="#job-alerts">Job Alerts</a></li>
							    <li class="nav-divider"></li>
							    <li><a data-toggle="pill" href="#change-password">Change Password</a></li>
							    <li><a href="<?php echo base_url('candidate/logout'); ?>">Đăng xuất</a></li>
							</ul>
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">
							<div class="tab-content candidate-dashboard">

							    <div id="bookmarked-jobs" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Bookmarked jobs</h3>
							        <div class="bookmarked-jobs-list-wrapper">
							        	<div class="bookmarked-job-wrapper">
							        		<div class="bookmarked-job flex no-wrap no-column ">
								        		<div class="job-company-icon">
								        			<img src="images/company-logo-big01.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">
								        		</div> <!-- end .job-icon -->
								        		<div class="bookmarked-job-info">
								        			<h4 class="dark flex no-column">We need a web designer<a href="#0" class="button full-time">full time</a></h4>
								        			<h5>Banana inc.</h5>
								        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
								        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
								        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
									        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
								        						<li><img src="images/avatar02.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
								        						<li><img src="images/avatar03.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
								        						<li class="candidates-total-count"><img src="images/avatar04.jpg" tppabs="http://jobpress.wecookcode.com/demo/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
								        					</ul> <!-- end .candidates-avatar -->
															<h6 class="bookmarked-job-category">Art/Design</h6>
								        					<h6 class="candidate-location">Park ave,<span>nyc, usa</span></h6>
															<h6 class="hourly-rate">$45<span>/Hour</span></h6>
								        				</div> <!-- end .bookmarked-job-meta -->
								        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
								        					<i class="ion-ios-heart wishlist-icon"></i>
								        					<a href="#0" class="button">more detail</a>
								        				</div> <!-- end .right-side-bookmarked-job-meta -->
								        			</div> <!-- end .bookmarked-job-info-bottom -->
								        		</div> <!-- end .bookmarked-job-info -->
							        		</div> <!-- end .bookmarked-job -->
							        	</div> <!-- end .bookmarked-job-wrapper --> 

						        	</div> <!-- end .bookmarked-jobs-list-wrapper -->
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
							    </div> <!-- end #bookmarked-jobs-tab -->

							    <div id="job-alerts" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Job alerts</h3>
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

							    <div id="manage-applications" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Manage applications</h3>
							        <div class="job-applications-list-wrapper">
							        	<div class="job-application flex items-center no-column no-wrap">
											<div class="application-company-cell application-cell flex items-center no-column no-wrap">
												<div class="application-company-logo">
													<img src="images/company-logo01.jpg.png" tppabs="http://jobpress.wecookcode.com/demo/images/company-logo01.jpg" alt="company-logo" class="img-responsive">
												</div> <!-- end .application-company-logo -->
												<div class="application-company-text">
													<h4 class="dark">Web designer needed</h4>
													<p>Quick studio</p>
												</div> <!-- end .application-company-text -->
											</div> <!-- end .job-application-company-cell -->
											<div class="application-contractor-type-cell application-cell">
												<button type="button" class="button full-time button-xs">Full time</button>
											</div> <!-- end .application-contractor-type-cell -->
											<div class="application-submission-date-cell application-cell">
												<p>No 14th, 2017</p>
											</div> <!-- end .application-submission-date-cell -->
											<div class="application-status-cell">
												<p class="rejected">Rejected</p>
											</div> <!-- end .application-status-cell -->
							        	</div> <!-- end .job-application -->

							        </div> <!-- end .applications-list-wrapper -->
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

							    <div id="notifications" class="tab-pane fade in">
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


							    <div id="resume" class="tab-pane fade in active">
							    	<div class="profile-badge"><h6>Hồ sơ của tôi</h6></div>
							        <div class="profile-wrapper">
							        	<script type="text/javascript">
											function check_mt(){
												document.frmmt.mt.value= "ok";
  												document.frmmt.submit();
											}
										</script>
							        <form method="post" name="frmmt" action="<?php echo base_url('candidate/view'); ?>" >
							        <input type="hidden" name="mt">
										<div class="profile-info profile-section flex no-column no-wrap">
											<div class="profile-picture">
												<img src="<?php echo base_url('uploads/candidate/'.$user_info->image); ?>" alt="candidate-picture" class="img-responsive">
											</div> <!-- end .user-picture -->
											<div class="profile-meta">
												<h4 class="dark"><?php echo $user_info->full_name; ?></h4>
												<p>UI/UX Designer</p>
												<div class="profile-contact flex items-center no-wrap no-column">
													<h6 class="contact-location"><?php echo $user_info->address; ?></span></h6>
													<h6 class="contact-phone"><?php echo $user_info->phone; ?></h6>
													<h6 class="contact-email"><?php echo $user_info->email; ?></h6>
												</div> <!-- end .profile-contact -->
												<ul class="list-unstyled flex no-column">
													<li><a href="#" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;"><i class="ion-clipboard"></i>Tải hồ sơ</a></li>
													
												</ul> <!-- end .social-icons -->
											</div> <!-- end .profile-meta -->
										</div> <!-- end .profile-info -->

										<div class="divider"></div>
										
										<div class="profile-about profile-section">
											<h3 class="dark profile-title">Thông tin chung<span><a data-toggle="collapse" data-target="#demo" style="cursor: pointer;"><i class="ion-edit"></i></a></span></h3>
											<?php if(empty($user_info->description)) : ?>
											<p>Giới thiệu bản thân và miêu tả mục tiêu nghề nghiệp của bạn.</p>
										<?php else: ?>
											<p><?php echo $user_info->description; ?></p>
										<?php endif; ?>
										<div id="demo" class="collapse" style="padding-top: 15px;">
										<textarea name="description" class="txtarea"><?php echo $user_info->description; ?></textarea>
										<div class="btnluu" style="padding-top: 15px; text-align: right;">
										<button data-toggle="collapse" class="button" data-target="#demo" value="Hủy">Hủy</button>
										<input type="submit" class="button" value="Lưu" onclick="return check_mt();">
										</div>
										</div>
										
										</div> <!-- end .profile-about -->

										<div class="divider"></div>
										</form>
										<script type="text/javascript">
											function check_kn(){
												
												document.frmkn.kn.value= "ok";
  												document.frmkn.submit();
											}
										</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
//add dữ liệu
$("#FormSubmit").click(function (e) {
		e.preventDefault();
		if($("#contentText").val()==='')
			{
				alert("Bạn chưa điền nội dung");
				return false;
			}			
		$("#FormSubmit").hide(); //hide submit button
		$("#LoadingImage").show(); //show loading image			
	 	var content = 'desc='+ $("#contentText").val(); //build a post data structure
	 	var company = 'company_name='+ $("#companyname").val();
	 	var posi = 'position='+ $("#position").val();
	 	var fdate = 'from_date='+ $("#fromdate").val();
	 	var tdate = 'to_date='+ $("#todate").val();
		jQuery.ajax({
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>candidate/add", //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:company+"&"+posi+"&"+fdate+"&"+tdate+"&"+content, //Form variables
		success:function($response){
			$("#responds").append($response);
			$("#contentText").val(''); //empty text field on successful
			$("#FormSubmit").show(); //show submit button
			$("#LoadingImage").hide(); //hide loading image
			$("#demo1").hide(); 
			 window.location.reload();
		},
		error:function (xhr, ajaxOptions, thrownError){
			$("#FormSubmit").show(); //show submit button
			$("#LoadingImage").hide(); //hide loading image
			alert("Lỗi không kết nối được");
            //alert(thrownError);
		}
		});
});

//edit dữ liệu
$(".edit_tr").click(function () {		

		$("#LoadingImage").show(); //show loading image	
		var ID=$(this).attr('id');	
	 	var compan=$("#company_"+ID).val();
        var descr =$("#desc_"+ID).val();
        var posit =$("#position_"+ID).val();
        var frdate=$("#fromdate_"+ID).val();
        var todate=$("#todate_"+ID).val();

		jQuery.ajax({
		cache: false,
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>candidate/edit", //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:"id="+ID+"&company_name="+compan+"&position="+posit+"&desc="+descr+"&fromdaten="+frdate+"&todaten="+todate, //Form variables
		success:function(response){
			$("#responds").append(response);
			$("#FormEdit").show(); //show submit button
			$("#LoadingImage").hide(); //hide loading image; 
			$('#demo_'+ID).fadeOut();
			 window.location.reload();
		},
		error:function (xhr, ajaxOptions, thrownError){
			$("#FormEdit").show(); //show submit button
			$("#LoadingImage").hide(); //hide loading image
			alert("Lỗi không kết nối được");
            //alert(thrownError);
		}
		});
});

//del dữ liệu
$(".content_wrapper").on("click", "#responds .del_button", function(e) {
	 e.preventDefault();
	 var clickedID = this.id.split('-'); //Split ID string (Split works as PHP explode)
	 var DbNumberID = clickedID[1]; //and get number from array
	 var myData = 'recordToDelete='+ DbNumberID; //build a post data structure
	$('#item_'+DbNumberID).addClass( "sel" ); //change background of this element by adding class
	$(this).hide(); //hide currently clicked delete button
	 
		jQuery.ajax({
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>candidate/del/"+DbNumberID, //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:myData, //Form variables
		success:function(response){
			//on success, hide  element user wants to delete.
			$('#item_'+DbNumberID).fadeOut();
		},
		error:function (xhr, ajaxOptions, thrownError){
			//On error, we alert user
			alert(thrownError);
		}
		});
 });
});
</script> 

										<div class="profile-experience-wrapper profile-section">
										<div class="content_wrapper">
											<h3 class="dark profile-title">Kinh nghiệm làm việc<span><a data-toggle="collapse" data-target="#demo1" style="cursor: pointer;"><i class="ion-edit"></i></a></span></h3>
											<div id="demo1" class="collapse">
										<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Tên công ty*</p>
										<input type="text" id="companyname" name="company_name" required="">
									</div> <!-- end .form-group -->
									<div class="form-group">
										<p class="label">Chức danh*</p>
										<input type="text" id="position" name="position" placeholder="Nhập vị trí công việc của bạn" required="">
									</div> <!-- end .form-group -->
								</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Từ tháng*</p>
										<input type="text" class="datepicker" id="fromdate" name="from_date" placeholder="" required="">
									</div> <!-- end .form-group -->
									<div class="form-group">
										<p class="label">Đến tháng*</p>
										<input type="text" class="datepicker1" name="to_date" id="todate" required="">
									</div> <!-- end .form-group -->
								</div> <!-- end .form-group-wrapper -->

									<div class="form-group textarea">
										<p class="label">Mô tả công việc*</p>
										<textarea name="desc" id="contentText" rows="6" placeholder="Nhập mô tả công việc của bạn" class="txtarea"></textarea>
									</div> <!-- end .form-group -->
									<p style="text-align: right;">
						<button type="submit" class="button" id="FormSubmit" >Lưu lại</button>
						<button type="button" class="button" data-toggle="collapse" data-target="#demo1">Hủy</button>
									</p>
				<img src="<?php echo public_url('site/images/loading.gif') ?>" id="LoadingImage" style="display:none" />
									</div>
									
										<div id="responds" class="responds">
											<?php foreach($knlamviec as $row): ?>
				<div id="item_<?php echo $row->id;?>">
				<div class="profile-experience flex space-between no-wrap no-column">
												<div class="profile-experience-left">
												<h5 class="profile-designation dark"><?php echo $row->position; ?></h5>
											<span class="profile-company dark"><?php echo $row->company_name; ?></span>
													<p class="small ultra-light">Từ tháng <b><?php echo format_date($row->from_date); ?></b> đến tháng <b><?php echo format_date($row->to_date); ?></b></p>
													<p><?php echo $row->description; ?></p>
													
												</div> <!-- end .profile-experience-left -->
												<div class="profile-experience-right">
										<span><a data-toggle="collapse" data-target="#demo_<?php echo $row->id; ?>" style="cursor: pointer;"><i class="ion-edit"></i></a></span>
													<div class="del_wrapper">
													<span><a class="del_button" id="del-<?php echo $row->id;?>" style="cursor: pointer;"><i class="ion-close-circled"></i></a></span>
													</div>
												</div> <!-- end .profile-experience-right -->
											</div> <!-- end .profile-experience -->

											<div id="demo_<?php echo $row->id ?>" class="collapse">
										<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Tên công ty*</p>
										<input type="text" id="company_<?php echo $row->id;?>" value="<?php echo $row->company_name; ?>" >
									</div> <!-- end .form-group -->
									<div class="form-group">
										<p class="label">Chức danh*</p>
										<input type="text" id="position_<?php echo $row->id;?>" value="<?php echo $row->position; ?>">
									</div> <!-- end .form-group -->
								</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Từ tháng*</p>
										<input type="text" class="datepicker" id="fromdate_<?php echo $row->id;?>" value="<?php echo format_date($row->from_date); ?>">
									</div> <!-- end .form-group -->
									<div class="form-group">
										<p class="label">Đến tháng*</p>
										<input type="text" class="datepicker1" id="todate_<?php echo $row->id;?>" value="<?php echo format_date($row->to_date); ?>">
									</div> <!-- end .form-group -->
								</div> <!-- end .form-group-wrapper -->

									<div class="form-group textarea">
										<p class="label">Mô tả công việc*</p>
										<textarea id="desc_<?php echo $row->id;?>" rows="6" class="txtarea"><?php echo $row->description; ?></textarea>
									</div> <!-- end .form-group -->
									<p style="text-align: right;">
						<button type="submit" id="<?php echo $row->id; ?>" class="edit_tr">Lưu lại</button>
						<button type="button" class="button" data-toggle="collapse" data-target="#demo_<?php echo $row->id; ?>">Hủy</button>
									</p>
				<img src="<?php echo public_url('site/images/loading.gif') ?>" id="LoadingImage" style="display:none" />
									</div>

											</div>
										<?php endforeach; ?>
											
									</div>

											</div>
										</div> <!-- end .profile-experience-wrapper -->

										<div class="divider"></div>


<script type="text/javascript">
$(document).ready(function() {
//add dữ liệu
$("#FormCetifiel").click(function (e) {
		e.preventDefault();
		if($("#b_major").val()==='')
			{
				alert("Bạn chưa điền nội dung");
				return false;
			}			
		$("#FormCetifiel").hide(); //hide submit button
		$("#LoadingImage").show(); //show loading image			
	 	var major = 'major='+ $("#b_major").val(); //build a post data structure
	 	var names = 'name='+ $("#b_name").val();
	 	var literacy = 'literacy='+ $("#b_literacy").val();
	 	var fodate = 'from_date='+ $("#b_fromdate").val();
	 	var tcdate = 'to_date='+ $("#b_todate").val();
	 	var info = 'info='+ $("#b_info").val();
		jQuery.ajax({
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>candidate/addmajor", //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:major+"&"+names+"&"+literacy+"&"+fodate+"&"+tcdate+"&"+info, //Form variables
		success:function($response){
			//$("#responds").append($response);
			$("#FormCetifiel").show(); //show submit button
			$("#LoadingImage").hide(); //hide loading image
			$("#demo2").hide(); 
			 window.location.reload();
		},
		error:function (xhr, ajaxOptions, thrownError){
			$("#FormCetifiel").show(); //show submit button
			$("#LoadingImage").hide(); //hide loading image
			alert("Lỗi không kết nối được");
            //alert(thrownError);
		}
		});
});

//edit dữ liệu
$(".edit_hocvan").click(function () {		

		$("#LoadingImage").show(); //show loading image	
		var ID=$(this).attr('id');	
	 	var tname=$("#name_"+ID).val();
        var major =$("#major_"+ID).val();
        var literacy =$("#literacy_"+ID).val();
        var fromdate=$("#fromdate_"+ID).val();
        var todate=$("#todate_"+ID).val();
        var info=$("#info_"+ID).val();
        alert(literacy);
		jQuery.ajax({
		cache: false,
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>candidate/editmajor", //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:"id="+ID+"&name="+tname+"&major="+major+"&literacy="+literacy+"&fromdate="+fromdate+"&todate="+todate+"&info="+info, //Form variables
		success:function(response){
			$("#responds").append(response);
			$("#LoadingImage").hide(); //hide loading image; 
			$('#hocvan_'+ID).fadeOut();
			 window.location.reload();
		},
		error:function (xhr, ajaxOptions, thrownError){
			$("#LoadingImage").hide(); //hide loading image
			alert("Lỗi không kết nối được");
            //alert(thrownError);
		}
		});
});

//del dữ liệu
$(".wrapper_hocvan").on("click", "#respondse .del_hocvan", function(e) {
	 e.preventDefault();
	 var clickedID = this.id.split('-'); //Split ID string (Split works as PHP explode)
	 var DbNumberID = clickedID[1]; //and get number from array
	 var myData = 'recordToDelete='+ DbNumberID; //build a post data structure
	$('#itema_'+DbNumberID).addClass( "sel" ); //change background of this element by adding class
	$(this).hide(); //hide currently clicked delete button
	 
		jQuery.ajax({
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>candidate/delmajor/"+DbNumberID, //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:myData, //Form variables
		success:function(response){
			//on success, hide  element user wants to delete.
			$('#itema_'+DbNumberID).fadeOut();
		},
		error:function (xhr, ajaxOptions, thrownError){
			//On error, we alert user
			alert(thrownError);
		}
		});
 });
});
</script> 

										<div class="profile-education-wrapper profile-section">
										<div class="wrapper_hocvan">
											<h3 class="dark profile-title">Học vấn và bằng cấp<span><a data-toggle="collapse" data-target="#demo2" style="cursor: pointer;"><i class="ion-edit"></i></a></span></h3>
											<div id="demo2" class="collapse">
								<div class="space-between items-center">
									<div class="form-group">
										<p class="label">Chuyên nghành*</p>
										<input type="text" id="b_major" name="major" required="">
									</div> <!-- end .form-group -->
					
								</div> <!-- end .form-group-wrapper -->
										<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Trường*</p>
										<input type="text" id="b_name" name="name" required="">
									</div> <!-- end .form-group -->
									<div class="form-group">
										<p class="label">Bằng cấp*</p>
										
										<select name="literacy" id="b_literacy" style="width: 100%;">
											<option value="0">---Vui lòng chọn---</option>
											<?php foreach($literacyname as $row): ?>
											<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
										<?php endforeach; ?>
										</select>
										
									</div> <!-- end .form-group -->
								</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Từ tháng*</p>
										<input type="text" class="datepicker" id="b_fromdate" name="from_date" required="">
									</div> <!-- end .form-group -->
									<div class="form-group">
										<p class="label">Đến tháng*</p>
										<input type="text" class="datepicker1" name="to_date" id="b_todate" required="">
									</div> <!-- end .form-group -->
								</div> <!-- end .form-group-wrapper -->

									<div class="form-group textarea">
										<p class="label">Thành tựu học tập*</p>
										<textarea name="info" id="b_info" rows="6" class="txtarea"></textarea>
									</div> <!-- end .form-group -->
									<p style="text-align: right;">
						<button type="submit" class="button" id="FormCetifiel" >Lưu lại</button>
						<button type="button" class="button" data-toggle="collapse" data-target="#demo2">Hủy</button>
									</p>
				<img src="<?php echo public_url('site/images/loading.gif') ?>" id="LoadingImage" style="display:none" />
									</div>
									<div id="respondse">
											<?php foreach($hocvan as $row): ?>
											<div id="itema_<?php echo $row->id; ?>">
											<div class="profile-education">												
												<h5 class="dark"><?php echo $row->name; ?></h5>
												<p><?php echo $row->major; ?></p>
												<p class="ultra-light"><?php echo int_to_date($row->from_date); ?> - <?php echo int_to_date($row->to_date); ?></p>
												<p><?php echo $row->info; ?></p>
											<a data-toggle="collapse" data-target="#hocvan_<?php echo $row->id; ?>" style="cursor: pointer;"><i class="ion-edit"></i> Sửa</a>
											<a class="del_hocvan" id="dele-<?php echo $row->id;?>" style="cursor: pointer;"><i class="ion-close-circled"></i> Xóa</a>
											</div> <!-- end .profile-education -->
											</div>
											<div class="spacer-md"></div>

								<div id="hocvan_<?php echo $row->id; ?>" class="collapse">
								<div class="space-between items-center">
									<div class="form-group">
										<p class="label">Chuyên nghành*</p>
										<input type="text" id="major_<?php echo $row->id; ?>" value="<?php echo $row->major; ?>">
									</div> <!-- end .form-group -->
					
								</div> <!-- end .form-group-wrapper -->
										<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Trường*</p>
								<input type="text" id="name_<?php echo $row->id; ?>" value="<?php echo $row->name; ?>">
									</div> <!-- end .form-group -->
									<div class="form-group">
										<p class="label">Bằng cấp*</p>
									<select id="literacy_<?php echo $row->id; ?>" style="width: 100%;">
											<option value="0">---Vui lòng chọn---</option>
											<?php foreach($literacyname as $lit): ?>
											<option value="<?php echo $lit->id; ?>" <?php echo ($row->id==$lit->id) ? "selected" : ""; ?>><?php echo $lit->name; ?></option>
										<?php endforeach; ?>
										</select>
									</div> <!-- end .form-group -->
								</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Từ tháng*</p>
										<input type="text" class="datepicker" id="fromdate_<?php echo $row->id; ?>"  value="<?php echo int_to_date($row->from_date); ?>">
									</div> <!-- end .form-group -->
									<div class="form-group">
										<p class="label">Đến tháng*</p>
										<input type="text" class="datepicker1" id="todate_<?php echo $row->id; ?>" value="<?php echo int_to_date($row->to_date); ?>">
									</div> <!-- end .form-group -->
								</div> <!-- end .form-group-wrapper -->

									<div class="form-group textarea">
										<p class="label">Thành tựu học tập*</p>
										<textarea id="info_<?php echo $row->id; ?>" rows="6" class="txtarea"><?php echo $row->info; ?></textarea>
									</div> <!-- end .form-group -->
									<p style="text-align: right;">
						<button type="submit" class="edit_hocvan" id="<?php echo $row->id; ?>" >Lưu lại</button>
						<button type="button" class="button" data-toggle="collapse" data-target="#hocvan_<?php echo $row->id; ?>">Hủy</button>
									</p>
				<img src="<?php echo public_url('site/images/loading.gif') ?>" id="LoadingImage" style="display:none" />
									</div>

								<?php endforeach; ?>
								</div>
								</div>
										</div> <!-- end .profile-education-wrapper -->

										<div class="divider"></div>


<script type="text/javascript">
$(document).ready(function() {
//add dữ liệu
$("#FormSkill").click(function (e) {
		e.preventDefault();
		if($("#c_skill").val()==='')
			{
				alert("Bạn chưa điền nội dung");
				return false;
			}			
		$("#FormSkill").hide(); //hide submit button
		$("#LoadingImage").show(); //show loading image			
	 	var skills = 'skill='+ $("#c_skill").val(); //build a post data structure
		jQuery.ajax({
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>candidate/addskill", //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:skills, //Form variables
		success:function($response){
			$("#responds").append($response);
			$("#FormSkill").show(); //show submit button
			$("#LoadingImage").hide(); //hide loading image
			$("#demo3").hide(); 
			 window.location.reload();
		},
		error:function (xhr, ajaxOptions, thrownError){
			$("#FormSkill").show(); //show submit button
			$("#LoadingImage").hide(); //hide loading image
			alert("Lỗi không kết nối được");
            //alert(thrownError);
		}
		});
});

//del dữ liệu
$(".wrapper_hocvan").on("click", "#respondse .del_hocvan", function(e) {
	 e.preventDefault();
	 var clickedID = this.id.split('-'); //Split ID string (Split works as PHP explode)
	 var DbNumberID = clickedID[1]; //and get number from array
	 var myData = 'recordToDelete='+ DbNumberID; //build a post data structure
	$('#itema_'+DbNumberID).addClass( "sel" ); //change background of this element by adding class
	$(this).hide(); //hide currently clicked delete button
	 
		jQuery.ajax({
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>candidate/delmajor/"+DbNumberID, //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:myData, //Form variables
		success:function(response){
			//on success, hide  element user wants to delete.
			$('#itema_'+DbNumberID).fadeOut();
		},
		error:function (xhr, ajaxOptions, thrownError){
			//On error, we alert user
			alert(thrownError);
		}
		});
 });
});
</script> 



	<div class="profile-skills-wrapper profile-section">
	<h3 class="dark profile-title">Kỹ năng làm việc<span><a data-toggle="collapse" data-target="#demo3" style="cursor: pointer;"><i class="ion-edit"></i></a></span></h3>
	<div id="demo3" class="collapse">
	<div class="space-between items-center">
	<div class="form-group">
	<p class="label">Kỹ năng*</p>
	<input type="text" id="c_skill" name="skill" >
	</div> <!-- end .form-group -->		
	<p style="padding-bottom: 20px;">
	<button type="submit" class="button" id="FormSkill" >Lưu lại</button>
	<button class="button" data-toggle="collapse" data-target="#demo3"> Hủy</button>
	</p>
	</div> <!-- end .form-group-wrapper -->
	</div>
	<?php foreach($cskill as $row): ?>
	<div class="flex space-between items-center no-wrap">
	<span class="button button-sm grey "><?php echo $row->name; ?> <a href=""><i class="ion-close-circled"></i></a></span>
	</div> <!-- end .progress-wrapper -->
	<div class="spacer-xs"></div>
	<?php endforeach; ?>
									
							
	</div> <!-- end .profile-skills-wrapper -->
	</div> <!-- end .profile-wrapper -->						        
	</div> <!-- end #resume-tab -->


							    <div id="change-password" class="tab-pane fade in">							    	
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

							</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->