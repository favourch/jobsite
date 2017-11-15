<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<title>Plugin quản lý ảnh - bản quyền thuộc về Liên kết số (lienketso.vn)</title>
</head>
<body>
<script language="javascript">
function select_item() 
{ 
opener.document.getElementById('<?php echo $_GET["id"];  ?>').value=document. 
getElementById('image').value; 
close(); 
} 

function insert(h){
				document.getElementById('image').value = h.substr(11);
			}
function cancer_item() 
			{ 
			top.close(); 
			return false; 
			}  
function showanh(str){
      document.getElementById("anhdaidien").innerHTML = "<img src="+str+" />";
}
function default_anh(str){
      document.getElementById("anhdaidien").innerHTML = "<img src="+str+" />";
}
</script>
<?php
if($_GET["note"]==1){
?>
<script language="javascript">
          alert("Lỗi định dạng file");
        </script>
<?php
}
if($_GET["note"]==2){
?>
<script language="javascript">
          alert("Lỗi trùng tên file upload");
        </script>
<?php
}
if($_GET["note"]==3){
?>
<script language="javascript">
          alert("Dung lượng vượt quá 3M");
        </script>
<?php
}
require_once("lib.php")
?>
<div class="khung_upload">
    <div class="khung_left">
   <div id="anhdaidien">
   </div>
    <ul class="caythumuc">
    <?php
	open_file1("../uploads");
	?>
    </ul>
     
    </div>
     <div class="khung_giua">
     <ul class="hoanvu">
     <li><a href="javascript:history.go(-1);"> ...</a></li>
     <?php
	 if(isset($_GET["dir"])){
	   open_file2($_GET["dir"]);
	 }
	 else{
	   open_file2("../uploads");
	 }
	?>
    </ul>
    </div>
     <div class="khung_phai">
    </div>
    <div class="khungduoi">
      <div class="khung1">
     
      <input type="text" id="image" name="image" value="<?php if(isset($_GET["cv"])){echo substr($_GET["dir"],11)."/".$_GET["cv"];} ?>" class="text" />
      <input type="button" class="btn" onClick="return cancer_item();" value="Cancer" />
      <input type="button" class="btn" value="Open" onClick="return select_item();" />
      </div>
      <div class="khung1">
       <form action="action.php" method="post" 
            enctype="multipart/form-data">
       <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
      <input type="hidden" name="thumuc" value="<?php echo $_GET["dir"] ?>" />
      <input type="file" class="text" name="file" />
      <input type="submit" class="btn" value="Upload" />
      </form>
      </div>
    </div>
 </div>
</body>
</html>
