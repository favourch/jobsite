<?php
function admin_url($url){
	return base_url('admin/'.$url);
}

function yes_no($t=0, $v=2){
   if($v==0){
   echo "<option value='1'>Online</option>";
   echo "<option value='0'>Offline</option>";
   }
   else if($v==1){
   echo "<option value='1' selected=''>Online</option>";
   echo "<option value='0'>Offline</option>";
   }
   else if($t==1 && $v==2){
   echo "<option value='1' selected=''>Online</option>";
   echo "<option value='0'>Offline</option>";
   } 
   else{
   echo "<option value='1'>Online</option>";
   echo "<option value='0'>Offline</option>";
   }
  }

function get_status($t=0,$v=0){
   if($v==0){
      echo "<option value='1'>Active</option>";
      echo "<option value='0'>Deactive</option>";
      echo "<option value='2'>Hot</option>";
      echo "<option value='3'>Recomment</option>";
   }
   else if($v==1){
      echo "<option value='1' selected=''>Active</option>";
      echo "<option value='0'>Deactive</option>";
      echo "<option value='2'>Hot</option>";
      echo "<option value='3'>Recomment</option>";
   }
   else if($v==2){
      echo "<option value='1'>Active</option>";
      echo "<option value='0'>Deactive</option>";
      echo "<option value='2' selected=''>Hot</option>";
      echo "<option value='3'>Recomment</option>";
   }
   else if($v==3){
      echo "<option value='1'>Active</option>";
      echo "<option value='0'>Deactive</option>";
      echo "<option value='2'>Hot</option>";
      echo "<option value='3' selected=''>Recomment</option>";
   }
   else{
      echo "<option value='1'>Active</option>";
      echo "<option value='0'>Deactive</option>";
      echo "<option value='2'>Hot</option>";
      echo "<option value='3'>Recomment</option>";
   }

}

  


  
