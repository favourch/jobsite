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
		//Sửa mô tả bản thân
		$mota= $this->input->post('mt');
		if($mota == 'ok'){
			$this->form_validation->set_rules('description','Mô tả','required');
			if($this->form_validation->run()){
				$description = $this->input->post('description');
				$data = array(
					'description' =>$description
				);
				$this->member_candidate_model->update($user_id,$data);
	
				redirect(base_url('candidate/view'));
			}
		}

			//Thêm kinh nghiệm làm việc
			$kinhnghiem = $this->input->post('kn');
			$this->load->model('work_experience_model');
			if($kinhnghiem == 'ok'){
			$this->form_validation->set_rules('company_name','Tên công ty','required');
			if($this->form_validation->run()){
				
				$desc = $this->input->post('desc');
				$company_name = $this->input->post('company_name');
				$position = $this->input->post('position');
				$from_date = $this->input->post('from_date');
				
				$to_date = $this->input->post('to_date');
				$data2 = array(
					'company_name' => $company_name,
					'position' => $position,
					'from_date' => $from_date,
					'to_date' => $to_date,
					'candidate_id'=>$user_id,
					'description' => $desc
					);
				$this->work_experience_model->create($data2);
			}

			}
			$input = array();
			$input['where'] = array('candidate_id'=>$user->id);
			$knlamviec = $this->work_experience_model->get_list($input);
			$this->data['knlamviec'] = $knlamviec;


		$this->data['temp'] = 'site/candidate/view';
		$this->load->view('site/layout',$this->data);
	}

	function del_kn(){
		$this->load->model('work_experience_model');
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$this->work_experience_model->deleteOne($id);
		redirect(base_url('candidate/view'));

	}

	function edit_account(){
		$user_id = $this->session->userdata('candidate_id_login');
		$info = $this->member_candidate_model->get_info($user_id);
		//lấy ra thành phố
		$this->load->model('city_model');
		$input = array();
		//$input['where'] = array('id'=>$info->city_id);
		$city = $this->city_model->get_list($input);
		$this->data['city'] = $city;
		$this->data['info'] = $info;

		if($this->input->post()){
			$this->form_validation->set_rules('full_name','Tên đầy đủ','required');
			if($this->form_validation->run()){
				
				$full_name = $this->input->post('full_name');
				$gender = $this->input->post('gender');
				$city_id = $this->input->post('city_id');
				$phone = $this->input->post('phone');
				$address = $this->input->post('address');
				//lấy tên file ảnh, upload ảnh đại diện
				$this->load->library('upload_library');
				$upload_path = './uploads/candidate';
				$upload_data = $this->upload_library->upload($upload_path, 'image');
				if(isset($upload_data['file_name'])){
					$image_link = $upload_data['file_name'];
				}

				$data = array(
					'full_name' => $full_name,
					'gender' => $gender,
					'city_id' => $city_id,
					'phone' =>$phone,
					'address' =>$address
					);
				
				if($image_link!=''){
					$data['image'] = $image_link;
				}

				$this->member_candidate_model->update($user_id,$data);
			}
			redirect(base_url('candidate/edit_account'));

		}

		$this->data['temp'] = 'site/candidate/edit_account';
		$this->load->view('site/layout',$this->data);
	}

	function logout(){
		if($this->session->userdata('candidate_id_login')){
				$this->session->unset_userdata('candidate_id_login');
				redirect(base_url('candidate/login'));
			}
	}
}