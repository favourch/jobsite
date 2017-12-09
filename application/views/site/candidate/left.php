<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
						<div class="left-sidebar-menu">							
							<ul class="nav nav-pills nav-stacked">
								<li class="heading">Quản lý tài khoản</li>

							    <li><a href="<?php echo base_url('ung-vien'); ?>">Hồ sơ của tôi</a></li>
							    <li><a href="<?php echo base_url('ung-vien/cap-nhat-thong-tin'); ?>">Cập nhật thông tin</a></li>
							    <li class="nav-divider"></li>
							   	<li class="heading">Việc làm của tôi</li>
							   	<li><a href="<?php echo base_url('ung-vien/viec-lam-da-luu'); ?>">Việc làm đã lưu</a></li>
							    <li class="notification-link flex space-between items-center no-column no-wrap"><a href="<?php echo base_url('ung-vien/viec-lam-da-ung-tuyen') ?>">Việc làm đã ứng tuyển</a> </li>
								<li><a href="<?php echo base_url('ung-vien/nha-tuyen-dung-xem-ho-so'); ?>">Nhà tuyển dụng xem hồ sơ</a></li>
							    <li class="nav-divider"></li>
							    <li><a href="<?php echo base_url('ung-vien/doi-mat-khau'); ?>">Đổi mật khẩu</a></li>
							    <li><a href="<?php echo base_url('ung-vien/dang-xuat'); ?>">Đăng xuất</a></li>
							</ul>

<script type="text/javascript">
$(document).ready(function() {
//edit dữ liệu
$(".edit_cv").on("change", function () {		

		$("#LoadingCV").show(); //show loading image	
	 	//var filecv = 'cvupload='+ $("#cacvupload").val();
	 	var file_data = $('#cacvupload').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);

		jQuery.ajax({
		cache: false,
		type: "POST", // HTTP method POST or GET
		url: "<?php echo base_url() ?>candidate/uploadcv", //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data : form_data,
        async : false,
        contentType : false,
        processData : false,
		success:function(response){
			
			$("#LoadingCV").hide(); //hide loading image; 
			 window.location.reload();
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
							<div class="cv_upload">
								<h4>Hồ sơ đính kèm</h4>
							<div class="bao_cv">
								<span>Hồ sơ của bạn <i class="ion-edit"></i></span>
								<form method="post" enctype="multipart/form-data" id="frmUpload" name="frmUpload">
								<div class="form-group upload-company-logo">
									    	<label for="cacvupload" class="flex space-between items-center no-column no-wrap" style="width: 100%;">
									    	<span>Tải lên hồ sơ</span>
									    	<span><i class="ion-ios-folder-outline"></i>Chọn tệp</span>
									    	</label>
										    <input type="file" name="file" id="cacvupload" class="edit_cv">
										    <img src="<?php echo public_url('site/images/loading.gif') ?>" id="LoadingCV" style="display:none" />
										</div>
								</form>
								<span style="color: #5cb85c;"><?php if(isset($alert)) { $this->load->view('site/alert', $this->data); } ?></span>
								<p><?php echo $user_info->cv_upload; ?></p>
								<span> Được cập nhật lúc : <?php echo int_to_date($user_info->created); ?> </span>
							</div>
							</div>

						</div> <!-- end .left-sidebar-menu -->