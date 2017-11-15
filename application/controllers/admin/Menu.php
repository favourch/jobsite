<?php
Class Menu extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('menu_model');
	}

	function index(){
		$input = array();
		$list = $this->menu_model->get_list($input);
		$this->data['list'] = $list;
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;
		$this->data['temp'] = 'admin/menu/index';
		$this->load->view('admin/main', $this->data);
	}

	function add(){
			if($this->input->post()){
			$this->form_validation->set_rules('name','Tiêu đề menu','required|min_length[2]');
			//$this->form_validation->set_rules('username','Tên tài khoản','required|min_length[4]|callback_check_username');
			//$this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]');
			//$this->form_validation->set_rules('repassword','Nhâp lại mật khẩu','matches');

			if($this->form_validation->run()){
				//tiến hành thêm vào csdl
				$name = $this->input->post('name');
				$parent = $this->input->post('parent');
				$category_id = $this->input->post('category_id');
				$cat_id = $this->input->post('cat_id');
				$is_order = $this->input->post('is_order');
				$link = $this->input->post('link');
				$data = array(
					'name'=> $name,
					'parent'=> $parent,
					'category_id'=>$category_id,
					'cat_id'=>$cat_id,
					'is_order' => $is_order,
					'link' => $link
					);
				if($this->menu_model->create($data)){
					// tạo nội dung thông báo
					$this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công !');
				}
				else{
					$this->session->set_flashdata('message', 'Lỗi dữ liệu, không thêm được !');
				}
				//chuyển sang trang danh sách admin
				redirect(admin_url('menu'));
			}
		}
			//lấy ra danh mục menu cha
		$input = array();
		$input['where'] = array('parent'=>0);
		$listmn = $this->menu_model->get_list($input);
		$this->data['listmn'] = $listmn;
		//lấy ra danh mục sản phẩm
		$this->load->model('category_model');
		$listcategory = $this->category_model->get_list($input);
		$this->data['listcategory'] = $listcategory;
		//Lấy ra danh mục tin
		$this->load->model('catnews_model');
		$listcatnews = $this->catnews_model->get_list($input);
		$this->data['listcatnews'] = $listcatnews;


		$this->data['temp'] = 'admin/menu/add';
		$this->load->view('admin/main', $this->data);
	}

	function edit(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$menu = $this->menu_model->get_info($id);
		if(!$menu){
			redirect(admin_url('menu'));
		}
		$this->data['menu'] = $menu;
		if($this->input->post()){
			$this->form_validation->set_rules('name','Tiêu đề menu','required');
			if($this->form_validation->run()){
				$name = $this->input->post('name');
				$parent = $this->input->post('parent');
				$category_id = $this->input->post('category_id');
				$cat_id = $this->input->post('cat_id');
				$is_order = $this->input->post('is_order');
				$link = $this->input->post('link');
				$data = array(
					'name'=>$name,
					'parent'=>$parent,
					'category_id'=>$category_id,
					'cat_id'=>$cat_id,
					'is_order'=>$is_order,
					'link'=>$link
					);
				$this->menu_model->update($id,$data);
				$this->session->set_flashdata('message', 'Sửa dữ liệu thành công !');
				redirect(admin_url('menu'));
			}
		}

		//lấy ra danh mục menu cha
		$input = array();
		$input['where'] = array('parent'=>0);
		$listmn = $this->menu_model->get_list($input);
		$this->data['listmn'] = $listmn;
		//lấy ra danh mục sản phẩm
		$this->load->model('category_model');
		$listcategory = $this->category_model->get_list($input);
		$this->data['listcategory'] = $listcategory;
		//Lấy ra danh mục tin
		$this->load->model('catnews_model');
		$listcatnews = $this->catnews_model->get_list($input);
		$this->data['listcatnews'] = $listcatnews;

		$this->data['temp'] = 'admin/menu/edit';
		$this->load->view('admin/main',$this->data);
	}

	function del(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$menu = $this->menu_model->get_info($id);
		if(!$menu){
			redirect(admin_url('menu'));
		}
		$this->menu_model->deleteOne($id);
		$this->session->set_flashdata('message', 'Xóa dữ liệu thành công !');
		redirect(admin_url('menu'));
	}

}