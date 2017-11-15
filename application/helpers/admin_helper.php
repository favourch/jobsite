<?php
function admin_url($url){
	return base_url('admin/'.$url);
}

function yes_no($t=0, $v=2){
   if($v==0){
   echo "<option value='0'>Offline</option>";
   echo "<option value='1'>Online</option>";
   }
   else if($v==1){
   echo "<option value='0'>Offline</option>";
   echo "<option value='1' selected=''>Online</option>";
   }
   else if($t==1 && $v==2){
   echo "<option value='0'>Offline</option>";
   echo "<option value='1' selected=''>Online</option>";
   } 
   else{
   echo "<option value='0'>Offline</option>";
   echo "<option value='1'>Online</option>";
   }
  }


  
