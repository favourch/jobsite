
<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home panel</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Cấu hình website</a>
				</li>
			</ul>
		<?php if(isset($message)) { $this->load->view('admin/message', $this->data); } ?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Thông tin cấu hình</h2>
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
							  <label class="control-label" for="typeahead">Tiêu đề website</label>
							  <div class="controls">
						<input type="text" class="span6 typeahead" name="title" value="<?php echo $setting->title; ?>" >
								<div class="help-block"><?php echo form_error('title'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Hotline</label>
							  <div class="controls">
							<input type="text" class="span6 typeahead" name="phone" value="<?php echo $setting->phone; ?>">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="">Email nhận tin </label>
							  <div class="controls">
								<input type="text" class="span6" name="email" value="<?php echo $setting->email; ?>" >
								<div class="help-block"><?php echo form_error('email'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="">Địa chỉ</label>
							  <div class="controls">
								<input type="text" class="span6" name="address" value="<?php echo $setting->address; ?>" >
								<div class="help-block"><?php echo form_error('address'); ?></div>
							  </div>
							</div>
					
							<div class="control-group">
							  <label class="control-label" for="">Meta Description </label>
							  <div class="controls">
			<textarea class="span6" name="meta_desc" style="height: 100px;"><?php echo $setting->meta_desc; ?></textarea>
								<div class="help-block"><?php echo form_error('meta_desc'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="">Meta_keyword </label>
							  <div class="controls">
								<textarea class="span6" name="meta_keyword" style="height: 100px;"><?php echo $setting->meta_keyword; ?></textarea>
								<div class="help-block"><?php echo form_error('meta_keyword'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="">Thông tin chân trang</label>
							  <div class="controls">
							<textarea class="span6" id="editor1" name="footer"><?php echo $setting->footer; ?></textarea>
								<div class="help-block"><?php echo form_error('footer'); ?></div>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="">Ảnh logo</label>
							  <div class="controls">
						<input class="" id="image" type="file" name="image" value="<?php echo $setting->image; ?>">
						<img src="<?php echo base_url('uploads/logo/'.$setting->image); ?>" width="70">
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