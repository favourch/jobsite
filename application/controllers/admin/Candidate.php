<?php
Class Candidate extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('member_candidate_model');
	}
	function index(){
		//Tạo thông báo 
		$this->load->library('pagination');
		
		//lấy ra tổng tất cả các sản phẩm
		$total_row = $this->member_candidate_model->get_total();
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = admin_url('candidate/index');
		$config['total_rows']  = $total_row;
		$config['per_page']    = 5;
		$config['uri_segment'] = 4;
		$config['next_link']   = "Next page";
		$config['prev_link']   = "Prev page";
		$this->pagination->initialize($config);

		$segment = $this->uri->segment(4);
		$segment = intval($segment);
		
		$input = array();
		$input["limit"] = array($config['per_page'], $segment);
		//kiểm tra xem có lọc sản phẩm không, thêm điều kiện
		$category_id = $this->input->get('category_id');
		$category_id = intval($category_id);
		$input['where'] = array();
		if($category_id > 0){
			$input['where']['category_id'] = $category_id; 
		}
		$name = $this->input->get('name');
		if($name){
			$input['like'] = array('name', $name);
		}

		//lấy danh sách sản phẩm
		$list = $this->member_candidate_model->get_list($input);
		$this->data['list'] = $list;
		
		//lấy ra danh sách danh mục sản phẩm
		$input = array();
		$input['where'] = array('parent'=>0);
		$this->load->model('category_model');
		$category = $this->category_model->get_list($input);
		foreach($category as $row){
			$input['where'] = array('parent'=> $row->id);
			$subs = $this->category_model->get_list($input); // lấy ra danh mục con
			$row->subs = $subs; 
		}

		$this->data['category'] = $category;

		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = "admin/candidate/index";
		$this->load->view("admin/main", $this->data);
	}

}//end class