		<!-- Blog Section -->
		<div class="section blog-single-section">
			<div class="blog-featured-section blog-featured-image">
				<img src="<?php echo public_url(); ?>/site/images/blog-post-featured-img01.jpg" class="img-responsive">
			</div> <!-- end .blog-featured-image -->
			<div class="section blog-text-content-wrapper">
				<div class="inner">
					<div class="container">
						<div class="blog-text-content">
							<div class="no-column no-wrap">
								<?php $company = $this->member_company_model->get_info($jobname->company_id); ?>
								<div class="right-side">
									<h2 class="dark"><span style="font-size: 22px; color: #666;">Bạn đang ứng tuyển cho vị trí </span><?php echo $jobname->title; ?></h2>
								
								</div> <!-- end .right-side -->
							</div> <!-- end .blog-content-meta -->
				
						</div> <!-- end .blog-text-content -->

						<div class="comment-section-wrapper flex no-wrap">
							<div class="left-side-wrapper">	
								
				<form action="#" method="post" id="comment-form" class="comment-form" enctype="multipart/form-data">
									<div class="form-group">
										<label> Họ và tên : <?php echo $candidate->full_name; ?> </label>
									</div> <!-- end .form-group -->

									<div class="form-group">
										<label> Email : <?php echo $candidate->email; ?> </label>
									</div> <!-- end .form-group -->
									
									<div class="form-group">
								<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $candidate->phone; ?>" placeholder="Số điện thoại liên hệ">
									</div> <!-- end .form-group -->

									<div class="form-group">
										<label>Hồ sơ đính kèm</label> <br>
										<input type="radio" name="cv_upload" value="1"> <?php echo $candidate->cv_upload; ?> 
										<br>
										<div class="input-cv">
										<input type="radio" name="cv_upload" value="2"> <span>Chọn hồ sơ mới ( Click to uploads <i class="ion-ios-cloud-upload-outline"></i> )</span>
										<input type="file" name="cvupload" class="upcv">
										</div>
									</div> <!-- end .form-group -->
									<br>
									
									<input type="submit" class="button">Nộp hồ sơ</button>
									<button type="submit" class="button">Trở về</button>
									
								</form> <!-- end .comment-form -->



							</div> <!-- end .left-side-wrapper -->

							<div class="right-side-wrapper">
								
								<div class="comment-wrapper">
									<div class="comment-wrapper-inner flex no-column no-wrap">
										
										<div class="right-side">
											<h4 class="dark"><?php echo $company->company_name; ?></h4>
											<p><?php echo $company->description; ?></p>
											<div class="comment-meta flex items-center no-wrap no-column">
											
											</div> <!-- end .comment-meta -->
										</div> <!-- end.right-side -->
									</div> <!-- end .comment-wrapper-inner -->
						
								</div> <!-- end .comment-wrapper -->
							</div> <!-- end .right-side-wrapper -->
						</div> <!-- end .comment-section-wrapper -->
					</div> <!-- end .container -->
				</div> <!-- end .inner -->
			</div> <!-- end .blog-text-content -->
		</div> <!-- end .blog-single-section -->
