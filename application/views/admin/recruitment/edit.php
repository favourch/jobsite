<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home panel</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Cập nhật việc làm</a>
				</li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Thông tin việc làm</h2>
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
							  <label class="control-label" for="typeahead">Tiêu đề </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="title" value="<?php echo $info->title; ?>" >
								<div class="help-block"><?php echo form_error('title'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Cat-name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="cat_name" value="<?php echo $info->cat_name; ?>" >
							  </div>
							</div>   
							<div class="control-group">
							  <label class="control-label" for="">Mô tả công việc </label>
							  <div class="controls">
								<textarea class="span6" name="content" id="editor2"><?php echo $info->content; ?></textarea>
								<div class="help-block"><?php echo form_error('content'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="">Yêu cầu công việc</label>
							  <div class="controls">
								<textarea class="span6" name="job_requirement" id="editor1"><?php echo $info->job_requirement; ?></textarea>
								<div class="help-block"><?php echo form_error('job_requirement'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="">Quyền lợi được hưởng</label>
							  <div class="controls">
								<textarea class="span6" name="benefit" id="editor3"><?php echo $info->benefit; ?></textarea>
								<div class="help-block"><?php echo form_error('benefit'); ?></div>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="">Yêu cầu hồ sơ</label>
							  <div class="controls">
							<textarea class="span6" name="profile" id="editor4"><?php echo $info->profile; ?></textarea>
								<div class="help-block"><?php echo form_error('profile'); ?></div>
							  </div>
							</div>
							  <div class="control-group">
								<label class="control-label" for="selectError">Ngành nghề</label>
								<div class="controls">
								  <select id="selectError" name="career_id" data-rel="chosen">
								  <option value="0">---Vui lòng chọn---</option>
									<?php foreach($listcareer as $row): ?>
									<option value="<?php echo $row->id; ?>" <?php echo ($row->id==$info->career_id) ? "selected" : ""; ?> ><?php echo $row->name; ?></option>
								<?php endforeach; ?>
								  </select>
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="selectCity">Địa điểm làm việc</label>
								<div class="controls">
								  <select id="selectCity" name="city_id" data-rel="chosen">
								  <option value="0">---Vui lòng chọn---</option>
									<?php foreach($listcity as $row): ?>
									<option value="<?php echo $row->id; ?>" <?php echo ($row->id==$info->city_id) ? "selected" : ""; ?> ><?php echo $row->name; ?></option>
								<?php endforeach; ?>
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="">Trạng thái</label>
							  <div class="controls">
								<select name="status">
									<?php echo get_status(1,$info->status); ?>
								</select>
								
							  </div>
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