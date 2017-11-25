<?php 
Class member_register extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('member_company_model');
		$this->load->model('member_candidate_model');
	}

	//kiểm tra callback username
	function check_email(){
		$email = $this->input->post('email');
		$where = array('email'=> $email);
		if($this->member_candidate_model->check_exits($where)){
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
		$thanhpho = $this->city_model->get_list($input);
		$this->data['thanhpho'] = $thanhpho;
		
		if($this->input->post()){
			$this->form_validation->set_rules('name','Tên đầy đủ','required|min_length[6]');
			$this->form_validation->set_rules('email','Địa chỉ email','required|valid_email|callback_check_email');
			$this->form_validation->set_rules('phone','Số điện thoại','required|min_length[6]|numeric');
			$this->form_validation->set_rules('address','Địa chỉ','required|min_length[6]');
			$this->form_validation->set_rules('city','Địa điểm','required');
			$this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]');
			$this->form_validation->set_rules('repassword','Nhập lại mật khẩu','matches[password]');
			if($this->form_validation->run()){
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$password = md5($password);
				$phone = $this->input->post('phone');
				$address = $this->input->post('address');
				$city = $this->input->post('city');
				$gender = $this->input->post('gender');
				$birthday = $this->input->post('birthday');
				$data = array(
					'name'=>$name,
					'email'=>$email,
					'password'=>$password,
					'phone'=>$phone,
					'address'=>$address,
					'city'=>$city,
					'gender' => $gender,
					'birthday' => $birthday,
					'created' =>now()
					);
		
			$this->member_candidate_model->create($data);
			redirect(base_url());			
		}
	}

	$this->data['temp'] = 'site/member_register/register';
	$this->load->view('site/layout',$this->data);
}

}//end class