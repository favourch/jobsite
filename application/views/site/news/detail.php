<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<p class="breadcrumb-menu">
						<a href="<?php echo base_url(); ?>"><i class="ion-ios-home"></i></a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<?php $catname = $catnewsname->cat_name; ?>
				<a href="<?php echo base_url($catname.'-c'.$catnewsname->id);  ?>"><?php echo $catnewsname->name; ?></a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0"><?php echo $info->title; ?></a>
					</p> <!-- end .breabdcrumb-menu -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div>
<!-- Blog Section -->
		<div class="section blog-single-section-sidebar">
			<div class="inner">
				<div class="container">				
					<div class="section blog-single-section-sidebar-inner flex no-wrap">
						<div class="blog-left-side">
							<div class="blog-text-content">
								<div class="content-meta flex items-center no-column no-wrap">
									<!-- end .left-side -->
									<div class="right-side">
										<h1 class="dark"><?php echo $info->title; ?></h1>
										<div class="right-side-bottom-wrapper flex items-center no-column">
											<div class="news-meta flex no-column">
												<h6><a href="#0" class="news-author">English center work</a></h6>
												<h6 class="publish-date"><?php echo int_to_date($info->created); ?></h6>
												<h6><a href="#0" class="comment-count"><?php echo $info->view; ?> Lượt xem</a></h6>
											</div> <!-- end .news-meta -->
											
										</div> <!-- end .right-side-bottom-wrapper -->
									</div> <!-- end .right-side -->
								</div> <!-- end .blog-content-meta -->

								<div class="divider"></div>

								<div class="blog-text">
								<?php echo $info->content; ?>
								</div> <!-- end .blog-text -->	
								
								<div class="social-share-wrapper flex items-center no-wrap">
									<h6>Chia sẻ</h6>
									<ul class="social-share flex no-wrap no-column list-unstyled">
										<li><a href="#0" class="button button-sm facebook-btn"><span><i class="ion-social-facebook"></i></span>Facebook</a></li>
										<li><a href="#0" class="button button-sm twitter-btn"><span><i class="ion-social-twitter"></i></span>Twitter</a></li>
										<li><a href="#0" class="button button-sm g-plus-btn"><span><i class="ion-social-googleplus"></i></span>Google plus</a></li>
									</ul> <!-- end .social-share -->
								</div> <!-- end .social-share-wrapper -->

							</div> <!-- end .blog-text-content -->

							<div class="divider"></div>
							<div class="post-tags-wrapper flex items-center no-column">
												<h6>Tags:</h6>
												<ul class="post-tags flex items-center no-column list-unstyled">
													<?php echo tags(base_url(),'button button-sm grey',$info->tags); ?>
												</ul> <!-- end .post-tags -->
											</div> <!-- end .post-tags-wrapper -->

							<div class="related-posts-wrapper">
								<h3>Thông tin liên quan</h3>
								<div class="news-grid">
									<div class="news-grid-row flex space-between" style="">
										<?php foreach($likecatnews as $row): ?>
										<?php $newsname = $row->news_name; ?>
										<div class="news-item">
											
											<div class="news-content">
												<div class="news-meta flex no-column">
													<h6><a href="#0" class="news-author">admin</a></h6>
												<h6 class="publish-date"><?php echo int_to_date($row->created); ?></h6>
													<h6><a href="#0" class="comment-count"><?php echo $row->view; ?> Lượt xem</a></h6>
												</div> <!-- end .news-meta -->
												<h3 class="news-title"><?php echo $row->title; ?></h3>
												<a href="<?php echo base_url($newsname.'-'.$row->id.'.html'); ?>">Xem thêm<i class="ion-ios-arrow-thin-right"></i></a>
											</div> <!-- end .news-content -->
										</div> <!-- end .news-item -->
									<?php endforeach; ?>
								
									</div>  <!-- end .news-grid-row -->						
								</div> <!-- end .news-grid -->
							</div> <!-- end .related-post-wrapper -->

						</div> <!-- end .left-side -->

					<?php $this->load->view('site/blocks/block_right'); ?>					
					</div> <!-- end .blog-single-section-inner -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->