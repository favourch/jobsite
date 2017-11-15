<?php 
Class Job_type extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('job_type_model');
	}

	function index(){
		$this->load->library('pagination');
		$total_row = $this->job_type_model->get_total();
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = admin_url('job_type/index');
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

		$list = $this->job_type_model->get_list($input);
		$this->data['list'] = $list;
		
		//thông báo dữ liệu
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = 'admin/job_type/index';
		$this->load->view('admin/main', $this->data);
	}

		function add(){
		if($this->input->post()){
			$this->form_validation->set_rules('name','Tiêu đề','required|min_length[4]');
			if($this->form_validation->run()){
				$name = $this->input->post('name');
				$status = $this->input->post('status');

				$data = array(
					'name' => $name,
					'status' => $status
					);

				$this->job_type_model->create($data);
				$this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công !');
				redirect(admin_url('job_type'));
			}
		}

		$this->data['temp'] = 'admin/job_type/add';
		$this->load->view('admin/main',$this->data);
	}

		function edit(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->job_type_model->get_info($id);
		$this->data['info'] = $info;

		if($this->input->post()){
			$this->form_validation->set_rules('name','Tên','required|min_length[4]');
			if($this->form_validation->run()){
				$name = $this->input->post('name');
				$status = $this->input->post('status');

				$data = array(
					'name'=>$name,
					'status'=>$status
					);

				$this->job_type_model->update($id,$data);
				$this->session->set_flashdata('message', 'Sửa dữ liệu thành công !');
				//chuyển sang trang danh sách danh mục
				redirect(admin_url('job_type'));
		}
	}


		$this->data['temp'] = 'admin/job_type/edit';
		$this->load->view('admin/main',$this->data);
	}

	function del(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->job_type_model->get_info($id);
		if(!$info){
			$this->session->set_flashdata('message', 'không tồn tại địa điểm !');
			redirect(admin_url('job_type'));
		}
		$this->job_type_model->deleteOne($id);
		$this->session->set_flashdata('message','Xóa dữ liệu thành công');
		redirect(admin_url('job_type'));
	}

}//end class