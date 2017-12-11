<?php
Class Menu extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('menu_model');
	}

	function index(){
		
		$this->load->library('pagination');
		$total_row = $this->menu_model->get_total();
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = admin_url('menu/index');
		$config['total_rows']  = $total_row;
		$config['per_page']    = 10;
		$config['uri_segment'] = 4;
		$config['next_link']   = "Next page";
		$config['prev_link']   = "Prev page";
		$this->pagination->initialize($config);
		$segment = $this->uri->segment(4);
		$segment = intval($segment);

		$input = array();
		$input["limit"] = array($config['per_page'], $segment);
		$input['where'] = array();
		$name = $this->input->get('name');
		if($name){
			$input['like'] = array('name', $name);
		}

		$list = $this->menu_model->get_list($input);
		$this->data['list'] = $list;
		
		//thông báo dữ liệu
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
				$cat_id = $this->input->post('cat_id');
				$is_order = $this->input->post('is_order');
				$link = $this->input->post('link');
				$data = array(
					'name'=> $name,
					'parent'=> $parent,
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
		foreach($listmn as $row){
			$input['where'] = array('parent'=> $row->id);
			$subs = $this->menu_model->get_list($input); // lấy ra danh mục con
			$row->subs = $subs; 
		}
		$this->data['listmn'] = $listmn;

		//Lấy ra danh mục tin
		$this->load->model('catnews_model');
		$listcatnews = $this->catnews_model->get_list();
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
				$cat_id = $this->input->post('cat_id');
				$is_order = $this->input->post('is_order');
				$link = $this->input->post('link');
				$data = array(
					'name'=>$name,
					'parent'=>$parent,
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
		foreach($listmn as $row){
			$input['where'] = array('parent'=> $row->id);
			$subs = $this->menu_model->get_list($input); // lấy ra danh mục con
			$row->subs = $subs; 
		}
		$this->data['listmn'] = $listmn;
		//Lấy ra danh mục tin
		$this->load->model('catnews_model');
		$listcatnews = $this->catnews_model->get_list();
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

	function delete_all()
    {
        $ids = $this->input->post('id[]');
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
        $this->session->set_flashdata('message','Xóa tùy chọn thành công');
        redirect(admin_url('menu'));
    }
    
    /*
     *Xoa san pham
     */
    private function _del($id)
    {
        $menu = $this->menu_model->get_info($id);
        if(!$menu)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại sản phẩm này');
            redirect(admin_url('menu'));
        }
        //thuc hien xoa san pham
        $this->menu_model->deleteOne($id);
    }

}//end class