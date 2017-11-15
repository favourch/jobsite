<html>
<head>
	<?php $this->load->view('admin/head'); ?>
</head>
<body>
			<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Login to your account</h2>
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
							</div>
							
							<span style="color: #c00"><?php echo form_error('login'); ?></span>

							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
<!-- start: JavaScript-->

	<script src="<?php echo public_url(); ?>admin/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo public_url(); ?>admin/js/jquery-migrate-1.0.0.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery-ui-1.10.0.custom.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.ui.touch-punch.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/modernizr.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/bootstrap.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.cookie.js"></script>
		<script src='<?php echo public_url(); ?>admin/js/fullcalendar.min.js'></script>	
		<script src='<?php echo public_url(); ?>admin/js/jquery.dataTables.min.js'></script>
		<script src="<?php echo public_url(); ?>admin/js/excanvas.js"></script>
	<script src="<?php echo public_url(); ?>admin/js/jquery.flot.js"></script>
	<script src="<?php echo public_url(); ?>admin/js/jquery.flot.pie.js"></script>
	<script src="<?php echo public_url(); ?>admin/js/jquery.flot.stack.js"></script>
	<script src="<?php echo public_url(); ?>admin/js/jquery.flot.resize.min.js"></script>
		<script src="<?php echo public_url(); ?>admin/js/jquery.chosen.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.uniform.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.cleditor.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.noty.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.elfinder.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.raty.min.js"></script>
		<script src="<?php echo public_url(); ?>admin/js/jquery.iphone.toggle.js"></script>
		<script src="<?php echo public_url(); ?>admin/js/jquery.uploadify-3.1.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.gritter.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.imagesloaded.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.masonry.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.knob.modified.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.sparkline.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/counter.js"></script>
		<script src="<?php echo public_url(); ?>admin/js/retina.js"></script>
		<script src="<?php echo public_url(); ?>admin/js/custom.js"></script>
	<!-- end: JavaScript-->

</body>
</html>
