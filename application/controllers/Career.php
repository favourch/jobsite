<?php
Class Career extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('career_model');
		$this->load->model('recruitment_model');
	}

	function index(){
		//lấy ra id của danh mục
		$id = $this->uri->rsegment(3);
		$id = intval($id);

		$this->load->model('city_model');
		$this->load->model('member_company_model');
		$this->load->model('salary_model');
		$category = $this->career_model->get_info($id);
		if(!$category){
			redirect();
		}
		$this->data['category'] = $category;
		$input = array();
		$input["where"] = array('career_id'=>$id);
		//lấy ra danh sách việc làm trong danh mục
		$this->load->library('pagination');
		//lấy ra tổng tất cả các sản phẩm
		$total_row = $this->recruitment_model->get_total($input);
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = home_url('career/index/'.$id);
		//$config['base_url'] = home_url('viec-lam/'.$category->cat_name.'-d'.$id);
		$config['total_rows']  = $total_row;
		$config['per_page']    = 10;
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<ul class="list-unstyled flex no-column items-center">';
    	$config['full_tag_close'] = '</ul>';
    	$config['num_tag_open'] = '<li class="button linkcss">';
    	$config['num_tag_close'] = '</li>';
    	$config['first_link'] = '&laquo; First';
    	$config['first_tag_open'] = '<li class="prev page">';
    	$config['first_tag_close'] = '</li>';
    	$config['cur_tag_open'] = '<li class="active button">';
    	$config['cur_tag_close'] = '</li>';
		$config['next_link']   = '<span class="button">Trang kế <i class="ion-ios-arrow-right"></i></span>';
		$config['prev_link']   = '<span class="button"><i class="ion-ios-arrow-left"></i> Quay lại</span>';
		$this->pagination->initialize($config);

		$segment = $this->uri->segment(4);
		$segment = intval($segment);
		
		
		$input["limit"] = array($config['per_page'], $segment);
		

		$list = $this->recruitment_model->get_list($input);
		$this->data['list'] = $list;

		//hiển thị ra view
		$this->data['temp'] = "site/career/index";
		$this->load->view('site/layout',$this->data);
	}

	function detail(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->product_model->get_info($id);
		$this->data['info'] = $info;

		$image_list = @json_decode($info->image_list);
		$this->data['image_list'] = $image_list;
		//cập nhật lượt xem sản phẩm
		$data = array();
		$data['view'] = $info->view + 1;
		$this->product_model->update($info->id,$data);

		$this->data['temp'] = "site/product/detail";
		$this->load->view("site/layout", $this->data);
	}
	//tìm kiếm theo tên sản phẩm
	function search(){
		$key = $this->input->get('key');
		$this->data['key'] = trim($key);
		$input = array();
		$input['like'] = array('name',$key);
		$list = $this->product_model->get_list($input);
		$this->data['list'] = $list;

		//load view
		$this->data['temp'] = "site/product/search";
		$this->load->view("site/layout", $this->data);
	}
}