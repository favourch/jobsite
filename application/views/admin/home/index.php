			<!-- start: Content -->
			<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo admin_url('home'); ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

			<?php if(isset($message)) { $this->load->view('admin/message', $this->data); } ?>
			
				<div class="row-fluid">	

				<a class="quick-button metro yellow span2" href="<?php echo admin_url('product'); ?>">
					<i class="icon-group"></i>
					<p>Quản lý gói dịch vụ</p>
					<span class="badge">237</span>
				</a>
				<a class="quick-button metro blue span2" href="<?php echo admin_url('cart'); ?>">
					<i class="icon-shopping-cart"></i>
					<p>Đơn đặt dịch vụ</p>
					<span class="badge">13</span>
				</a>
				<a class="quick-button metro red span2">
					<i class="icon-comments-alt"></i>
					<p>Comments</p>
					<span class="badge">46</span>
				</a>
				
				<a class="quick-button metro green span2" href="<?php echo admin_url('adver'); ?>">
					<i class="icon-barcode"></i>
					<p>Quản lý quảng cáo</p>
				</a>
				<a class="quick-button metro pink span2" href="<?php echo admin_url('contact'); ?>">
					<i class="icon-envelope"></i>
					<p>Tin nhắn</p>
					<span class="badge"><?php echo $total_contact; ?></span>
				</a>
				<a class="quick-button metro black span2" href="<?php echo admin_url('support'); ?>">
					<i class="icon-calendar"></i>
					<p>Hỗ trợ trực tuyến</p>
				</a>
				
				<div class="clearfix"></div>
								
			</div><!--/row-->
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		

	
	<div class="clearfix"></div>
