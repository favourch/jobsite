			<!-- start: Content -->
			<div id="content" class="span10">
			
						
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo admin_url('home'); ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Quản lý tin đăng công ty</a></li>
			</ul>

			<div class="row-fluid">
				
				<div class="span7">
					<h1>Danh sách việc làm <?php echo $info->company_name; ?></h1>
					
					<ul class="messagesList">
						<?php foreach($listrecruitment as $row): ?>
						<li>
							<span class="title">
							<?php if($row->status==0): ?>
							<span class="label label-important">Chưa phê duyệt</span> 
						<?php endif; ?>
						<?php if($row->status==1): ?>
							<span class="label label-success">Đã phê duyệt</span> 
						<?php endif; ?>
						<?php if($row->status==2): ?>
							<span class="label label-warning">Việc làm hot</span> 
						<?php endif; ?>
						<?php if($row->status==3): ?>
							<span class="label label-info">Việc làm gợi ý</span> 
						<?php endif; ?>
							<?php echo $row->title; ?> ( <?php echo int_to_date($row->start_date); ?> )</span>

							<span class="quickMenu">
							<a href="<?php echo admin_url('recruitment/edit/'.$row->id); ?>" class="icon-edit"><i></i></a>
							<a href="<?php echo admin_url('company/del_job/'.$row->id); ?>" onclick="return check_del();" class="icon-trash"><i></i></a>
									</span>
						</li>
					<?php endforeach; ?>
						
	<script type="text/javascript">
	function check_del(){
		if (confirm("Bạn có thực sự muốn xóa [OK]:Yes [Cancel]:No?")) {
        return true;
    	}
    	else{ return false;}
	}

</script>
					</ul>
						
				</div>
				<div class="span5 noMarginLeft">
					
					<div class="message dark">
						
						<div class="header">
							<h1>Lịch sử giao dịch</h1>
							<div class="from"><i class="halflings-icon user"></i> <b>Dennis Ji</b> / jiguofei@msn.com</div>
							<div class="date"><i class="halflings-icon time"></i> Today, <b>3:47 PM</b></div>
							
							<div class="menu"></div>
							
						</div>
						
						
						
						<div class="attachments">
							<ul>
								<li>
									<span class="label label-important">zip</span> <b>bootstrap.zip</b> <i>(2,5MB)</i>
									<span class="quickMenu">
										<a href="#" class="glyphicons search"><i></i></a>
										<a href="#" class="glyphicons share"><i></i></a>
										<a href="#" class="glyphicons cloud-download"><i></i></a>
									</span>
								</li>
								<li>
									<span class="label label-info">txt</span> <b>readme.txt</b> <i>(7KB)</i>
									<span class="quickMenu">
										<a href="#" class="glyphicons search"><i></i></a>
										<a href="#" class="glyphicons share"><i></i></a>
										<a href="#" class="glyphicons cloud-download"><i></i></a>
									</span>
								</li>
								<li>
									<span class="label label-success">xls</span> <b>spreadsheet.xls</b> <i>(984KB)</i>
									<span class="quickMenu">
										<a href="#" class="glyphicons search"><i></i></a>
										<a href="#" class="glyphicons share"><i></i></a>
										<a href="#" class="glyphicons cloud-download"><i></i></a>
									</span>
								</li>
							</ul>		
						</div>
						
					
						
					</div>	
					
				</div>
						
			</div>
			
       

	</div><!--/.fluid-container-->