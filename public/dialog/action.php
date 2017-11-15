<?php
define("ROOT_URL", "http://".$_SERVER['HTTP_HOST'].trim(dirname(" ".dirname(" ".$_SERVER['SCRIPT_NAME']))));
define("DIALOG_URL",ROOT_URL."/dialog");
$type = "png,jpg,gif,jpeg,mp3,pdf,rar,doc,docx,xls,xlsx,txt,flv";
$maxsize= 1072000;
 function findexts($filename) 
 { 
 $filename = strtolower($filename) ; 
 $exts = split("[/\\.]", $filename) ; 
 $n = count($exts)-1; 
 $exts = $exts[$n]; 
 return $exts; 
 }
$target=$_POST["thumuc"]."/";
if(is_dir($target==false))
	{
	mkdir($target);
	}
$target1=$target.$_FILES['file']['name'];
if(strstr($type ,findexts($_FILES['file']['name'])) ==""){
  //echo strstr($type ,findexts($_FILES['file']['name']));
  header("location: ".DIALOG_URL."/upload.php?id=".$_POST["id"]."&dir=".$_POST["thumuc"]."&note=1");
}
else if(is_file($target1)==true)
{
	header("location: ".DIALOG_URL."/upload.php?id=".$_POST["id"]."&dir=".$_POST["thumuc"]."&note=2");
}
else if($_FILES['file']['size'] > $maxsize) 
	{
		//echo $_FILES['file']['name'];
		header("location: ".DIALOG_URL."/upload.php?id=".$_POST["id"]."&dir=".$_POST["thumuc"]."&note=3");
	}
else 
{
	move_uploaded_file($_FILES['file']['tmp_name'],$target1);
	header("location: ".DIALOG_URL."/upload.php?id=".$_POST["id"]."&dir=".$_POST["thumuc"]."&cv=".$_FILES['file']['name']."");
}	

?>