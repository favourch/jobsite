<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home panel</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Sửa menu</a>
				</li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Thông tin menu</h2>
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
							  <label class="control-label" for="typeahead">Tên menu </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="name" value="<?php echo $menu->name; ?>" >
								<div class="help-block"><?php echo form_error('name'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Menu cha </label>
							  <div class="controls">
								<select name="parent" class="span6 typeahead">
								<option value="0">Là danh mục cha</option>
								<?php foreach($listmn as $row): ?>
								<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $menu->parent) ? "selected" : ""; ?> ><?php echo $row->name; ?></option>
							<?php endforeach; ?>
								</select>
								<div class="help-block"><?php echo form_error('parent'); ?></div>
							  </div>
							</div>
								<div class="control-group">
							  <label class="control-label" for="typeahead">Danh mục sản phẩm</label>
							  <div class="controls">
								<select name="category_id" class="span6 typeahead">
								<option value="0">Không trỏ đến</option>
								<?php foreach($listcategory as $row) : ?>
								<option value="<?php echo $row->id; ?>" <?php echo ($row->id==$menu->category_id) ? "selected" : ""; ?> ><?php echo $row->name; ?></option>
								<?php endforeach; ?>
								</select>
								<div class="help-block"><?php echo form_error('category_id'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Danh mục tin tức</label>
							  <div class="controls">
								<select name="cat_id" class="span6 typeahead">
								<option value="0">Không trỏ đến</option>
								<?php foreach($listcatnews as $row) : ?>
								<option value="<?php echo $row->id; ?>" <?php echo ($row->id==$menu->cat_id) ? "selected" : ""; ?> ><?php echo $row->name; ?></option>
							<?php endforeach; ?>
								</select>
								<div class="help-block"><?php echo form_error('cat_id'); ?></div>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Link</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="link" value="<?php echo $menu->link; ?>" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Thứ tự</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="is_order" value="<?php echo $menu->is_order; ?>" >
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