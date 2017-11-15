<?php 
Class Contact extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('contact_model');
	}
	function index(){
		$input = array();
		$contact = $this->contact_model->get_list($input);
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;
		$this->data['contact'] = $contact;
		$this->data['temp'] = 'admin/contact/index';
		$this->load->view('admin/main',$this->data);
	}
	function view(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$contact = $this->contact_model->get_info($id);
		$this->data['contact'] = $contact;

		if($this->input->post()){
			$this->form_validation->set_rules('body','Nội dung tin nhắn','required');
			if($this->form_validation->run()){
				$body = $this->input->post('body');
				$data = array(
					'status'=>1
					);
				$this->contact_model->update($id,$data);
				$this->session->set_flashdata('message', 'Gửi tin nhắn thành công !');
				redirect(admin_url('contact'));
			}
		}

		$this->data['temp'] = 'admin/contact/view';
		$this->load->view('admin/main',$this->data);
	}
	function del(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$contact = $this->contact_model->get_info($id);
		if(!$contact){
			$this->session->set_flashdata('message', 'Không tồn tại tin nhắn !');
			redirect(admin_url('contact'));
		}
		$this->contact_model->deleteOne($id);
		$this->session->set_flashdata('message', 'Xóa dữ liệu thành công !');
		redirect(admin_url('contact'));
	}
}