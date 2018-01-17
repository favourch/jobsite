	<!-- Contact-Us Section -->
		<div class="section contact-us-section" style="border-top: 1px solid #ccc;">
			<div class="inner">
				<div class="container">
					<div class="contact-us-section-inner flex space-between no-wrap">
						<div class="left">
							<h1>Đăng nhập</h1>
							<p class="ultra-light">Mời bạn đăng nhập vào hệ thống website để tạo và quản lý hồ sơ, thu hút các nhà tuyển dụng tìm kiếm đến bạn</p>
							<div class="follow-us flex no-column items-center">
								<h6>Chưa có tài khoản <a href="<?php echo base_url('ung-vien/dang-ky'); ?>">Đăng ký <i class="ion-ios-personadd"></i></a></h6>
							</div> <!-- end .follow-us -->
						</div> <!-- end .left -->
						
						<div class="right">

							<form action="<?php echo base_url('candidate/login'); ?>" method="post" id="contact-form" class="contact-form">
							<span style="color: #c00; font-size: 12px;"><?php echo form_error('login'); ?></span>
								<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Email của bạn*</p>
										<input type="email" name="email" placeholder=""  value="">
										<span style="color: #c00; font-size: 12px;"><?php echo form_error('email'); ?></span>
									</div> <!-- end .form-group -->
								
								</div> <!-- end .form-group-wrapper -->
								<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Mật khẩu*</p>
										<input type="password" name="password" placeholder="" >
										<span style="color: #c00; font-size: 12px;"><?php echo form_error('password'); ?></span>
									</div> <!-- end .form-group -->
								</div>
								<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Ghi nhớ đăng nhập</p>
										<input type="checkbox" value="remmeber">
									</div> <!-- end .form-group -->
								</div>
						<!-- end .form-group-wrapper -->
						<div class="form-group-wrapper flex space-between items-center">
						<div class="form-group">
						<input type="submit" class="button" value="Đăng nhập" style="width: 100%;">

<?php echo "<a href='$authUrl' class='button'>Login bằng facebook</a>"; ?>


						</div>	
						</div>						
						
							</form> <!-- end .contact-form -->
							
						</div> <!-- end .right -->
					</div>	<!-- end .contact-us-section-inner -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->