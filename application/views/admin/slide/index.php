<script type="text/javascript">
	function check_del(){
		if (confirm("Bạn có thực sự muốn xóa [OK]:Yes [Cancel]:No?")) {
        return true;
    	}
    	else{ return false;}
		}

	(function($)
	{
	$(document).ready(function()
	{
		//xoa nhieu du lieu
		var $list_action 	= $('.list_action');//tim toi the co class = list_action
		$list_action.find('#submit').click(function(){ //tim toi the co id = submit,su kien click
			if(!confirm('Bạn chắc chắn muốn xóa tất cả dữ liệu ?'))
			{
				return false;
			}
			
			var ids = new Array();
			$('[name="id[]"]:checked').each(function()
			{
				ids.push($(this).val());
			});
			
			if (!ids.length) return false;
			
			//link xoa du lieu
		    var url  = $(this).attr('url');
		   
			//ajax để xóa
			$.ajax({
				url: url,
				type: 'POST',
				data : {'ids': ids},
				success: function()
				{
					$(ids).each(function(id, val)
					{
						//xoa cac the <tr> chua danh muc tung ung
						$('tr.row_'+val).fadeOut();			
					});
				}
				
			})
			return false;
		});
		
		

	});
	});
</script>

<div id="content" class="span10">
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo admin_url('home'); ?>">Home Panel</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Quản lý slide</a></li>
			</ul>

			<?php if(isset($message)) { $this->load->view('admin/message', $this->data); } ?>

<div class="thanhtimkiem">
<form method="GET" action="<?php echo admin_url('slide'); ?>">
<div class="span12">
<div style="float: left; padding-right: 15px;">
<div class="control-group">
<div class="controls">
<input class="input-xlarge" id="" type="text" name="name" placeholder="Lọc theo tiêu đề...">
</div>
</div>
</div>
<script type="text/javascript">
	function resetall(){
		window.location.href= <?php echo admin_url('news'); ?>
	}
</script>
<div style="float: left;">
<input type="submit" class="btn btn-small btn-inverse" value="Lọc ">
<a class="btn btn-small btn-inverse" href="javascript:void(0)" onclick="return resetall();">Reset</a>
</div>
</div>
</form>
</div>

	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Danh sách slide</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>

					</div>
					<div class="box-content">
					<div class="thanh-xuly">
				<a href="<?php echo admin_url('slide/add'); ?>" class="btn btn-small btn-success"><i class="halflings-icon white plus"></i> Thêm mới</a>
				
				<span class="list_action" id="list_action">
				<a class="btn btn-small btn-danger" url="<?php echo admin_url('slide/delete_all')?>" id="submit" href="#submit"><i class="halflings-icon white trash"></i> Xóa tùy chọn</a>
				</span>

					</div>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead class="filter">
							  <tr>
							  	  <th><input type="checkbox" name="titleCheck" id="titleCheck" ></th>
								  <th>Tiêu đề</th>
								  <th>Hình ảnh</th>
								  <th>Thứ tự</th>
								  <th>Status</th>
								  <th>Cấu hình</th>
							  </tr>
						  </thead>   
						  <tbody class="list_item">
						 <?php foreach($list as $row) : ?>
							<tr class="row_<?php echo $row->id; ?>">
								<td><input type="checkbox" id="filter_id" name="id[]" value="<?php echo $row->id ?>"></td>
								<td><?php echo $row->name ?></td>
								<td class="center"><img src="<?php echo base_url('uploads/slide/'.$row->image) ?>" width="70"></td>
								<td><?php echo $row->is_order ?></td>
								<td class="center">
									<?php if($row->status==1): ?>
									<span class="label label-success">Actived</span>
								<?php else: ?>
									<span class="label label-important">Offline</span>
								<?php endif; ?>
								</td>
								<td class="center">
					<a class="btn btn-small btn-info" href="<?php echo admin_url('slide/edit/'.$row->id); ?>">
					<i class="halflings-icon white edit"></i>  
					</a>
					<a class="btn btn-small btn-danger" href="<?php echo admin_url('slide/del/'.$row->id); ?>" onclick="return check_del();">
					<i class="halflings-icon white trash"></i>  
					</a>
									
								</td>
							</tr>
						<?php endforeach; ?>
						  </tbody>
					  </table>  
					  <div class="span12 center">
					  <div class="pagination">
					  <?php echo $this->pagination->create_links(); ?>
					  </div>
					 </div>          
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

</div>