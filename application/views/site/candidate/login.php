	<!-- Contact-Us Section -->
		<div class="section contact-us-section" style="border-top: 1px solid #ccc;">
			<div class="inner">
				<div class="container">
					<div class="contact-us-section-inner flex space-between no-wrap">
						<div class="left">
							<h1>Đăng nhập</h1>
							<p class="ultra-light">Mời bạn đăng nhập vào hệ thống website để tạo và quản lý hồ sơ, thu hút các nhà tuyển dụng tìm kiếm đến bạn</p>
							<div class="follow-us flex no-column items-center">
								<h6>Follow us via:</h6>
								<ul class="list-unstyled social-icons flex no-column">
									<li><a href="#0"><i class="ion-social-twitter"></i></a></li>
									<li><a href="#0"><i class="ion-social-facebook"></i></a></li>
								</ul> <!-- end .social-icons -->
							</div> <!-- end .follow-us -->
						</div> <!-- end .left -->
						
						<div class="right">

							<form action="<?php echo base_url('candidate/login'); ?>" method="post" id="contact-form" class="contact-form">
							<?php echo form_error('login'); ?>
								<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Your Email*</p>
										<input type="email" name="email" placeholder="Enter your email"  value="">
										<?php echo form_error('email'); ?>
									</div> <!-- end .form-group -->
								
								</div> <!-- end .form-group-wrapper -->
								<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Your Password*</p>
										<input type="password" name="password" placeholder="Enter your password" >
										<?php echo form_error('password'); ?>
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
						</div>	
						</div>						
						
							</form> <!-- end .contact-form -->
							
						</div> <!-- end .right -->
					</div>	<!-- end .contact-us-section-inner -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->