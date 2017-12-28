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
					<a href="<?php echo admin_url('home'); ?>">Home Panel</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Quản lý nhà tuyển dụng</a></li>
			</ul>

			<?php if(isset($message)) { $this->load->view('admin/message', $this->data); } ?>

<div class="thanhtimkiem">
<form method="GET" action="<?php echo admin_url('company'); ?>">
<div class="span12">
<div style="float: left; padding-right: 15px;">
<div class="control-group">
<div class="controls">
<input class="input-xlarge" id="" type="text" name="company_name" placeholder="Lọc theo tên...">
</div>
</div>
</div>

<div style="float: left;">
<input type="submit" class="btn btn-small btn-inverse" value="Lọc">
<a class="btn btn-small btn-inverse" onclick="return goBack();">Reset</a>
</div>
</div>
</form>
</div>

	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Danh sách nhà tuyển dụng</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>

					</div>
					<div class="box-content">
					<div class="thanh-xuly">				
				<span class="list_action" id="list_action">
				<a class="btn btn-small btn-danger" onclick="return xacnhanDelete();" id="submit"><i class="halflings-icon white trash"></i> Xóa tùy chọn</a>
				</span>
					</div>
				<form name="theForm" id="theForm" action="<?php echo admin_url('company/delete_all'); ?>" method="post">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead class="filter">
							  <tr>
							  	  <th>
							  	  <input type="checkbox" name="allbox" id="allbox" onclick="return check_all();" ></th>
								  <th>Thông tin công ty</th>
								  <th>Người liên hệ</th>
								  <th>Ngày tạo</th>
								  <th>Tình trạng</th>
								  <th>Tùy chọn</th>
							  </tr>
						  </thead>   
						  <tbody class="list_item">
						 <?php foreach($list as $row) : ?>
						 	
							<tr class="row_<?php echo $row->id; ?>">
								<td><input type="checkbox" name="id[]" value="<?php echo $row->id ?>"></td>
								<td>
								<div style="float:left; padding-right: 10px;">
								<img src="<?php echo base_url('uploads/company/'.$row->logo_url) ?>" width="50">
								</div>
								<div style="float:left; ">
								<span style="font-weight: bold; color: #00CCCC;"><?php echo $row->company_name; ?></span><br>
								<span style="color: #666; font-size: 11px"><?php echo $row->company_address; ?></span><br>
								<span style="color: #666; font-size: 11px">Email : <?php echo $row->email; ?></span><br>
								<span style="color: #666; font-size: 11px">Điện thoại : <?php echo $row->company_phone; ?></span><br>
								</div>
								</td>
								<td class="center">
								<span style="font-size: 11px"><?php echo $row->company_contact; ?></span><br>
								<span style="font-size: 11px">Điện thoại : <?php echo $row->contact_phone; ?></span><br>
								<span style="font-size: 11px">Email : <?php echo $row->contact_email; ?></span><br>
								<span style="font-size: 11px">Chức vụ : <?php echo $row->contact_title; ?></span><br>
								</td>
								<td class="center"><?php echo int_to_date($row->created); ?> </td>
								<td class="center">
									<?php if($row->status==1): ?>
									<span class="label label-success">Đã kích hoạt</span>
								<?php endif; ?>
								<?php if($row->status==0): ?>
									<span class="label label-important">Chưa kích hoạt</span>
								<?php endif; ?>
								<?php if($row->status==2): ?>
									<span class="label label-warning">Khóa tài khoản</span>
								<?php endif; ?>
								</td>
								<td class="center"><a class="btn btn-small btn-info" href="<?php echo admin_url('company/view/'.$row->id); ?>">Xem tin đăng</a></td>
								<td class="center">
					<a class="btn btn-small btn-info" href="<?php echo admin_url('company/edit/'.$row->id); ?>">
					<i class="halflings-icon white edit"></i>  
					</a>
					<a class="btn btn-small btn-danger" href="<?php echo admin_url('company/del/'.$row->id); ?>" onclick="return check_del();">
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