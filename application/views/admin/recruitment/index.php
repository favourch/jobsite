<script type="text/javascript">
	function check_del(){
		if (confirm("Bạn có thực sự muốn xóa [OK]:Yes [Cancel]:No?")) {
        return true;
    	}
    	else{ return false;}
	}

</script>

<div id="content" class="span10">
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home Panel</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Quản lý việc làm</a></li>
			</ul>

			<?php if(isset($message)) { $this->load->view('admin/message', $this->data); } ?>

	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Danh sách việc làm</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>

					</div>
					<div class="box-content">
					<div class="thanh-xuly">
				<a href="<?php echo admin_url('recruitment/add'); ?>" class="btn btn-small btn-success"><i class="halflings-icon white plus"></i> Thêm mới</a>
				<a class="btn btn-small btn-danger" onclick="return xacnhanDelete();"><i class="halflings-icon white trash"></i> Xóa tùy chọn</a>
					</div>
				<form name="theForm" id="theForm" action="<?php echo admin_url('recruitment/delete_all'); ?>" method="post">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th><input type="checkbox" name="allbox" id="allbox" onclick="return check_all();" value=""></th>
								  <th>Thông tin việc làm</th>
								  <th>Ngày cập nhật</th>
								  <th>Số lượng tuyển</th>
								  <th>Lượt xem</th>
								  <th>Trạng thái</th>
							  </tr>
						  </thead>   
						  <tbody>
						 <?php foreach($list as $row) : ?>
						 <?php $company = $this->member_company_model->get_info($row->company_id); ?>
							<tr>
								<td><input type="checkbox" name="id[]" value="<?php echo $row->id ?>"></td>
								<td>
								<div style="float:left; padding-right: 10px;">
								<img src="<?php echo base_url('uploads/company/'.$company->logo_url); ?>" width="50">
								</div>

								<div style="float: left;">
								<span style="color:#000;"><?php echo $row->title; ?></span><br>
							<span style="color:#666; font-size: 11px;"><?php echo $company->company_name; ?></span><br>
							<span style="color:#666; font-size: 11px;"><?php echo $company->company_address; ?></span><br>
								</div>
									
								</td>
								<td class="center"><?php echo int_to_date($row->start_date); ?></td>
								<td class="center"><?php echo $row->amount; ?></td>
								<td class="center"><?php echo $row->view; ?></td>
								<td class="center">
									<?php if($row->status==1): ?>
									<span class="label label-success">Đã phê duyệt</span>
								<?php endif; ?>
								<?php if($row->status==0): ?>
									<span class="label">Chưa phê duyệt</span>
								<?php endif; ?>
								<?php if($row->status==2): ?>
									<span class="label label-important">Việc làm hot</span>
								<?php endif; ?>
								<?php if($row->status==3): ?>
									<span class="label label-warning">Việc làm gợi ý</span>
								<?php endif; ?>
								</td>
								<td class="center">
					<a class="btn btn-small btn-info" href="<?php echo admin_url('recruitment/edit/'.$row->id); ?>">
					<i class="halflings-icon white edit"></i>  
					</a>
					<a class="btn btn-small btn-danger" href="<?php echo admin_url('recruitment/del/'.$row->id); ?>" onclick="return check_del();">
					<i class="halflings-icon white trash"></i>  
					</a>
									
					</td>
					</tr>
					<?php endforeach; ?>

						  </tbody>
					  </table>  
					  </form> 
					  <div class="span12 center">
					  <div class="pagination">
					  <?php echo $this->pagination->create_links(); ?>
					  </div>
					 </div>       
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

</div>