	<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<p class="breadcrumb-menu">
						<a href="<?php echo base_url(); ?>"><i class="ion-ios-home"></i></a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0"><?php echo $category->name; ?></a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0">Danh sách tin tức</a>
					</p> <!-- end .breabdcrumb-menu -->
					
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

<!-- Blog Section -->
		<div class="section blog-list-section">
			<div class="inner">
				<div class="container">

					<div class="blog-posts-wrapper flex space-between no-wrap">
						<div class="blog-left-side">

							<?php foreach ($list as $row): ;?>
							<?php $newsname = $row->news_name; ?>
							<div class="blog-list flex no-wrap">
								<div class="left-side">
						<img src="<?php echo base_url('uploads/news/'.$row->image) ?>" alt="<?php echo $row->title; ?>" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side">
									<h2 class="dark"><?php echo $row->title; ?></h2>
									<div class="news-meta flex no-column">
									<h6 class="publish-date">Cập nhật lúc : <?php echo int_to_date($row->created); ?></h6>
									</div> <!-- end .news-meta -->
									<p><?php echo $row->description; ?></p>
									<a href="<?php echo base_url($newsname.'-'.$row->id.'.html'); ?>" class="button">Read More</a>
								</div> <!-- end .right-side -->
							</div> <!-- end .blog-list -->
						<?php endforeach; ?>
						

							<div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">
								<?php echo $this->pagination->create_links(); ?>
							</div> <!-- end .jobpress-custom-pager -->

						</div> <!-- end .blog-list-wrapper -->
					<?php $this->load->view('site/blocks/block_right'); ?>			
					</div> <!-- end .blog-posts-wrapper -->

				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->