<div id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<img src="<?php echo public_url('site/images/background.jpg'); ?>">
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>

			<?php foreach($slide_list as $row): ?>
			<div class="item">
				<img src="<?php echo base_url('uploads/slide/'.$row->image); ?>">
					<div class="container">
						<div class="carousel-caption">

						</div>
					</div>
				</div>
			<?php endforeach; ?>

				</div>

				<div class="container">
					<div class="inline-search-form">

						<form class="col-sm-12" id="searchForm" method="GET" action="<?php echo base_url('home/find_jobs'); ?>"> 

							<h3> <span>We care for your future</span></h3>

							<div class="form-inline flex">			
								<div class="form-group">
									<div class="form-group-inner">
										<input type="text" class="form-control" name="keyword" id="input-field-1" placeholder="Chức danh / Từ khóa / Tên công ty">
											<!-- <i class="ion-ios-briefcase-outline"></i> -->
										</div>
									</div>

									<div class="form-group">
										<div class="form-group-inner">
											<select class="selectpicker" data-live-search="true" name="careerid">
												<option value="0">Tất cả ngành nghề</option>
												<?php foreach($category_home as $row): ?>
												<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="form-group">                            
										<select class="selectpicker" data-live-search="true" name="cityid">
											<option value="0">Tất cả địa điểm</option>
											<?php foreach($cityinfo as $row): ?>
											<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
											<?php endforeach; ?>
										</select>

									</div>
									<button type="submit" class="button"><i class="ion-ios-search-strong"></i> Tìm việc</button>
								</div>					
							</form>
							<div class="keywords flex">
								<h4 class="self-center"><a href="<?php echo base_url('ung-vien/dang-nhap'); ?>" class="button item-center"><i class="ion-ios-cloud-upload-outline"></i>  Tải lên hồ sơ của bạn</a></h4>
							</div> 
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<i class="glyphicon glyphicon-chevron-left"></i>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<i class="glyphicon glyphicon-chevron-right"></i>
					</a>  
				</div>    

				<div class="section Latest-jobs-section">
					<div class="inner">
						<div class="container">
							<div class="jobs-table">
								<div class="panel with-nav-tabs panel-default">
									<div class="panel-heading">
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_job_hightlight" data-toggle="tab">
													<h3>Việc làm nổi bật</h3>
												</a>
											</li>
											<li>
												<a href="#tab_job_suggest" data-toggle="tab">
													<h3>Việc làm gợi ý</h3>  
												</a>
											</li>                            
										</ul>
									</div>
									<div class="panel-body">
										<div class="tab-content">
											<div class="tab-pane fade in active" id="tab_job_hightlight">
												<ul class="list-group row">
													<?php foreach($lastestjob as $row): ?>
													<?php $company = $this->member_company_model->get_info($row->company_id); ?>
													<?php $salary = $this->salary_model->get_info($row->salary_id); ?>
													<?php $city = $this->city_model->get_info($row->city_id); ?>

													<li class="list-group-item col-md-6">
														<div class="media">
															<div class="media-left">
																<?php if($company->logo_url==''): ?>
																<img class="media-object" src="<?php echo public_url('site/images/building.png'); ?>" alt="" class="img-responsive" width="70">
																	<?php else: ?>     
																	<img class="media-object" src="<?php echo base_url('uploads/company/'.$company->logo_url); ?>" alt="" class="img-responsive" width="70">
																		<?php endif; ?>                                          
																	</div>
																	<div class="media-body">
																		<h4><a href="<?php echo base_url($row->cat_name.'-'.$row->id.'-jv'); ?>"><?php echo $row->title; ?></a> <img src="<?php echo public_url('site/images/bg.gif'); ?>" style="width: 40px;"></h4>
																			<p><?php echo $company->company_name; ?></p>
																		</div>
																	</div>
																</li>

																<?php endforeach; ?>                                    
															</ul>
														</div>
														<div class="tab-pane fade" id="tab_job_suggest">
															<ul class="list-group row">
																<?php foreach($recommentjobs as $row): ?>
																<?php $company = $this->member_company_model->get_info($row->company_id); ?>
																<?php $salary = $this->salary_model->get_info($row->salary_id); ?>
																<?php $city = $this->city_model->get_info($row->city_id); ?>
																<li class="list-group-item col-md-6">
																	<div class="media">
																		<div class="media-left">
																			<?php if($company->logo_url==''): ?>
																			<img class="media-object" src="<?php echo public_url('site/images/building.png'); ?>" alt="" class="img-responsive" width="70">
																				<?php else: ?>     
																				<img class="media-object" src="<?php echo base_url('uploads/company/'.$company->logo_url); ?>" alt="" class="img-responsive" width="70">
																					<?php endif; ?>                                          
																				</div>
																				<div class="media-body">
																					<h4><a href="<?php echo base_url($row->cat_name.'-'.$row->id.'-jv'); ?>"><?php echo $row->title; ?></a> </h4>
																					<p><?php echo $company->company_name; ?></p>
																				</div>
																			</div>
																		</li>
																		<?php endforeach; ?>

																	</ul>
																</div>                     
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Latest News Section -->
									<div class="section Latest-news-section">
										<div class="inner">
											<div class="container">
												<div class="section-top-content flex items-center">
													<h1>Kiến thức bổ ích</h1>
													<a href="#">Xem tất cả<i class="ion-ios-arrow-thin-right"></i></a>
												</div> <!-- end .section-top-content -->
												<div class="news-grid">
													<div class="news-grid-row flex space-between">

														<?php foreach($newshome_list as $row): ?>
														<?php $newsname = $row->news_name; ?>
														<div class="news-item">
															<img src="<?php echo base_url('uploads/news/'.$row->image); ?>" alt="" class="img-responsive">
																<div class="news-content">
																	<div class="news-meta flex no-column">
																		<h6 class="publish-date"><?php echo int_to_date($row->created); ?></h6>
																		<h6><a href="#0" class="comment-count"><?php echo $row->view; ?> Lượt xem</a></h6>
																	</div> <!-- end .news-meta -->
																	<h3 class="news-title"><?php echo $row->title; ?></h3>
																	<p class="news-excerpt"><?php echo sub($row->description,130); ?> ...</p>
																	<a href="<?php echo base_url($newsname.'-'.$row->id.'.html'); ?>" class="button">Đọc tiếp</a>
																</div> <!-- end .news-content -->
															</div> <!-- end .news-item -->
															<?php endforeach; ?>

														</div>  <!-- end .news-grid-row -->                     
													</div> <!-- end .news-grid -->
												</div> <!-- end .container -->  
											</div> <!-- end .inner -->
										</div> <!-- end .section -->

										<div class="section Latest-news-section">
											<div class="container">
												<?php if($adverone): ?>
												<div class="ad-home1">
													<?php foreach($adverone as $row): ?>
													<div class="col-md-3 col-lg-12 col-xs-12" style="text-align: center;">
														<a href="<?php echo $row->link; ?>" target="_blank"><img src="<?php echo base_url('uploads/adver/'.$row->image); ?>"></a>
														</div>
														<?php endforeach; ?>
													</div>
													<?php endif; ?>
													<?php if($advertwo): ?>
													<div class="ad-home2">
														<?php foreach($advertwo as $row): ?>
														<div class="col-md-12 col-lg-3 col-xs-3" style="text-align: center;">
															<a href="<?php echo $row->link; ?>" target="_blank"><img src="<?php echo base_url('uploads/adver/'.$row->image); ?>"></a>
															</div>
															<?php endforeach; ?>
														</div>
														<?php endif; ?>
													</div>
												</div>

												<!-- Category Section -->
												<div class="section category-section solid-blue-bg">
													<div class="inner">
														<div class="container">
															<h1 class="light">Việc làm theo danh mục</h1>
															<div class="category-grid">                 
																<div class="category-row space-between items-center">
																	<?php foreach($category_home as $row) : ?>
																	<?php $input['where'] = array('career_id'=>$row->id); ?>
																	<?php $total_career = $this->recruitment_model->get_total($input); ?>
																	<?php $catname = $row->cat_name; ?>
																	<div class="item">
																		<a href="<?php echo base_url('viec-lam/'.$catname.'-d'.$row->id); ?>"> <img src="<?php echo public_url(); ?>/site/images/category-icon09.png" alt="" class="img-responsive"></a>
																			<h4><a href="<?php echo base_url('viec-lam/'.$catname.'-d'.$row->id); ?>"><?php echo $row->name; ?></a></h4>
																			<p class="light">( <?php echo $total_career; ?> ) Việc làm</p>
																		</div> <!-- end .item -->
																		<?php endforeach; ?>
																	</div> <!-- end .category-row -->

																</div>  <!-- end .category-grid -->         
															</div> <!-- end .container -->
														</div> <!-- end .inner --> 
													</div> <!-- end .section -->

											

<h1 class="section-title">Nhà tuyển dụng nổi bật</h1>
<section class="regular slider">
    <?php foreach($partners as $row): ?>
    <div>
      <img src="<?php echo base_url('uploads/partner/'.$row->image); ?>">
    </div>
    <?php endforeach; ?>
  </section>	

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 5,
        autoplay: true,
        slidesToScroll: 3
      });
      
    });
  </script>