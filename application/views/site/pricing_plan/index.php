<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<p class="breadcrumb-menu"><a href="<?php echo base_url(); ?>"><i class="ion-ios-home"></i></a><i class="ion-ios-arrow-right arrow-right"></i><a href="#0">Bảng giá tuyển dụng</a></p>
					<h2 class="breadcrumb-title">Đăng ký gói dịch vụ</h2>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
		<!-- Pricing Plans Section -->
		<div class="section pricing-plans solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="pricing-plans-row flex space-between no-wrap items-center text-center">
						<?php foreach($planlist as $row): ?>
						<div class="pricing-plan">
							<h6 class="title"><?php echo $row->name; ?></h6>
							<div class="price">
								<div class="bg-circle"></div>
								<h2 class="price-text"><?php echo number_format($row->price); ?><sub>/ vnđ</sub></h2>
							</div> <!-- end .price -->
							
	<p>Số điểm : <span style="font-weight: bold; color: #c00;"><?php echo $row->scores; ?></p>
							
							<p><?php echo $row->intro; ?></p>
							<br>
							 <!-- end .features-lists -->
							<a href="<?php echo base_url('cart/add/'.$row->id); ?>" class="button">Đăng ký</a>
						</div> <!-- end .pricing-plan -->
						<div class="spacer-xs-m"></div>
					<?php endforeach; ?>
	
					</div> <!-- end .pricing-plans-row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->