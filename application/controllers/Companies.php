<?php
Class Companies extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('member_company_model');
	}
		//kiểm tra callback username
	function check_email(){
		$email = $this->input->post('email');
		$where = array('email'=> $email);
		if($this->member_company_model->check_exits($where)){
			//trả về thông báo lỗi
			$this->form_validation->set_message(__FUNCTION__,'Email đã tồn tại !');
			return false;
		}
		else{
			return true;
		}
	}

	function register(){
		$this->load->model('city_model');
		$input = array();
		//load model thành phố
		$thanhpho = $this->city_model->get_list($input);
		$this->data['thanhpho'] = $thanhpho;
		//load model quy mô công ty
		$this->load->model('company_size_model');
		$companysize = $this->company_size_model->get_list();
		$this->data['companysize'] = $companysize;
		
		if($this->input->post()){
			$this->form_validation->set_rules('email','Địa chỉ email','required|valid_email|callback_check_email');
			$this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]');
			$this->form_validation->set_rules('repassword','Nhập lại mật khẩu','matches[password]');
			$this->form_validation->set_rules('company_name','Tên công ty','required|min_length[6]');
			$this->form_validation->set_rules('company_phone','Số điện thoại','required|min_length[6]|numeric');
			$this->form_validation->set_rules('company_address','Địa chỉ','required|min_length[6]');
			$this->form_validation->set_rules('city_id','Tỉnh thành phố','required');
			//$this->form_validation->set_rules('company_size_id','Quy mô công ty','required');
			$this->form_validation->set_rules('company_contact','Tên người liên hệ','required');
			$this->form_validation->set_rules('contact_title','Chức vụ','required');
			$this->form_validation->set_rules('contact_email','Email người liên hệ','required|valid_email');
			$this->form_validation->set_rules('contact_phone','Số điện thoại người liên hệ','required|numeric');
			if($this->form_validation->run()){
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$password = md5($password);
				$company_name = $this->input->post('company_name');
				$company_phone = $this->input->post('company_phone');
				$company_address = $this->input->post('company_address');
				$city_id = $this->input->post('city_id');
				$company_size_id = $this->input->post('company_size_id');
				$description = $this->input->post('description');
				$website = $this->input->post('website');
				$company_fax = $this->input->post('company_fax');
				//$logo_url = $this->input->post('logo_url');
				$company_contact = $this->input->post('company_contact');
				$contact_title = $this->input->post('contact_title');
				$contact_email = $this->input->post('contact_email');
				$contact_phone = $this->input->post('contact_phone');

				//lấy tên file ảnh, upload ảnh đại diện
				$this->load->library('upload_library');
				$upload_path = './uploads/company';
				$upload_data = $this->upload_library->upload($upload_path, 'logo_url');
				if(isset($upload_data['file_name'])){
					$image_link = $upload_data['file_name'];
				}

				$data = array(
					'email'=>$email,
					'password'=>$password,
					'company_name'=>$company_name,
					'company_phone'=>$company_phone,
					'company_address'=>$company_address,
					'city_id' => $city_id,
					'company_size_id' => $company_size_id,
					'description' => $description,
					'website' => $website,
					'logo_url' =>$image_link,
					'company_fax' => $company_fax,
					'company_contact' => $company_contact,
					'contact_title' => $contact_title,
					'contact_email' => $contact_email,
					'contact_phone' => $contact_phone,
					'created' =>now()
					);
		
			$this->member_company_model->create($data);
			redirect(base_url());			
		}
	}

	$this->data['temp'] = 'site/companies/register';
	$this->load->view('site/layout',$this->data);
	}
}