		<!-- Post resume Section -->
		<div class="section post-resume-form-section solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<!-- multistep form -->
					<form action="" method="post" id="post-resume-form" class="post-resume-form multisteps-form" enctype="multipart/form-data">
					  	<fieldset>
						  	<h2 class="form-title text-center dark">ĐĂNG KÝ NHÀ TUYỂN DỤNG</h2>
						    <h3 class="step-title text-center dark">Hãy Tham Gia Cùng Hàng Ngàn Ứng Viên Đang Sử Dụng English Work Mỗi Ngày, việc tìm kiếm ứng viên trở lên dễ dàng hơn </h2>

					    	<div class="form-inner">
					    <h6>Đã là thành viên ? <a href="<?php echo base_url('companies/login') ?>">Đăng nhập</a></h6>

								<div class="divider"></div>

								<div class="form-fields-wrapper">
									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Email<sup>*</sup></p>
											<input type="text" id="email" name="email" placeholder="Email information" value="<?php echo set_value('email'); ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('email'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Mật khẩu<sup>*</sup></p>
										<input type="password" id="password" name="password" placeholder="Your password">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('password'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Xác nhận mật khẩu<sup>*</sup></p>
									<input type="password" id="repassword" name="repassword" placeholder="Password confirmation">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('repassword'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Tỉnh / Thành phố (Province/City)<sup>*</sup></p>
											<select name="city_id" style="width: 100%;">
												<option value="">---Chọn tỉnh/thành phố---</option>
												<?php foreach($thanhpho as $row): ?>
												<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('city_id'); ?></span>
										</div> <!-- end .form-group -->

										<div class="form-group">											
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Địa chỉ<sup>*</sup></p>
											<input type="text" id="company_address" name="company_address" placeholder="Address" value="<?php echo set_value('company_address'); ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_address'); ?></span>
										</div> <!-- end .form-group -->
									</div>

									<div class="form-group-wrapper space-between items-center">
										<input type="hidden" id="latitude" name="latitude" value="<?php echo set_value('latitude','0'); ?>" />
										<input type="hidden" id="longitude" name="longitude" value="<?php echo set_value('longitude','0'); ?>"/>
										<div id="map"></div>
									</div>
									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Tên công ty<sup>*</sup></p>
											<input type="text" id="company_name" name="company_name" placeholder="Company name" value="<?php echo set_value('company_name'); ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_name'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper flex space-between items-center">									
										<div class="form-group">
											<p class="label">Quy mô công ty (Company size)</p>
											<select name="company_size_id" style="width: 100%;">
												<option value="">---Chọn---</option>
												<?php foreach($companysize as $row): ?>
												<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Mô tả sơ lược về công ty</p>
											<textarea name="description" class="txtarea" placeholder="Company description"></textarea>
										</div> <!-- end .form-group -->

									</div>
										<div class="form-group-wrapper">
										<div class="form-group upload-company-logo">
											<p class="label">Logo <span>(Kích thước tối đa: 1MB)</span></p>
									    	<label for="company-logo-upload" class="flex space-between items-center no-column no-wrap">
									    	<span>Tải lên logo</span>
									    	<span><i class="ion-ios-folder-outline"></i>Chọn tệp</span>								    	
									    	</label>
										    <input type="file" name="logo_url" id="company-logo-upload">
										</div> <!-- end .form-group -->
									</div>
									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Website</p>
											<input type="text" id="website" name="website" placeholder="" value="<?php echo set_value('website'); ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('website'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Số điện thoại (Phone number)</p>
											<input type="text" id="company_phone" name="company_phone" placeholder="" value="<?php echo set_value('company_phone'); ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_phone'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper space-between items-center">
										<div class="form-group">
											<p class="label">Fax</p>
											<input type="text" id="company_fax" name="company_fax" placeholder="" value="<?php echo set_value('company_fax'); ?>" >
											<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_fax'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
								</div> <!-- end .form-fields-wrapper -->


				                <div class="divider"></div>

								<div class="form-fields-wrapper">
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Tên người liên hệ <sup>*</sup></p>
								<input type="text" id="company_contact" name="company_contact" placeholder="Contact name" value="<?php echo set_value('company_contact'); ?>" >	
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('company_contact'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Chức vụ người liên hệ<sup>*</sup></p>
											<input type="text" id="contact_title" name="contact_title" placeholder="Position" value="<?php echo set_value('contact_title'); ?>">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('contact_title'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Email người liên hệ <sup>*</sup></p>
								<input type="text" id="contact_email" name="contact_email" placeholder="Email contact" value="<?php echo set_value('contact_email'); ?>" >	
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('contact_email'); ?></span>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Điện thoại người liên hệ<sup>*</sup></p>
											<input type="text" id="contact_phone" name="contact_phone" placeholder="Contact phone" value="<?php echo set_value('contact_phone'); ?>">
								<span style="color: #c00; font-size: 12px;"><?php echo form_error('contact_phone'); ?></span>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

								</div> <!-- end .form-fields-wrapper -->

					    		<div class="button-wrapper text-center">
					    			<input type="submit" name="" class="button" value="Đăng ký nhà tuyển dụng">
					    		</div> <!-- end .button-wrapper -->

					    	</div> <!-- end .form-inner -->
					 	</fieldset>



					</form> <!-- end .job-post-form -->

				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
		<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
		height: 500px;
		width:100%;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
		  center: {lat: 21.0277644, lng: 105.8341598}
        });
        var geocoder = new google.maps.Geocoder();

        // document.getElementById('submit').addEventListener('click', function() {
        //   geocodeAddress(geocoder, map);
        // });
		document.getElementById('company_address').addEventListener('focusout', function() {
         
		  if($("#company_address").val().trim()!==""){
			geocodeAddress(geocoder, map);
		  }
		
        });
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('company_address').value;
        geocoder.geocode({'address': address}, function(results, status) {			
          if (status === 'OK') {
			$('#latitude').val(results[0].geometry.location.lat());
			$('#longitude').val(results[0].geometry.location.lng())

            resultsMap.setCenter(results[0].geometry.location);
		
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location,
			  title: results[0].address_components[0].long_name
            });
          } else {
           console.log(status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEi-pqCjdPIp1SL_h1L-ENH3FxQ4fLEf0&callback=initMap">
    </script>