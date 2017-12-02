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
function format_date($date=''){
	return date_format(new DateTime($date),'d/m/Y');
}