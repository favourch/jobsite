<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');

Class MY_Model extends CI_Model{
	var $table ='' ;
	var $key ='id';
	var $order = '';
	var $select = '';


	function get_total($input = array()){
		$this->get_list_set_input($input);
		$query = $this->db->get($this->table);
		return $query->num_rows();
	}

	//lấy thông tin dữ liệu trong bảng
	function get_info($id){
		if(!$id){
			return FALSE;
		}
		//$where ="WHERE $cond";
		$where['id'] = $id;
		return $this->get_info_rule($where);
	}
	//lấy thông tin của dòng từ điều kiện
	function get_info_rule($where= array()){
		$this->db->where($where);
		$query = $this->db->get($this->table);
		if($query->num_rows()){
			return $query->row();
		}
		return FALSE;
	}

	//insert dữ liệu
	function create($data = array()){
		if($this->db->insert($this->table,$data)){
			return TRUE;
		}else{
			return FALSE;
		}
	}


	//Lấy danh sách dữ liệu
	function get_list($input = array()){
		$this->get_list_set_input($input);
		//truy vấn dữ liệu
		$query = $this->db->get($this->table);
		return $query->result();
	}

	//lấy dữ liệu gán điều kiện
	function get_list_set_input($input){
		if(isset($input['select'])){
			$this->db->select($input['select']);
		}
		//thêm điều kiện cho câu truy vấn truyền qua biến $input['select']
		if(isset($input['where']) && $input['where']){
			$this->db->where($input['where']);
		}
		//thêm điều kiện tìm kiếm theo lệnh like
		if(isset($input['like']) && $input['like']){
			$this->db->like($input['like'][0], $input['like'][1]);
		}
		if(isset($input['limit'][0]) && isset($input['limit'][1])){
			$this->db->limit($input['limit'][0], $input['limit'][1]);
		}
		//Thêm sắp xếp dữ liệu
		if(isset($input['order'][0]) && isset($input['order'][1])){
			$this->db->order_by($input['order'][0], $input['order'][1]);
		}
		else{
			$this->db->order_by('id','desc');
		}
		//Thêm điều kiện limit (phân trang)
		
	}

	//kiểm tra tồn tại
	function check_exits($where = array()){
		$this->db->where($where);
		$query = $this->db->get($this->table);
		if($query->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	// sửa dữ liệu
	function update($id,$data){
		if(!$id){
			return FALSE;
		}
		$where = array();
		$where['id'] = $id;
		$this->update_rule($where,$data);

	}

	//điều kiện cập nhật dữ liệu
	function update_rule($where,$data){
		if(!$where){
			return FALSE;
		}
		$this->db->where($where);
		if($this->db->update($this->table,$data)){
			return TRUE;
		}
		return FALSE;
	}


	function deleteOne($id){
		if(!$id){
			return FALSE;
		}
		$where = array();
		$where['id'] = $id;
		$this->delete_rule($where);
	}

	function delete_rule($where){
		if(!$where){
			return FALSE;
		}
		$this->db->where($where);
		if($this->db->delete($this->table)){
			return TRUE;
		}
		return FALSE;

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
		return preg_replace('/[^a-zA-Z0-9\-_]/','',$this->replace($this->convert_upper_to_lower($this->convert_vi_to_en($str))));
		}




}//end classs