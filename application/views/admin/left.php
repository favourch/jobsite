<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo base_url('admin') ?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Home Panel</span></a></li>	
						<li><a href="<?php echo admin_url('city'); ?>"><i class="icon-flag"></i><span class="hidden-tablet"> Quản lý địa điểm</span></a></li>
						<li>
						<li><a href="<?php echo admin_url('category'); ?>"><i class="icon-eye-open"></i><span class="hidden-tablet"> Danh mục giáo viên</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Cấu hình công việc</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo admin_url('job_type'); ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Loại công việc </span></a></li>
								<li><a class="submenu" href="<?php echo admin_url('level'); ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Cấp bậc</span></a></li>
							</ul>	
						</li>
						<li><a href="<?php echo admin_url('menu'); ?>"><i class="icon-tasks"></i><span class="hidden-tablet"> Menu</span></a></li>
						<!--
						
						<li><a href="<?php echo admin_url('product'); ?>"><i class="icon-dashboard"></i><span class="hidden-tablet"> Sản phẩm</span></a></li>
						-->
						<li><a href="<?php echo admin_url('catnews'); ?>"><i class="icon-align-justify"></i><span class="hidden-tablet"> Danh mục tin tức</span></a></li>
						<li><a href="<?php echo admin_url('news'); ?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> Tin tức</span></a></li>
						<!--
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Đơn hàng</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo admin_url('transaction'); ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Giao dịch </span></a></li>
								<li><a class="submenu" href="<?php echo admin_url('order'); ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Đơn hàng</span></a></li>
							</ul>	
						</li>
						-->
						<li><a href="<?php echo admin_url('slide'); ?>"><i class="icon-picture"></i><span class="hidden-tablet"> Slide</span></a></li>
						<li><a href="<?php echo admin_url('contact'); ?>"><i class="icon-envelope"></i><span class="hidden-tablet"> Liên hệ</span> <span class="label label-important"> <?php echo $total_contact; ?> </span></a> </li>

						<li><a href="<?php echo admin_url('setting'); ?>"><i class="icon-star"></i><span class="hidden-tablet"> Cấu hình</span></a></li>
						<li><a href="<?php echo admin_url('admin'); ?>"><i class="icon-lock"></i><span class="hidden-tablet"> Tài khoản quản trị</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>