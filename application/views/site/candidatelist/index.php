		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<p class="breadcrumb-menu">
						<a href="#0"><i class="ion-ios-home"></i></a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0">Danh sách ứng viên</a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0">Tất cả ứng viên</a>
					</p> <!-- end .breabdcrumb-menu -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

				<!-- Categories Icon Section -->
		<div class="section categories-icon-section solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<h2 class="section-title">Ứng viên mới nhất</h2>
						<div class="categories-icon">
							<div class="categories-icon-row">
								<?php foreach($dynamic as $row): ?>
								<?php $experience = $this->require_experience_model->get_info($row->experience_id); ?>
								<div class="listcandi col-lg-4">
								<a href="<?php echo base_url('candidatelist/view/'.$row->id); ?>">
									<div class="item-icon">
						<?php if($row->image!=''): ?>
						<img src="<?php echo base_url('uploads/candidate/'.$row->image); ?>" alt="">
					<?php else: ?>
						<img src="<?php echo public_url('site/images/userscandi.png'); ?>" alt="">
					<?php endif; ?>
									</div> <!-- end .icon -->
									<div class="item-text-content">
										<h4 class="dark category-icon-title"><?php echo $row->title; ?></h4>
										<p class="light category-icon-jobs"><?php echo $row->full_name; ?></p>
										<p class="category-icon-description">Kinh nghiệm : <span style="color:#fc205b; "><?php echo $experience->name; ?></span></p>
									</div> <!-- end .item-text -->
								</a> <!-- end .item -->
								</div>
							<?php endforeach; ?>
							</div> <!-- end .categories-icon-row -->
							<div class="spacer-sm"></div>
						</div> <!-- end .categories-icon -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->


		<!-- Categories List Section -->
		<div class="section categories-list-section">
			<div class="inner">
				<div class="container">
					<div class="categories-list-wrapper">
						<div class="categories-list">
							<div class="categories-list-heading">
								<h4 class="dark">TÌM HỒ SƠ ỨNG VIÊN THEO NGHÀNH NGHỀ</h4>
							</div> <!-- .categories-list-heading -->
							<div class="categories-columns-wrapper flex no-wrap space-between">

								<ul class="list-unstyled">
									<?php foreach($careerlist as $row): ?>
									<?php $input['where'] = array('career_id'=>$row->id); ?>
									<?php $total_candi = $this->member_candidate_model->get_total($input); ?>
									<li class="col-lg-3">
									<a href="<?php echo base_url('candidatelist/category/'.$row->id); ?>">
									<?php echo $row->name; ?> <span>( <?php echo $total_candi; ?> )</span></a></li>
								<?php endforeach; ?>
									
								</ul> <!-- end .categories-column -->
							</div> <!-- end .categories-columns-wrapper -->
						</div> <!-- end .categories-list -->

						<div class="spacer-md"></div>


					</div> <!-- end .categories-list-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->