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
function date_to_int($tr)
{
    if (preg_match('/^\s*(\d\d?)[^\w](\d\d?)[^\w](\d{1,4}\s*$)/', $tr, $match))
    {
        $tr = $match[2] . '/' . $match[1] . '/' . $match[3];
    }
    $time=strtotime($tr);
    return $time;
}