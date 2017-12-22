	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo public_url();?>/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo public_url();?>/admin/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo public_url();?>/admin/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo public_url();?>/admin/css/style-responsive.css" rel="stylesheet">
	<script language="javascript" src="<?php echo public_url();?>/admin/js/ckeditor/ckeditor.js"></script>
	<!-- end: CSS -->
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->	
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo public_url();?>/admin/img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(<?php echo public_url();?>/admin/img/bg-login.jpg) !important; }
		</style>
<script type="text/javascript">
		function check_all() {
	 var fmobj = document.theForm;
	 for (var i=0;i<fmobj.elements.length;i++) {
		 var e = fmobj.elements[i];
		 if ((e.name != 'allbox') && (e.type=='checkbox') && (!e.disabled)) {
			 e.checked = fmobj.allbox.checked;
		 }
	 }
	 return true;
	}

	 function xacnhanDelete(){
	var total = 0;
	var fmobj = document.theForm;
	for (var i=0;i<fmobj.elements.length;i++) {
	 var e = fmobj.elements[i];
	 if ((e.name != 'allbox') && (e.type=='checkbox') && (!e.disabled)) {
		 if (e.checked) total++;
	 }
	}
	if (total==0){ 
		alert('Chưa có đối tượng nào được chọn!');
		return false;
	}
   if (confirm("Bạn có thực sự muốn xóa [OK]:Yes [Cancel]:No?")) {
		document.theForm.submit();
		return true;
	}
   }

function goBack() {
    window.history.go(-1);
}

</script>