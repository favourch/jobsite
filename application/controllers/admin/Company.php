<?php
class Company extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('member_company_model');
	}

	function index(){
		$this->load->model('recruitment_model');
		$this->load->library('pagination');
		$total_row = $this->member_company_model->get_total();
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = admin_url('company/index');
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
		$company_name = $this->input->get('company_name');
		if($company_name){
			$input['like'] = array('company_name', $company_name);
		}

		$list = $this->member_company_model->get_list($input);
		$this->data['list'] = $list;
		
		//thông báo dữ liệu
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = 'admin/company/index';
		$this->load->view('admin/main', $this->data);
	}

	function edit(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->member_company_model->get_info($id);
		$this->data['info'] = $info;

		if($this->input->post()){
			$this->form_validation->set_rules('company_name','Tên công ty','required');
			$this->form_validation->set_rules('email','Địa chỉ email','required|valid_email');
			$this->form_validation->set_rules('password','Mật khẩu','min_length[6]');
			$this->form_validation->set_rules('repassword','Xác nhận mật khẩu','min_length[6]|matches[password]');
			if($this->form_validation->run()){
				$company_name = $this->input->post('company_name');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$password = md5($password);
				$repassword = $this->input->post('repassword');
				$description = $this->input->post('description');
				$status = $this->input->post('status');
			//lấy tên file ảnh, upload ảnh đại diện
				$this->load->library('upload_library');
				$upload_path = './uploads/company';
				$upload_data = $this->upload_library->upload($upload_path, 'logo_url');
				if(isset($upload_data['file_name'])){
					$image_link = $upload_data['file_name'];
				}

				$data = array(
					'company_name'=>$company_name,
					'description'=>$description,
					'email' => $email,
					'status'=>$status
					);

				if($image_link!=''){
					$data['logo_url'] = $image_link;
				}
				if($password!=''){
					$data['password'] = $password;
				}

				$this->member_company_model->update($id,$data);
				$this->session->set_flashdata('message', 'Sửa dữ liệu thành công !');
				//chuyển sang trang danh sách danh mục
				redirect(admin_url('company'));
				}
		}

		$this->data['temp'] = 'admin/company/edit';
		$this->load->view('admin/main',$this->data);
	}

	function view(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->member_company_model->get_info($id);
		$this->data['info'] = $info;
		$this->load->model('recruitment_model');
		$input = array();
		$input['where'] = array('company_id'=>$id);
		$listrecruitment = $this->recruitment_model->get_list($input);
		$this->data['listrecruitment'] = $listrecruitment;


		$this->data['temp'] = 'admin/company/view';
		$this->load->view('admin/main',$this->data);
	}

	function del_job(){
		$this->load->model('recruitment_model');
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->recruitment_model->get_info($id);
		if (!$info) {
			$this->session->set_flashdata('message','Không tồn tại việc làm này');
			redirect(admin_url('recruitment'));
		}
		$this->data['info'] = $info;
		$this->recruitment_model->deleteOne($id);
		$this->session->set_flashdata('message','Xóa dữ liệu thành công ! ');
		redirect(admin_url('company'));
	}

}//end class