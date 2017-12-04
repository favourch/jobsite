<?php
Class Page extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('page_model');
	}

	function index(){
		$this->load->library('pagination');
		$total_row = $this->page_model->get_total();
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = admin_url('page/index');
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
		$title = $this->input->get('title');
		if($title){
			$input['like'] = array('title', $title);
		}

		$list = $this->page_model->get_list($input);
		$this->data['list'] = $list;
		
		//thông báo dữ liệu
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = 'admin/page/index';
		$this->load->view('admin/main',$this->data);
	}

	function add(){

		if($this->input->post()){
			$this->form_validation->set_rules('title','Tiêu đề','required|min_length[6]');
			if($this->form_validation->run()){
				$title = $this->input->post('title');
				$cat_name = $this->input->post('cat_name');
				$cat_name = slug($title);
				$content = $this->input->post('content');
				$status = $this->input->post('status');
				
				$data = array(
					'title' => $title,
					'cat_name' => $cat_name,
					'content' => $content,
					'status' => $status
					);

				$this->page_model->create($data);
				$this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công !');
				redirect(admin_url('page'));
			}
		}

		$this->data['temp'] = 'admin/page/add';
		$this->load->view('admin/main',$this->data);
	}

	function edit(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->page_model->get_info($id);
		$this->data['info'] = $info;

		if($this->input->post()){
			$this->form_validation->set_rules('title','Tiêu đề tin','required|min_length[4]');
				if($this->form_validation->run()){
				$title = $this->input->post('title');
				$cat_name = $this->input->post('cat_name');
				$cat_name = slug($title);
				$content = $this->input->post('content');
				$status = $this->input->post('status');
				}

				$data = array(
					'title'=>$title,
					'cat_name'=>$cat_name,
					'content'=>$content,
					'status'=>$status
					);

				$this->page_model->update($id,$data);
				$this->session->set_flashdata('message', 'Sửa dữ liệu thành công !');
				//chuyển sang trang danh sách danh mục
				redirect(admin_url('page'));
			}
		
		$this->data['temp'] = 'admin/page/edit';
		$this->load->view('admin/main',$this->data);
	}

	function del(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->page_model->get_info($id);
		if(!$info){
			$this->session->set_flashdata('message','Không tồn tại tin tức này');
			redirect(admin_url('page'));
		}
		$this->page_model->deleteOne($id);
		$this->session->set_flashdata('message','Xóa dữ liệu thành công');
		redirect(admin_url('page'));
	}

	function delete_all()
    {
        $ids = $this->input->post('id[]');
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
        $this->session->set_flashdata('message','Xóa tùy chọn thành công');
        redirect(admin_url('page'));
    }
    
    /*
     *Xoa san pham
     */
    private function _del($id)
    {
        $news = $this->page_model->get_info($id);
        if(!$news)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại sản phẩm này');
            redirect(admin_url('page'));
        }
        //thuc hien xoa san pham
        $this->page_model->deleteOne($id);
    }

}//end class