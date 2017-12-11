<?php
Class Catnews extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('catnews_model');
	}

	function index(){

		$this->load->library('pagination');
		$total_row = $this->catnews_model->get_total();
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = admin_url('catnews/index');
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

		$list = $this->catnews_model->get_list($input);
		$this->data['list'] = $list;
		
		//thông báo dữ liệu
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = 'admin/catnews/index';
		$this->load->view('admin/main', $this->data);
	}

	function add(){

		if($this->input->post()){
			$this->form_validation->set_rules('name','Tên danh mục','required|min_length[2]');
				if($this->form_validation->run()){
					$name = $this->input->post('name');
					$cat_name = $this->input->post('cat_name');
					$cat_name = slug($name);
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
				$cat_name = slug($name);
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

	function delete_all()
    {
        $ids = $this->input->post('id[]');
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
        $this->session->set_flashdata('message','Xóa tùy chọn thành công');
        redirect(admin_url('catnews'));
    }
    
    /*
     *Xoa san pham
     */
    private function _del($id)
    {
        $catnews = $this->catnews_model->get_info($id);
        if(!$catnews)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại sản phẩm này');
            redirect(admin_url('catnews'));
        }
        //thuc hien xoa san pham
        $this->catnews_model->deleteOne($id);
    }


}//end class