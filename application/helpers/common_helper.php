<?php
function public_url($url=''){
	return base_url('public/'.$url);
}
function home_url($url=''){
	return base_url($url);
}
function pre($param=''){
	echo "<pre>";
	print_r($param);
	echo "</pre>";
}