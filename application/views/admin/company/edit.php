
<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo admin_url('home'); ?>">Home panel</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Sửa thông tin công ty</a>
				</li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Thông tin công ty</h2>
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
							  <label class="control-label" for="typeahead">Tên công ty</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="company_name" value="<?php echo $info->company_name; ?>" >
								<div class="help-block"><?php echo form_error('company_name'); ?></div>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Email đăng nhập</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="email" value="<?php echo $info->email; ?>" >
								<div class="help-block"><?php echo form_error('email'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Mật khẩu</label>
							  <div class="controls">
								<input type="password" class="span6 typeahead" name="password" placeholder="Nhập vào đây nếu muốn đổi mật khẩu" >
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
							  <label class="control-label" for="">Mô tả công ty</label>
							  <div class="controls">
								<textarea class="span6" name="description"><?php echo $info->description; ?></textarea>
								<div class="help-block"><?php echo form_error('description'); ?></div>
							  </div>
							</div>
		
							<div class="control-group">
							  <label class="control-label" for="">Logo</label>
							  <div class="controls">
						<input class="" id="image" type="file" name="logo_url" value="<?php echo $info->logo_url; ?>">
						<img src="<?php echo base_url('uploads/company/'.$info->logo_url) ?>" width="50" >
							  </div>
							</div>
				

							<div class="control-group">
							  <label class="control-label" for="">Trạng thái</label>
							  <div class="controls">
								<select name="status">
									<?php echo get_company_status(1,$info->status); ?>
								</select>
								
							  </div>
							</div>    
							<div class="control-group">
               
                </div> 
                          

							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" value="Lưu thông tin">
							  <button type="reset" class="btn" onclick="return goBack();">Bỏ qua</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			</div>

