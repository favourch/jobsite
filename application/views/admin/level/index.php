<script type="text/javascript">
	function check_del(){
		if (confirm("Bạn có thực sự muốn xóa [OK]:Yes [Cancel]:No?")) {
        return true;
    	}
    	else{ return false;}
		}

		function check_all() {
			//alert('fuck');
	 var fmobj = document.theForm;
	 for (var i=0;i<fmobj.elements.length;i++) {
		 var e = fmobj.elements[i];
		 if ((e.name != 'allbox') && (e.type=='checkbox') && (!e.disabled)) {
			 e.checked = fmobj.allbox.checked;
		 }
	 }
	 return true;
	}

	 function xacnhanDelete(){
	var total = 0;
	var fmobj = document.theForm;
	for (var i=0;i<fmobj.elements.length;i++) {
	 var e = fmobj.elements[i];
	 if ((e.name != 'allbox') && (e.type=='checkbox') && (!e.disabled)) {
		 if (e.checked) total++;
	 }
	}
	if (total==0){ 
		alert('Chưa có đối tượng nào được chọn!');
		return false;
	}
   if (confirm("Bạn có thực sự muốn xóa [OK]:Yes [Cancel]:No?")) {
		document.theForm.submit();
		return true;
	}
   }

</script>

<div id="content" class="span10">
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo admin_url('home'); ?>">Home Panel</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Quản lý cấp bậc</a></li>
			</ul>

			<?php if(isset($message)) { $this->load->view('admin/message', $this->data); } ?>

<div class="thanhtimkiem">
<form method="GET" action="<?php echo admin_url('level'); ?>">
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
		window.location.href= <?php echo admin_url('level'); ?>
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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Danh sách cấp bậc</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>

					</div>
					<div class="box-content">
					<div class="thanh-xuly">
				<a href="<?php echo admin_url('level/add'); ?>" class="btn btn-small btn-success"><i class="halflings-icon white plus"></i> Thêm mới</a>
				
				<span class="" id="">
				<a class="btn btn-small btn-danger" id="submit" onclick="return xacnhanDelete();" ><i class="halflings-icon white trash"></i> Xóa tùy chọn</a>
				</span>

					</div>

					<form name="theForm" id="theForm" action="<?php echo admin_url('level/delete_all')?>" method="post">
						<table class="table table-striped table-bordered bootstrap-datatable ">
						  <thead class="filter">
							  <tr>
							  	  <th style="width: 5%"> 
						<input type="checkbox" name="allbox" onClick="return check_all();" id="allbox" value="Chọn hết"/> 
							  	  </th>
								  <th>Tiêu đề</th>
								  <th style="width: 10%">Trạng thái</th>
								  <th style="width: 15%">Tùy chọn</th>
							  </tr>
						  </thead>   
						  <tbody class="list_item">
						 <?php foreach($list as $row) : ?>
							<tr class="row_<?php echo $row->id; ?>">
								<td><input type="checkbox" id="" name="id[]" value="<?php echo $row->id ?>"></td>
								<td><?php echo $row->name ?></td>
								<td class="center">
									<?php if($row->status==1): ?>
									<span class="label label-success">Actived</span>
								<?php else: ?>
									<span class="label label-important">Offline</span>
								<?php endif; ?>
								</td>
								<td class="center">
					<a class="btn btn-small btn-info" href="<?php echo admin_url('level/edit/'.$row->id); ?>">
					<i class="halflings-icon white edit"></i>  
					</a>
					<a class="btn btn-small btn-danger" href="<?php echo admin_url('level/del/'.$row->id); ?>" onclick="return check_del();">
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