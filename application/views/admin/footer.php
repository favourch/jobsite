<footer>
		<p>
			<span style="text-align:left;float:left">&copy; 2017 <a href="http://lienketso.com.vn" alt="Bootstrap_Metro_Dashboard">LienKetSo CMS</a></span>
			
		</p>

	</footer>

 <script type="text/javascript">
			//<![CDATA[
 var nvcms_url = "<?php echo public_url('admin'); ?>"
				// This call can be placed at any point after the
				// <textarea>, or inside a <head><script> in a
				// window.onload event handler.

				// Replace the <textarea id="editor"> with an CKEditor
				// instance, using default configurations.
				//CKEDITOR.config.height = 400;		
	var editor = CKEDITOR.replace( 'editor1', {
    height:400,
	filebrowserBrowseUrl : nvcms_url+ '/js/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : nvcms_url+ '/js/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : nvcms_url+ '/js/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : nvcms_url+ '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : nvcms_url+ '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : nvcms_url+ 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
				
				var editor = CKEDITOR.replace( 'editor2',
                {
					height: 200,
                    filebrowserBrowseUrl : nvcms_url+ '/js/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : nvcms_url+ '/js/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : nvcms_url+ '/js/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : nvcms_url+ '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : nvcms_url+ '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : nvcms_url+ 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});

var editor = CKEDITOR.replace( 'editor3',
                {
                    height: 400,
                    filebrowserBrowseUrl : nvcms_url+ '/js/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : nvcms_url+ '/js/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : nvcms_url+ '/js/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : nvcms_url+ '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : nvcms_url+ '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : nvcms_url+ 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});

var editor = CKEDITOR.replace( 'editor4',
                {
                    height: 400,
                    filebrowserBrowseUrl : nvcms_url+ '/js/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : nvcms_url+ '/js/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : nvcms_url+ '/js/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : nvcms_url+ '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : nvcms_url+ '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : nvcms_url+ 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
				
				CKFinder.setupCKEditor( editor, '../' );
				
</script> 
	
	<!-- start: JavaScript-->
	
	<script src="<?php echo public_url(); ?>admin/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo public_url(); ?>admin/js/jquery-migrate-1.0.0.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery-ui-1.10.0.custom.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.ui.touch-punch.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/modernizr.js"></script>
		<script src="<?php echo public_url(); ?>admin/js/bootstrap.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.cookie.js"></script>	
		<script src='<?php echo public_url(); ?>admin/js/fullcalendar.min.js'></script>	
		<!--
		<script src='<?php echo public_url(); ?>admin/js/jquery.dataTables.min.js'></script>
		-->
		<script src="<?php echo public_url(); ?>admin/js/excanvas.js"></script>
	<script src="<?php echo public_url(); ?>admin/js/jquery.flot.js"></script>
	<script src="<?php echo public_url(); ?>admin/js/jquery.flot.pie.js"></script>
	<script src="<?php echo public_url(); ?>admin/js/jquery.flot.stack.js"></script>
	<script src="<?php echo public_url(); ?>admin/js/jquery.flot.resize.min.js"></script>	
		<script src="<?php echo public_url(); ?>admin/js/jquery.chosen.min.js"></script>	
		<!--
		<script src="<?php echo public_url(); ?>admin/js/jquery.uniform.min.js"></script>	
			-->
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
		 <script type="text/javascript" src="<?php echo public_url()?>admin/js/custom_admin.js"></script> 
	<!-- end: JavaScript-->