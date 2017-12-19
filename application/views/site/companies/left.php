
						<div class="left-sidebar-menu">							
							<ul class="nav nav-pills nav-stacked">
								<li class="heading">CÀI ĐẶT TÀI KHOẢN</li>
							    <li><a href="<?php echo base_url('nha-tuyen-dung'); ?>">Thông tin tài khoản</a></li>
							    <li><a href="<?php echo base_url('nha-tuyen-dung/cap-nhat-thong-tin'); ?>">Cập nhật thông tin</a></li>
							    <li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications-employer">Tin nhắn</a> <span class="notification-count">2</span></li>

							    <li class="nav-divider"></li>
							   	<li class="heading">QUẢN LÝ TUYỂN DỤNG</li>
						<li><a href="<?php echo base_url('nha-tuyen-dung/dang-tin'); ?>">Đăng tin tuyển dụng mới</a></li>
							   <li><a href="<?php echo base_url('nha-tuyen-dung/danh-sach-tin-dang'); ?>">Tuyển dụng đã đăng</a></li>
							    <li class="nav-divider"></li>
							    <li class="heading">QUẢN LÝ HỒ SƠ</li>
							    <li><a href="<?php echo base_url('nha-tuyen-dung/tim-ung-vien'); ?>">Tìm ứng viên</a></li>
								<li><a href="<?php echo base_url('nha-tuyen-dung/ho-so-da-luu'); ?>">Hồ sơ đã lưu</a></li>
							   <li><a href="<?php echo base_url('nha-tuyen-dung/ung-vien-nop-ho-so'); ?>">Ứng viên nộp hồ sơ</a></li>
							    <li class="nav-divider"></li>
							    <li><a href="<?php echo base_url('nha-tuyen-dung/doi-mat-khau'); ?>">Đổi mật khẩu</a></li>
							    <li><a href="<?php echo base_url('companies/logout'); ?>">Đăng xuất</a></li>
							    <li class="nav-divider"></li>
								<li class="heading">HOTLINE HỖ TRỢ NHÀ TUYỂN DỤNG</li>
								<?php foreach($supportlist as $row): ?>
							    <li><span style="font-size: 13px;"><?php echo $row->name; ?></span> <span style="font-size: 13px; color: #1790d4; float: right;"><?php echo $row->phone; ?></span></li>
							<?php endforeach; ?>
							</ul>
						</div> <!-- end .left-sidebar-menu -->