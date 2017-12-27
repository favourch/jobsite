<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo base_url('admin') ?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Home Panel</span></a></li>	
						<li><a href="<?php echo admin_url('city'); ?>"><i class="icon-flag"></i><span class="hidden-tablet"> Quản lý địa điểm</span></a></li>
						<li>
						<li><a href="<?php echo admin_url('career'); ?>"><i class="icon-eye-open"></i><span class="hidden-tablet"> Danh mục việc làm</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Cấu hình công việc</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo admin_url('job_type'); ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Loại công việc </span></a></li>
								<li><a class="submenu" href="<?php echo admin_url('level'); ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Cấp bậc</span></a></li>
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Quản lý việc làm</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo admin_url('recruitment'); ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Danh sách việc làm </span></a></li>
								<li><a class="submenu" href="<?php echo admin_url('level'); ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Thống kê</span></a></li>
							</ul>	
						</li>
						<li><a href="<?php echo admin_url('candidate'); ?>"><i class="icon-user"></i><span class="hidden-tablet"> Ứng viên</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Nhà tuyển dụng</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo admin_url('company'); ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Danh sách công ty </span></a></li>
								<li><a class="submenu" href="<?php echo admin_url('level'); ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Thống kê</span></a></li>
							</ul>	
						</li>
						<li><a href="<?php echo admin_url('menu'); ?>"><i class="icon-tasks"></i><span class="hidden-tablet"> Menu</span></a></li>
						<!--
						
						<li><a href="<?php echo admin_url('product'); ?>"><i class="icon-dashboard"></i><span class="hidden-tablet"> Sản phẩm</span></a></li>
						-->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Quản lý tin tức</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo admin_url('catnews'); ?>"><i class="icon-align-justify"></i><span class="hidden-tablet"> Danh mục tin </span></a></li>
								<li><a class="submenu" href="<?php echo admin_url('news'); ?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> Bài viết</span></a></li>
							</ul>	
						</li>

						<li><a href="<?php echo admin_url('page'); ?>"><i class="icon-book"></i><span class="hidden-tablet"> Trang tin</span></a></li>
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
						<li><a href="<?php echo admin_url('partners'); ?>"><i class="icon-question-sign"></i><span class="hidden-tablet"> Đối tác & khách hàng</span></a></li>

						<li><a href="<?php echo admin_url('setting'); ?>"><i class="icon-cog"></i><span class="hidden-tablet"> Cấu hình</span></a></li>
						<li><a href="<?php echo admin_url('tags'); ?>"><i class="icon-tags"></i><span class="hidden-tablet"> Tags cloude</span></a></li>
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