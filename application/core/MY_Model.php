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
		function get_catname($catname){
		if(!$catname){
			return FALSE;
		}
		//$where ="WHERE $cond";
		$where['cat_name'] = $cat_name;
		return $this->get_info_rule($where);
	}
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
			$insert_id = $this->db->insert_id();
			return  $insert_id;
		}else{
			return 0;
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

}//end classs