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

		if($this->input->post()){
			$this->form_validation->set_rules('email','Địa chỉ email','required|valid_email|callback_check_email');
			$this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]');
			$this->form_validation->set_rules('repassword','Nhập lại mật khẩu','matches[password]');
			if($this->form_validation->run()){
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$password = md5($password);
				$member_name = $this->input->post('member_name');
				$data = array(
					'email'=>$email,
					'password'=>$password,
					'created' =>now()
					);
			if($member_name=='tuyendung'){
			$this->member_company_model->create($data);
			redirect(base_url());

			}
			elseif($member_name=='ungvien') {
			$this->member_candidate_model->create($data);
			redirect(base_url('candidate/login'));
			}
			
		}
	}

	$this->data['temp'] = 'site/member_register/register';
	$this->load->view('site/layout',$this->data);
}

}//end class