
<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home panel</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Sửa tin tức</a>
				</li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Thông tin tin tức</h2>
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
							  <label class="control-label" for="">Danh mục tin</label>
							  <div class="controls">
								<select name="cat_id" class="span6">
								<option value="0">---Chọn danh mục---</option>
								<?php foreach ($list as $row): ?>
								<?php if(count($row->subs) > 0 ): ?>
								<optgroup label="<?php echo $row->name; ?>">
								<?php foreach($row->subs as $sub): ?>
								<option value="<?php echo $sub->id; ?>" <?php echo ($sub->id==$info->cat_id) ? "selected" : "" ?> ><?php echo $sub->name; ?></option>
								<?php endforeach; ?>
								</optgroup>
								<?php else: ?>
								<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $info->cat_id) ? "selected" : "" ?> ><?php echo $row->name; ?></option>
								<?php endif; ?>
								<?php endforeach; ?>
								
								</select>
								<div class="help-block"><?php echo form_error('cat_id'); ?></div>
							  </div>
							</div>
					
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tiêu đề </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="title" value="<?php echo $info->title; ?>" >
								<div class="help-block"><?php echo form_error('title'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">News-name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" disabled="disabled" name="news_name" value="<?php echo $info->news_name; ?>">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="">Mô tả ngắn </label>
							  <div class="controls">
								<textarea class="span6" name="description"><?php echo $info->description; ?></textarea>
								<div class="help-block"><?php echo form_error('description'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="">Chi tiết tin</label>
							  <div class="controls">
								<textarea class="span6" id="editor1" name="content"><?php echo $info->content; ?></textarea>
								<div class="help-block"><?php echo form_error('content'); ?></div>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="">Ảnh đại diện</label>
							  <div class="controls">
						<input class="" id="image" type="file" name="image" value="<?php echo $info->image; ?>">
						<img src="<?php echo base_url('uploads/news/'.$info->image) ?>" width="50" >
							  </div>
							</div>
				

							<div class="control-group">
							  <label class="control-label" for="">Trạng thái</label>
							  <div class="controls">
								<select name="status">
									<?php echo yes_no(1,$info->status); ?>
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