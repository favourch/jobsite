	
						<div class="blog-sidebar">							

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
								<h6>Cho người tìm việc</h6>
								<ul class="blog-categories list-unstyled">
								<?php foreach($newsjobs as $row): ?>
									<li><a href="<?php echo base_url($row->cat_name.'-'.$row->id.'-jv'); ?>"><?php echo $row->title; ?></a></li>
								<?php endforeach; ?>
									
								</ul>
							</div> <!-- end .blog-category-widget -->

							<div class="blog-tags-widget blog-widget">
								<h6>Tags cloude</h6>
								<ul class="blog-tags flex no-column list-unstyled">
									<?php foreach($tagscloud as $row) : ?>
									<li><a href="<?php echo $row->link ?>" class="button button-xs grey"><?php echo $row->name; ?></a></li>
									<?php endforeach; ?>
									
								</ul>
							</div> <!-- end .blog-tags-widget -->

					

						</div> <!-- end .blog-sidebar -->	