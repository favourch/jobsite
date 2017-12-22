
<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home panel</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Thêm sản dịch vụ</a>
				</li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Thông tin dịch vụ</h2>
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
							  <label class="control-label" for="typeahead">Tên dịch vụ </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="name" value="<?php echo set_value('name'); ?>" >
								<div class="help-block"><?php echo form_error('name'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Cat-name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" disabled="disabled" name="cat_name" value="<?php echo set_value('cat_name'); ?>">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="">Giá dịch vụ </label>
							  <div class="controls">
								<input type="text" class="span6" name="price" onkeyup="this.value=FormatNumber(this.value);" value="<?php echo set_value('price'); ?>" >
								<div class="help-block"><?php echo form_error('price'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="">Giảm giá ( % )</label>
							  <div class="controls">
								<input type="text" class="span6" name="discount" value="<?php echo set_value('discount'); ?>" >
								<div class="help-block"><?php echo form_error('discount'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="">Điểm cộng</label>
							  <div class="controls">
								<input type="text" class="span6" name="scores" value="<?php echo set_value('scores'); ?>" >
								<div class="help-block"><?php echo form_error('scores'); ?></div>
							  </div>
							</div>
					
							<div class="control-group">
							  <label class="control-label" for="">Mô tả sản phẩm </label>
							  <div class="controls">
								<textarea class="span6" name="intro" id="editor1"><?php echo set_value('intro'); ?></textarea>
								<div class="help-block"><?php echo form_error('intro'); ?></div>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="">Trạng thái</label>
							  <div class="controls">
								<select name="status">
									<?php echo yes_no(1,0); ?>
								</select>
								
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