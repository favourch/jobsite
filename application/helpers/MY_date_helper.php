<?php
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		
 		function int_to_date($int){
		   return date("d/m/Y", $int);
		}
		function date_now(){
		   return date("d/m/Y", strtotime("now"));
		}
		function date_full_now(){
		   return date("d/m/Y h:i:s", strtotime("now"));
		}
		function int_to_date_full($int){
		   return date("d/m/Y h:i:s", $int);
		}