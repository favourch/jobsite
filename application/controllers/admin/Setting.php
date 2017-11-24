<?php 
class Setting extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('setting_model');
	}
	function index(){
		$id = 1;
		$setting = $this->setting_model->get_info($id);
		$this->data['setting'] = $setting;

		if($this->input->post()){
			$this->form_validation->set_rules('title','Tiêu đề website','required|min_length[6]');
			if($this->form_validation->run()){
				$title = $this->input->post('title');
				$phone = $this->input->post('phone');
				$address = $this->input->post('address');
				$email = $this->input->post('email');
				$meta_desc = $this->input->post('meta_desc');
				$meta_keyword = $this->input->post('meta_keyword');
				$footer = $this->input->post('footer');
				//lấy tên file ảnh, upload ảnh đại diện
				$this->load->library('upload_library');
				$upload_path = './uploads/logo';
				$upload_data = $this->upload_library->upload($upload_path, 'image');
				if(isset($upload_data['file_name'])){
					$image_link = $upload_data['file_name'];
				}

				$data = array(
					'title'=>$title,
					'phone'=>$phone,
					'address'=>$address,
					'email'=>$email,
					'meta_desc'=>$meta_desc,
					'meta_keyword'=>$meta_keyword,
					'footer'=>$footer
					);
				if($image_link!=''){
					$data['image'] = $image_link;
				}
				$this->setting_model->update($id,$data);
				$this->session->set_flashdata('message', 'Sửa cấu hình thành công !');
				redirect(admin_url('setting'));
			}
		}

		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = 'admin/setting/index';
		$this->load->view('admin/main',$this->data);
	}
}