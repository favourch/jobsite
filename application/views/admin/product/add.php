
<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home panel</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Thêm sản phẩm</a>
				</li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Thông tin sản phẩm</h2>
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
							  <label class="control-label" for="">Danh mục sản phẩm</label>
							  <div class="controls">
								<select name="category_id" class="span6">
								<option value="0">---Chọn danh mục---</option>
								<?php foreach ($list as $row): ?>
								<?php if(count($row->subs) > 0 ): ?>
								<optgroup label="<?php echo $row->name; ?>">
								<?php foreach($row->subs as $sub): ?>
								<option value="<?php echo $sub->id; ?>" <?php echo ($this->input->get('category_id') == $sub->id) ? "selected" : "" ?> ><?php echo $sub->name; ?></option>
								<?php endforeach; ?>
								</optgroup>
								<?php else: ?>
								<option value="<?php echo $row->id; ?>" <?php echo ($this->input->get('category_id') == $row->id) ? "selected" : "" ?> ><?php echo $row->name; ?></option>
								<?php endif; ?>
								<?php endforeach; ?>
								
								</select>
								<div class="help-block"><?php echo form_error('category_id'); ?></div>
							  </div>
							</div>
					
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tên sản phẩm </label>
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
							  <label class="control-label" for="">Giá sản phẩm </label>
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
							  <label class="control-label" for="">Mô tả sản phẩm </label>
							  <div class="controls">
								<textarea class="span6" name="intro"><?php echo set_value('intro'); ?></textarea>
								<div class="help-block"><?php echo form_error('intro'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="">Chi tiết sản phẩm</label>
							  <div class="controls">
								<textarea class="span6" id="editor1" name="content"><?php echo set_value('content'); ?></textarea>
								<div class="help-block"><?php echo form_error('content'); ?></div>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="">Ảnh sản phẩm</label>
							  <div class="controls">
						<input class="" id="image" type="file" name="image" value="<?php echo set_value('image'); ?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="">Ảnh kèm theo</label>
							  <div class="controls">
						<input class="" id="image_list" type="file" multiple="" name="image_list[]" value="<?php echo set_value('image_list'); ?>">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="">Trạng thái</label>
							  <div class="controls">
								<select name="is_online">
									<?php echo yes_no(1,0); ?>
								</select>
								
							  </div>
							</div> 
							<div class="control-group">
							  <label class="control-label" for="">Sản phẩm hot</label>
							  <div class="controls">
								<select name="is_hot">
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