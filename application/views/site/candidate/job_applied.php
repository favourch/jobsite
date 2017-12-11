		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="breadcrumb-menu flex items-center no-column">
						
						<div class="breadcrumb-info-dashboard">
							<h2><?php echo $user_info->full_name; ?></h2>
							<h4><?php echo $user_info->email; ?></h4>
						</div> <!-- end .candidate-info -->
					</div> <!-- end .breadcrumb-menu -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
			<!-- Candidate Dashboard -->
		<div class="section candidate-dashboard-content solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="candidate-dashboard-wrapper flex space-between no-wrap">

						<?php $this->load->view('site/candidate/left'); ?>

						<div class="right-side-content">
							<div class="tab-content candidate-dashboard">

						 <div id="notifications" class="tab-pane fade in active">
							        <h3 class="tab-pane-title">Việc làm đã ứng tuyển</h3>
							        <div class="notifications-list-wrapper">

							        	<?php foreach($listmapcandidate as $row): ?>
							        	<?php $companyinfo = $this->member_company_model->get_info($row->company_id); ?>
							        	<?php $jobinfo = $this->recruitment_model->get_info($row->recruitment_id); ?>
							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
			<img src="<?php echo base_url('uploads/company/'.$companyinfo->logo_url); ?>" alt="" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><b><a href="<?php echo base_url($jobinfo->cat_name.'-'.$jobinfo->id.'-jv'); ?>"><?php echo $jobinfo->title; ?></a></b> </p>
											<span class="company-name"><?php echo $companyinfo->company_name; ?></span>
												<p class="ultra-light">Ứng tuyển lúc : <?php echo int_to_date($row->apply_date); ?></p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->
							        <?php endforeach; ?>

							        	<div class="divider"></div>


							        </div> <!-- end .notifications-list-wrapper -->
						  						        
							    </div> <!-- end #notifications-tab -->



							</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->