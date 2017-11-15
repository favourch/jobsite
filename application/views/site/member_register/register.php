	<!-- Contact-Us Section -->
		<div class="section contact-us-section">
			<div class="inner">
				<div class="container">
					<div class="contact-us-section-inner flex space-between no-wrap">
						<div class="left">
							<h1>Contact Us</h1>
							<p class="ultra-light">Pellentesque a massa risus. Cras convallis finibus porta. Integer in ligula leo. Cras quis consequat nisl, at malesuada sapien. Mauris ultricies nisi eget velit bibendum, sit amet euismod mi gravida.<br><br>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque non laoreet risus, id elementum purus.</p>
							<div class="follow-us flex no-column items-center">
								<h6>Follow us via:</h6>
								<ul class="list-unstyled social-icons flex no-column">
									<li><a href="#0"><i class="ion-social-twitter"></i></a></li>
									<li><a href="#0"><i class="ion-social-facebook"></i></a></li>
								</ul> <!-- end .social-icons -->
							</div> <!-- end .follow-us -->
						</div> <!-- end .left -->
						
						<div class="right">

							<form action="<?php echo base_url('member_register/register'); ?>" method="post" id="contact-form" class="contact-form">
								<div class="form-group-wrapper flex space-between items-center">
									
									<div class="form-group">
										<p class="label">Your Email*</p>
										<input type="email" name="email" placeholder="Enter your email"  value="<?php echo set_value('email'); ?>">
										<span class="message" style="font-size: 12px; color: #c00;">
										<?php echo form_error('email'); ?></span>
									</div> <!-- end .form-group -->
									<div class="form-group">
										<p class="label">Your Phone*</p>
										<input type="text" name="phone" placeholder="Enter your phone number" value="<?php echo set_value('phone'); ?>">
									</div> <!-- end .form-group -->
								</div> <!-- end .form-group-wrapper -->
								<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Your Password*</p>
										<input type="text" name="password" placeholder="Enter your password" >
										<span class="message" style="font-size: 12px; color: #c00;">
										<?php echo form_error('password'); ?></span>
									</div> <!-- end .form-group -->
									<div class="form-group">
										<p class="label">Confirm Password*</p>
										<input type="text" name="repassword" placeholder="Enter your confirm password" >
										<span class="message" style="font-size: 12px; color: #c00;">
										<?php echo form_error('repassword'); ?></span>
									</div> <!-- end .form-group -->
									<div class="form-group">
										<p class="label">Đăng ký cho </p>
										<select name="member_name" style="width: 100%">
											<option value="ungvien">Ứng viên</option>
											<option value="tuyendung">Tuyển dụng</option>
										</select>
									</div>
								</div> <!-- end .form-group-wrapper -->
									<input type="submit" class="button" value="Đăng ký">
																
								<div class="alert alert-info form-alert">
									<span class="message">Loading...</span>
								</div>
								<div id="contact-success" class="alert alert-success form-alert">
									<span class="message">Success!</span>
								</div>
								<div id="contact-error" class="alert alert-danger form-alert">
									<span class="message">Error!</span>
								</div>
							</form> <!-- end .contact-form -->
							
						</div> <!-- end .right -->
					</div>	<!-- end .contact-us-section-inner -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->