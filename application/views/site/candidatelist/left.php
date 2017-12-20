<div class="left-side">

						<div class="statistics-widget-wrapper jobs-widget">
							<h6>Overall statistics</h6>
							<div class="statistics-widget flex no-column no-wrap">
								<div class="left-side-inner">
									<h2 class="dark">683,207</h2>
									<h5>Created Resumes</h5>
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<button type="button" class="button button-sm grey">+583 this week</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .statisstics-widget -->

							<div class="statistics-widget flex no-column no-wrap">
								<div class="left-side-inner">
										<h2 class="dark">129, 245</h2>
										<h5>Posted Jobs</h5>
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<button type="button" class="button button-sm grey">+364 this week</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .statisstics-widget -->

						</div> <!-- end .statistics-widget-wrapper -->

						<div class="divider"></div>

						<div class="featured-jobs-widget-wrapper jobs-widget">
							<h6>Ứng viên năng động</h6>
							<div class="featured-jobs-widget">
							<?php foreach($candidate_nd as $row): ?>
								<div class="featured-job flex items-center no-column no-wrap">
									<div class="left-side-inner">
				<?php if($row->image!=''): ?>
				<a href="<?php echo base_url('ho-so/'.$row->id.'/'.$row->cat_name.'.html'); ?>"><img src="<?php echo base_url('uploads/candidate/'.$row->image); ?>" alt="" class="img-responsive" style="width: 50px;"></a>
			<?php else: ?>
				<a href="<?php echo base_url('ho-so/'.$row->id.'/'.$row->cat_name.'.html'); ?>">
				<img src="<?php echo public_url('site/images/userscandi.png'); ?>" alt="" class="img-responsive"></a>
			<?php endif; ?>
									</div> <!-- end .left-side -->
									<div class="right-side-inner">
										<h5 class="titleblue"><?php echo $row->title; ?></h5>
										<h5><?php echo $row->full_name; ?></h5>
									</div> <!-- end .right-side -->
								</div> <!-- end .featured-job -->
							<?php endforeach; ?>
								

							</div> <!-- end .featured-jobs-widget -->

						</div> <!-- end .featured-jobs-widget-wrapper -->

						<div class="divider"></div>

						<div class="latest-updates-widget-wrapper jobs-widget">
							<h6>Ứng viên mới nhất</h6>
							
							<?php foreach($lastestcandidate as $row): ?>
							<div class="latest-update flex no-column no-wrap">
								<div class="left-side-inner">
									<?php if($row->image!=''): ?>
									<a href="<?php echo base_url('ho-so/'.$row->id.'/'.$row->cat_name.'.html'); ?>"><img src="<?php echo base_url('uploads/candidate/'.$row->image); ?>" alt="<?php echo $row->full_name; ?>" class="img-responsive" width="50"></a>
								<?php else: ?>
									<a href="<?php echo base_url('ho-so/'.$row->id.'/'.$row->cat_name.'.html'); ?>"><img src="<?php echo public_url('site/images/userscandi.png'); ?>" alt="<?php echo $row->full_name; ?>" class="img-responsive" width="50"></a>
								<?php endif; ?>
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<h5 class="titlepink"><?php echo $row->title; ?></h5>
									<h5><span><?php echo $row->full_name; ?></span></h5>
								</div> <!-- end .right-side -->
							</div> <!-- end .latest-update -->
						<?php endforeach; ?>

						</div> <!-- end .latest-updates-widget-wrapper -->

					</div> <!-- end .left-side -->