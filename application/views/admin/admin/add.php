<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home panel</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Thêm quản trị viên</a>
				</li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Thông tin quản trị viên</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Họ và tên </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="name" value="<?php echo set_value('name'); ?>" >
								<div class="help-block"><?php echo form_error('name'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Username </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="username" <?php echo set_value('username'); ?> >
								<div class="help-block"><?php echo form_error('username'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Mật khẩu</label>
							  <div class="controls">
								<input type="password" class="span6 typeahead" name="password" >
								<div class="help-block"><?php echo form_error('password'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Nhập lại mật khẩu</label>
							  <div class="controls">
								<input type="password" class="span6 typeahead" name="repassword" >
								<div class="help-block"><?php echo form_error('repassword'); ?></div>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Địa chỉ</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="address" value="<?php echo set_value('address'); ?>" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Số điện thoại</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="phone" value="<?php echo set_value('phone'); ?>" >
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="date01">Ngày tạo</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Ảnh đại diện</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>    

							<div class="control-group">
							  <label class="control-label" for="date01">Permisson</label>
							  <div class="controls">
								<?php foreach($config_permission as $controller=>$action) : ?>
								<b><?php echo $controller; ?></b>
								<?php foreach($action as $actions) : ?>
							<input type="checkbox" name="permission[<?php echo $controller; ?>][]" value="<?php echo $actions; ?>"> <span><?php echo $actions; ?></span>
								<?php endforeach; ?>
								<br>
								<?php endforeach; ?>

							  </div>
							</div>      
				
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" value="Lưu thông tin">
							  <button type="reset" class="btn">Bỏ qua</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			</div>