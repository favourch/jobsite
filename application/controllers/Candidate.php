<?php 
Class Candidate extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('member_candidate_model');
	}

	function check_login(){
		$user = $this->_get_userinfo();
		if($user){
			return true;
		}
		else{
			$this->form_validation->set_message(__FUNCTION__,'Đăng nhập thất bại !');
			return false;
		}
	}

	function login(){
		if($this->input->post()){
		$this->form_validation->set_rules('email','Địa chỉ email','required');
		$this->form_validation->set_rules('password','Mật khẩu','required');
		$this->form_validation->set_rules('login','Login','callback_check_login');
		if($this->form_validation->run()){
				//lấy ra thông tin thành viên
				$user = $this->_get_userinfo();
				$this->session->set_userdata('candidate_id_login', $user->id);
				redirect(base_url('candidate/view'));
			}
		}

		$this->data['temp'] = 'site/candidate/login';
		$this->load->view('site/layout',$this->data);
	}

		//lấy ra thông tin thành viên
	private function _get_userinfo(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password = md5($password);
		$where = array('email'=>$email, 'password'=>$password);
		$user = $this->member_candidate_model->get_info_rule($where);
		return $user;
	}

	function view(){
		if(!$this->session->userdata('candidate_id_login')){
			redirect();
		}
		$user_id = $this->session->userdata('candidate_id_login');
		$user = $this->member_candidate_model->get_info($user_id);
		if(!$user){
			redirect('candidate/login');
		}
		$this->data['user'] = $user;
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;


		$this->data['temp'] = 'site/candidate/view';
		$this->load->view('site/layout',$this->data);
	}

}