	
						<div class="blog-sidebar">							
							<div class="search-widget blog-widget">
								<h6>Tìm kiếm trên trang</h6>
				                <div class="input-group search-form">
				                    <input type="text" class="form-control"  placeholder="Enter your keyword" >
				                    <button type="submit"><span><i class="ion-ios-search"></i></span></button>
	                			</div>
							</div> <!-- end .search-widget -->

							<div class="recent-posts-widget blog-widget">
								<h6>Bài viết gần đây</h6>
								<?php foreach($relatenews as $row): ?>
									<?php $newsname = $row->news_name; ?>
								<div class="recent-post flex items-center no-column no-wrap">
									<img src="<?php echo base_url('uploads/news/'.$row->image); ?>" alt="<?php echo $row->title; ?>" class="img-responsive">
									<h4><a href="<?php echo base_url($newsname.'-'.$row->id.'.html'); ?>"><?php echo $row->title; ?></a></h4>
								</div> <!-- end .recent-post -->
							<?php endforeach; ?>
								
							</div> <!-- end .recent-posts-widget -->
							
							<div class="blog-category-widget blog-widget">
								<h6>Danh mục tin tức</h6>
								<ul class="blog-categories list-unstyled">
									<li><a href="#0">Announcement</a></li>
									<li><a href="#0">Indeed events</a></li>
									<li><a href="#0">Tips &amp; Tricks</a></li>
									<li><a href="#0">Experiences</a></li>
									<li><a href="#0">Case Studies</a></li>
									<li><a href="#0">Labor Market News</a></li>
									<li><a href="#0">HR Best practices</a></li>
								</ul>
							</div> <!-- end .blog-category-widget -->

							<div class="blog-tags-widget blog-widget">
								<h6>Tags</h6>
								<ul class="blog-tags flex no-column list-unstyled">
									<li><a href="#0" class="button button-xs grey">Jobpress</a></li>
									<li><a href="#0" class="button button-xs grey">Recruiter</a></li>
									<li><a href="#0" class="button button-xs grey">Interview</a></li>
									<li><a href="#0" class="button button-xs grey">Employee</a></li>
									<li><a href="#0" class="button button-xs grey">Labor</a></li>
									<li><a href="#0" class="button button-xs grey">HR</a></li>
									<li><a href="#0" class="button button-xs grey">Freelancer</a></li>
									<li><a href="#0" class="button button-xs grey">Slaray</a></li>
									<li><a href="#0" class="button button-xs grey">Employer</a></li>
								</ul>
							</div> <!-- end .blog-tags-widget -->

					

						</div> <!-- end .blog-sidebar -->	