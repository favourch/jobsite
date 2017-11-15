<?php
Class Catnews extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('catnews_model');
	}

	function index(){

		$list = $this->catnews_model->get_list();
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/catnews/index';
		$this->load->view('admin/main', $this->data);
	}

	function add(){

		if($this->input->post()){
			$this->form_validation->set_rules('name','Tên danh mục','required|min_length[2]');
				if($this->form_validation->run()){
					$name = $this->input->post('name');
					$cat_name = $this->input->post('cat_name');
					$cat_name = $this->catnews_model->slug($name);
					$parent = $this->input->post('parent');
					$is_order = $this->input->post('is_order');
					if($is_order==''){$is_order=0;}
					$status = $this->input->post('status');
				$data = array(
					'name' => $name,
					'cat_name' => $cat_name,
					'parent' => $parent,
					'is_order' => $is_order,
					'status' => $status
				);
				if($this->catnews_model->create($data)){
					// tạo nội dung thông báo
					$this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công !');
				}
				else{
					$this->session->set_flashdata('message', 'Lỗi dữ liệu, không thêm được !');
				}
				//chuyển sang trang danh sách admin
				redirect(admin_url('catnews'));
			}

			}
		//lấy ra danh mục đã tạo (danh mục cha nếu có )
		$input = array();
		$input['where'] = array('parent'=>0);
		$list = $this->catnews_model->get_list($input);
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/catnews/add';
		$this->load->view('admin/main', $this->data);
}
	
	function edit(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->catnews_model->get_info($id);
		if (!$info) {
			$this->session->set_flashdata('message','Không tồn tại danh mục này');
			redirect(admin_url('catnews'));
		}
		$this->data['info'] = $info;
		//nếu post thì sửa
		if($this->input->post()){
			$this->form_validation->set_rules('name','Tên danh mục','required');
			if($this->form_validation->run()){
				$name = $this->input->post('name');
				$cat_name = $this->input->post('cat_name');
				$cat_name = $this->catnews_model->slug($name);
				$parent = $this->input->post('parent');
				$is_order = $this->input->post('is_order');
				$status = $this->input->post('status');

				$data = array(
					'name'=>$name,
					'cat_name'=>$cat_name,
					'parent' => $parent,
					'is_order' => $is_order,
					'status' => $status
					);
				$this->catnews_model->update($id,$data);
				$this->session->set_flashdata('message', 'Sửa dữ liệu thành công !');
				redirect(admin_url('catnews'));
			}
		}

		//lấy ra danh mục cha
		$input = array();
		$input['where'] = array('parent'=>0);
		$list = $this->catnews_model->get_list($input);
		foreach ($list as $row) {
			$input['where'] = array('parent'=>$row->id);
			$subs =$this->catnews_model->get_list($input);
			$row->subs = $subs;
		}
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/catnews/edit';
		$this->load->view('admin/main', $this->data);
	}

	function del(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->catnews_model->get_info($id);
		if(!$info){
			$this->session->set_flashdata('message','Không tồn tại danh mục này');
			redirect(admin_url('catnews'));
		}
		$this->catnews_model->deleteOne($id);
		$this->session->set_flashdata('message', 'Xóa dữ liệu thành công !');
		//chuyển sang trang danh sách danh mục
		redirect(admin_url('catnews'));
	}

}//end class