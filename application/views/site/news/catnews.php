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


	<!-- News Grid Section Section -->
		<div class="section news-grid-section solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="news-grid">
						
						<div class="news-grid-row flex space-between">
							
							<?php foreach ($list as $row): ;?>
							<?php $newsname = $row->news_name; ?>
							<div class="news-item">
								<img src="<?php echo base_url('uploads/news/'.$row->image); ?>" alt="<?php echo $row->title; ?>" class="img-responsive">
								<div class="news-content">
									<div class="news-meta flex no-column">
										<h6><a href="#0" class="news-author">Cập nhật lúc </a></h6>
										<h6 class="publish-date"><?php echo int_to_date($row->created); ?></h6>
										<h6><a href="#0" class="comment-count"><?php echo $row->view; ?> Lượt xem</a></h6>
									</div> <!-- end .news-meta -->
									<h3 class="news-title"><?php echo $row->title; ?></p></h3>
									<p class="news-excerpt"><?php echo $row->description; ?></p>
									<a href="<?php echo base_url($newsname.'-'.$row->id.'.html'); ?>" class="button">Xem thêm</a>
								</div> <!-- end .news-content -->
							</div> <!-- end .news-item -->
						<?php endforeach; ?>						
						</div>  <!-- end .news-grid-row -->

						<div class="load-more-button-wrapper text-center">
							<a href="" id="load-more-button" class="button">LOAD MORE</a>
						</div> <!-- end .load-more-button-wrapper -->						
					</div> <!-- end .news-grid -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

