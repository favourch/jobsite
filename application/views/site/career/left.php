<div class="left-side">

						<div class="statistics-widget-wrapper jobs-widget">
							<h6>Thống kê tổng thể</h6>
							<div class="statistics-widget flex no-column no-wrap">
								<div class="left-side-inner">
									<h2 class="dark">683,207</h2>
									<h5>Hồ sơ ứng viên</h5>
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<button type="button" class="button button-sm grey">+583 this week</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .statisstics-widget -->

							<div class="statistics-widget flex no-column no-wrap">
								<div class="left-side-inner">
										<h2 class="dark">129, 245</h2>
										<h5>Việc làm</h5>
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<button type="button" class="button button-sm grey">+364 this week</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .statisstics-widget -->

						</div> <!-- end .statistics-widget-wrapper -->

						<div class="divider"></div>

						<div class="featured-jobs-widget-wrapper jobs-widget">
							<h6>Việc làm nổi bật</h6>
							<div class="featured-jobs-widget">
							<?php foreach($hotjob as $row): ?>
								<?php $company = $this->member_company_model->get_info($row->company_id); ?>
								<?php $city = $this->city_model->get_info($row->city_id); ?>
								<div class="featured-job flex items-center no-column no-wrap">
									<div class="left-side-inner">
										<img src="<?php echo base_url('uploads/company/'.$company->logo_url); ?>" alt="" class="img-responsive">
									</div> <!-- end .left-side -->
									<div class="right-side-inner">
										<h5 class="dark"><a href="<?php echo base_url($row->cat_name.'-'.$row->id.'-jv'); ?>"><?php echo $row->title; ?></a></h5>
										<h5><?php echo $company->company_name; ?> | <span style="color: #999;"> <?php echo $city->name; ?></span></h5>
									</div> <!-- end .right-side -->
								</div> <!-- end .featured-job -->
							<?php endforeach; ?>
						

							</div> <!-- end .featured-jobs-widget -->

						</div> <!-- end .featured-jobs-widget-wrapper -->

						<div class="divider"></div>

						<div class="latest-updates-widget-wrapper jobs-widget">
							<h6>Việc làm mới nhất</h6>
							
							<?php foreach($lastestjob as $row): ?>
								<?php $company = $this->member_company_model->get_info($row->company_id); ?>
								<?php $city = $this->city_model->get_info($row->city_id); ?>
							<div class="latest-update flex no-column no-wrap">
								<div class="left-side-inner">
									<img src="<?php echo base_url('uploads/company/'.$company->logo_url); ?>" alt="" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
							<h5><span><a href="<?php echo base_url($row->cat_name.'-'.$row->id.'-jv'); ?>" style="color: #000; font-weight: bold;"><?php echo $row->title; ?></a></span></h5>
							<h5><?php echo $company->company_name; ?> | <?php echo $city->name; ?></h5>
								</div> <!-- end .right-side -->
							</div> <!-- end .latest-update -->
						<?php endforeach; ?>
					
						</div> <!-- end .latest-updates-widget-wrapper -->

					</div> <!-- end .left-side -->