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
				<li><a href="#">Quản lý menu</a></li>
			</ul>

			<?php if(isset($message)) { $this->load->view('admin/message', $this->data); } ?>

	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Danh sách menu</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>

					</div>
					<div class="box-content">
					<div class="thanh-xuly">
				<a href="<?php echo admin_url('menu/add'); ?>" class="btn btn-small btn-success"><i class="halflings-icon white plus"></i> Thêm mới</a>
				<a class="btn btn-small btn-danger"><i class="halflings-icon white trash"></i> Xóa tùy chọn</a>
					</div>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th><input type="checkbox" name="checkall" value=""></th>
								  <th>Tiêu đề menu</th>
								  <th>Trỏ đến danh mục tin</th>
								  <th>Trỏ đến danh mục sản phẩm</th>
								  <th>Thứ tự</th>
								  <th>Status</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php foreach($list as $row) : ?>
							<tr>
								<td><input type="checkbox" name="id[]" value="<?php echo $row->id ?>"></td>
								<td><?php echo $row->name; ?></td>
								<td class="center"><?php echo $row->link; ?></td>
								<td class="center"><?php echo $row->is_order; ?></td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
					<a class="btn btn-small btn-info" href="<?php echo admin_url('menu/edit/'.$row->id); ?>">
					<i class="halflings-icon white edit"></i>  
					</a>
					<a class="btn btn-small btn-danger" href="<?php echo admin_url('menu/del/'.$row->id); ?>" onclick="return check_del();">
					<i class="halflings-icon white trash"></i>  
					</a>
									
								</td>
							</tr>
						<?php endforeach; ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

</div>