<?php 
Class City extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('city_model');
	}

	function index(){
		$this->load->library('pagination');
		$total_row = $this->city_model->get_total();
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = admin_url('city/index');
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

		$list = $this->city_model->get_list($input);
		$this->data['list'] = $list;
		
		//thông báo dữ liệu
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = 'admin/city/index';
		$this->load->view('admin/main', $this->data);
	}

	function add(){

		if($this->input->post()){
			$this->form_validation->set_rules('name','Tiêu đề','required|min_length[4]');
			$this->form_validation->set_rules('code','Mã','required');
			//$this->form_validation->set_rules('image','Hình ảnh slide','required');
			if($this->form_validation->run()){
				$name = $this->input->post('name');
				$code = $this->input->post('code');
				$latitude = $this->input->post('latitude');
				$longitude = $this->input->post('longitude');

				$data = array(
					'name' => $name,
					'code' => $code,
					'latitude' => $latitude,
					'longitude' => $longitude
					);

				$this->city_model->create($data);
				$this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công !');
				redirect(admin_url('city'));
			}
		}

		$this->data['temp'] = 'admin/city/add';
		$this->load->view('admin/main',$this->data);
	}

	function edit(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->city_model->get_info($id);
		$this->data['info'] = $info;

		if($this->input->post()){
			$this->form_validation->set_rules('name','Tên','required|min_length[4]');
			$this->form_validation->set_rules('code','Mã','required');
			if($this->form_validation->run()){
				$name = $this->input->post('name');
				$code = $this->input->post('code');
				$latitude = $this->input->post('latitude');
				$longitude = $this->input->post('longitude');
			
				$data = array(
					'name'=>$name,
					'code'=>$code,
					'latitude'=>$latitude,
					'longitude'=>$longitude
					);

				$this->city_model->update($id,$data);
				$this->session->set_flashdata('message', 'Sửa dữ liệu thành công !');
				//chuyển sang trang danh sách danh mục
				redirect(admin_url('city'));
		}
	}


		$this->data['temp'] = 'admin/city/edit';
		$this->load->view('admin/main',$this->data);
	}

	function del(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->city_model->get_info($id);
		if(!$info){
			$this->session->set_flashdata('message', 'không tồn tại địa điểm !');
			redirect(admin_url('city'));
		}
		$this->city_model->deleteOne($id);
		$this->session->set_flashdata('message','Xóa dữ liệu thành công');
		redirect(admin_url('city'));
	}


}//end class