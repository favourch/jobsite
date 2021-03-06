<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home panel</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Sửa thông tin ứng viên</a>
				</li>
			</ul>          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Thông tin chung</h2>
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
							  <label class="control-label" for="typeahead">Họ và tên <sup>*</sup></label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="full_name" value="<?php echo $info->full_name; ?>" >
								<div class="help-block"><?php echo form_error('full_name'); ?></div>
							  </div>

								<div class="control-group">
							  <label class="control-label" for="typeahead">Ngày sinh <sup>*</sup></label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="birthday" value="<?php echo int_to_date($info->birthday); ?>" >
								<div class="help-block"><?php echo form_error('birthday'); ?></div>
							  </div>

							</div>					
							<div class="control-group">
							  <label class="control-label" for="fileInput">Ảnh đại diện</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>  
							<div class="control-group">
							  <label class="control-label">Giới tính<sup>*</sup></label>
							  <div class="controls">
								<label class=" control-label">
									<input type="radio" name="gender" value="0" <?php if ($info->gender==0) echo "checked";?>>Nữ									
								</label>
								<label class=" control-label">
									<input type="radio" name="gender" value="1" <?php if ($info->gender==1) echo "checked";?>>Nam
								</label>
								<label class=" control-label">
									<input type="radio" name="gender" value="3" <?php if ($info->gender==3) echo "checked";?>>Khác
								</label>
							  </div>
							</div>
							<div class="control-group">
							<label class="control-label">Thành phố<sup>*</sup></label>
							<div class="controls">
							<select name="city">											
												<?php foreach($lst_city as $row): ?>
												<option value="<?php echo $row->id; ?>" <?php if ($info->city_id==$row->id) echo "selected";?>><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
							</div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Địa chỉ<sup>*</sup></label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="address" value="<?php echo $info->address; ?>" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Số điện thoại<sup>*</sup></label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="phone" value="<?php echo $info->phone; ?>" >
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Giới thiệu bản thân</label>
							  <div class="controls">
								<textarea class="form-control span6" rows="5" id="description" name="description"><?php echo $info->description; ?></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Ngày sửa</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="date01" value="<?php echo date_format(new DateTime($info->modified_date),'d/m/Y'); ?>" readonly="true">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Ngày tạo</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="date01" value="<?php echo date_format(new DateTime($info->created_date),'d/m/Y'); ?>" readonly="true">
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