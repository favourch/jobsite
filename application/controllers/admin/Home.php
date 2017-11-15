<?php
Class Home extends MY_Controller {
	function index(){
		//data từ core->My_controller
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;
		
		$this->data["temp"] = 'admin/home/index';
		$this->load->view('admin/main',$this->data);
	}
		function logout(){
			if($this->session->userdata('login')){
				$this->session->unset_userdata('login');
				redirect(admin_url('login'));
			}
		}
}