<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<p class="breadcrumb-menu">
						<a href="#0"><i class="ion-ios-home"></i></a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0">Tìm kiếm ứng viên</a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0"><?php echo $categories->name; ?></a>
					</p> <!-- end .breabdcrumb-menu -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

				<!-- Candidates Listing Section -->
		<div class="section candidates-listing solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="page-content flex no-wrap space-between">
						<div class="left-content">
							<div class="top flex space-between no-wrap items-center">
								<h6>Có tất cả <span><?php echo $total_row; ?></span>Ứng viên cho danh mục <span><?php echo $categories->name; ?></span></h6>
								<div class="spacer-xs-m"></div>
								
							</div> <!-- end .top -->

							<div class="candidates-list">
								
							<?php foreach($listcandidate as $row): ?>
							<?php $cityinfo = $this->city_model->get_info($row->city_id); ?>
							<?php $experience = $this->require_experience_model->get_info($row->experience_id); ?>
							<?php $level_info = $this->level_model->get_info($row->level_id); ?>
								<div class="candidate flex no-wrap no-column">
									<div class="candidate-image">
			<?php if($row->image!=''): ?>
			<img src="<?php echo base_url('uploads/candidate/'.$row->image); ?>" alt="" class="img-responsive">
		<?php else: ?>
			<img src="<?php echo public_url('site/images/userscandi.png'); ?>" alt="" class="img-responsive">
		<?php endif; ?>
									</div> <!-- end .candidate-image -->
									<div class="candidate-info">
										<h4 class="candidate-name"><?php echo $row->title; ?>
									<span style="float: right; color: #fc205b"><?php echo $experience->name; ?></span>
										</h4>
								<h5 class="candidate-designation"><?php echo $row->full_name; ?> <span style="float: right;"><?php echo format_date($row->modified_date); ?></span></h5>
										<p class="candidate-description ultra-light"><?php echo sub($row->description,200); ?> ...</p>
										<div class="candidate-info-bottom flex no-column items-center">
									<h5 class="candidate-location"><span><?php echo $cityinfo->name; ?></span></h5>
								<h5 class="hourly-rate">Chức vụ :<span> <?php echo $level_info->name; ?></span></h5>
											
										</div> <!-- end .candidate-info-bottom -->
									</div> <!-- end .candidate-info -->
								</div> <!-- end .candidate -->

								<div class="spacer-xs"></div>
							<?php endforeach; ?>

							</div> <!-- end .candidates-list -->

							<div class="spacer-md"></div>

						 <div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<?php echo $this->pagination->create_links(); ?>
						</div> <!-- end .jobpress-custom-pager -->

						</div> <!-- end .left-content -->
						<div class="right-sidebar">
							
							<div class="filter categories-filter">
								<h6 class="filter-widget-title">Tìm kiếm hồ sơ ứng viên</h6>
								<div class="form-group">
									<select class="form-control" id="categories-filter" name="literacy_id">
									    <option value="" selected disabled>Trình độ học vấn</option>
									    <?php foreach($listracy as $row): ?>
									    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
									<?php endforeach; ?>
									</select>
								</div> <!-- end .form-group -->
								<div class="form-group">
									<select class="form-control" id="categories-filter">
									    <option value="" selected disabled>Trình độ ngoại ngữ</option>
									    <option>Featured Developer</option>
									    <option>Hourly Rate</option>
									    <option>Location</option>
									    <option>Skills</option>
									</select>
								</div> <!-- end .form-group -->
								<div class="form-group">
									<select class="form-control" id="categories-filter" name="level_id">
									    <option value="" selected disabled>Vị trí mong muốn</option>
									    <?php foreach($levelist as $row): ?>
									    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
									<?php endforeach; ?>
									</select>
								</div> <!-- end .form-group -->
								<div class="form-group">
									<select class="form-control" id="categories-filter" name="salary_id">
									    <option value="" selected disabled>Mức lương mong muốn</option>
									    <?php foreach($listsalary as $row): ?>
									    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
									<?php endforeach; ?>
									</select>
								</div> <!-- end .form-group -->
								<div class="form-group">
									<select class="form-control" id="categories-filter" name="experience_id">
									    <option value="" selected disabled>Chọn mức kinh nghiệm</option>
									    <?php foreach($listex as $row): ?>
									    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
									<?php endforeach; ?>
									</select>
								</div> <!-- end .form-group -->
								<div class="form-group">
									<input type="submit" class="button" value="Tìm ứng viên" style="width: 100%;">
								</div>
							</div> <!-- end .categories-filter -->

						</div> <!-- end .right-sidebar -->
					</div> <!-- end .page-content -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->