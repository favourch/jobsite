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

//xóa ký tự đặc biệt trong link
		function convert_vi_to_en($str) {
			$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
			$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
			$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
			$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
			$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
			$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
			$str = preg_replace("/(đ)/", 'd', $str);
			$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
			$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
			$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
			$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
			$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
			$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
			$str = preg_replace("/(Đ)/", 'D', $str);
			//$str = str_replace(" ", "-", str_replace("&*#39;","",$str));
			return $str;
			}
		function convert_upper_to_lower($str){
  		return strtolower($str);
		}
		function replace($str){
  		return ereg_replace('[[:space:]]+', '-', trim($str));
		}

		function slug($str){
		return preg_replace('/[^a-zA-Z0-9\-_]/','',replace(convert_upper_to_lower(convert_vi_to_en($str))));
		}
		function slug2($str){
		return preg_replace('/[^a-zA-Z0-9\-,_]/','',replace(convert_upper_to_lower(convert_vi_to_en($str))));
		}

		function tags($url,$class,$string){
	$name = (explode(",",$string));
	$total = count($name);
	$html="";
	for($i=0;$i<$total;$i++){
	$slug = $name[$i];
	$html.="<li><a class='$class' href='".$url."tags/".$slug."/' title='".$name[$i]."' itemprop='keywords'>".$name[$i]."</a></li>";
	}
	return $html;
	}
		