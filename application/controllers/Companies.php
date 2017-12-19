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
				//mã kích hoạt tài khoản
				$activation=md5($email.time());
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
					'token_key' => $activation,
					'created' =>now()
					);
		
			$this->member_company_model->create($data);

			//gửi email xác nhận đăng ký
			$config = array(
    		'protocol' => 'smtp',
    		'smtp_host' => 'ssl://smtp.googlemail.com',
    		'smtp_port' => 465,
    		'smtp_user' => 'an.vitaminmy@gmail.com',
    		'smtp_pass' => 'thanhan123',
    		'mailtype'  => 'html', 
    		'charset' => 'utf-8',
			);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from('admin@lienketso.vn','Lienketso system');
			$this->email->to('thanhan1507@gmail.com');
			$this->email->subject('Thông báo email');
			$this->email->message('Bạn đăng ký thành công tài khoản');
			$this->email->send();

			redirect(base_url());			
		}
	}

	$this->data['temp'] = 'site/companies/register';
	$this->load->view('site/layout',$this->data);
	}

	//kích hoạt tài khoản
	function activation(){

		if(!empty($_GET['code']) && isset($_GET['code']))
		{
		$code=$_GET['code'];
		$input = array();
		$where = array('token_key'=>$code);
		$user = $this->member_company_model->get_info_rule($where);
		$id = $user->id;
		if($user){
			$data = array(
				'status'=>1
				);
			$this->member_company_model->update($id,$data);
			$this->session->set_userdata('company_id_login', $id);
			redirect(base_url('companies/activation'));
		}
		else{
			redirect();
		}
		}

		$this->data['temp'] = 'site/companies/activesuccess';
		$this->load->view('site/layout',$this->data);

	}

		//đăng nhập
		function check_login(){
		$user = $this->_get_userinfo();
		if($user){
			return true;
		}
		else{
			$this->form_validation->set_message(__FUNCTION__,'Email hoặc mật khẩu không đúng !');
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
				$this->session->set_userdata('company_id_login', $user->id);
				redirect(base_url());
			}
		}

		$this->data['temp'] = 'site/companies/login';
		$this->load->view('site/layout',$this->data);
	}

		//lấy ra thông tin thành viên
	private function _get_userinfo(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password = md5($password);
		$where = array('email'=>$email, 'password'=>$password);
		$user = $this->member_company_model->get_info_rule($where);
		return $user;
	}

	function view(){
		//thông báo dữ liệu
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$company_id = $this->session->userdata('company_id_login');
		$info_company = $this->member_company_model->get_info($company_id);
		if(!$info_company){
			redirect(base_url('companies/login'));
		}
		$this->data['info_company'] = $info_company;
		//lấy ra tỉnh thành của company
		$this->load->model('city_model');
		$comcity_id = $info_company->city_id;
		$citycompany = $this->city_model->get_info($comcity_id);
		$this->data['citycompany'] = $citycompany;
		//lấy ra quy mô company
		$this->load->model('company_size_model');
		$comsize_id = $info_company->company_size_id;
		$companysize = $this->company_size_model->get_info($comsize_id);
		$this->data['companysize'] = $companysize;

		$this->data['temp'] = 'site/companies/view';
		$this->load->view('site/layout',$this->data);
	}
	function edit(){
		$company_id = $this->session->userdata('company_id_login');
		$info_company = $this->member_company_model->get_info($company_id);
		if(!$info_company){
			redirect(base_ur());
		}
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
					'company_name'=>$company_name,
					'company_phone'=>$company_phone,
					'company_address'=>$company_address,
					'city_id' => $city_id,
					'company_size_id' => $company_size_id,
					'description' => $description,
					'website' => $website,
					'company_fax' => $company_fax,
					'company_contact' => $company_contact,
					'contact_title' => $contact_title,
					'contact_email' => $contact_email,
					'contact_phone' => $contact_phone,
					'updated' =>now()
					);
				
				if($image_link!=''){
					$data['logo_url'] = $image_link;
				}
			$this->member_company_model->update($company_id,$data);
			$this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công !');
			redirect(base_url('nha-tuyen-dung'));			
		}
	}

		$this->data['info_company'] = $info_company;
		$this->data['temp'] = 'site/companies/edit';
		$this->load->view('site/layout',$this->data);
	}

	function postjobs(){

		//cap bac
		$this->load->model('level_model');
		$level = $this->level_model->get_list();
		$this->data['level'] = $level;
		//loai công việc
		$this->load->model('job_type_model');
		$jobtype = $this->job_type_model->get_list();
		$this->data['jobtype'] = $jobtype;
		//mức lương
		$this->load->model('salary_model');
		$salary = $this->salary_model->get_list();
		$this->data['salary'] = $salary;
		//Kinh nghiệm
		$this->load->model('require_experience_model');
		$experience = $this->require_experience_model->get_list();
		$this->data['experience'] = $experience;
		//Bằng cấp
		$this->load->model('literacy_model');
		$literacy = $this->literacy_model->get_list();
		$this->data['literacy'] = $literacy;
		//Danh mục nghành nghề
		$this->load->model('career_model');
		$career = $this->career_model->get_list();
		$this->data['career'] = $career;
		//địa điểm làm việc
		$this->load->model('city_model');
		$city = $this->city_model->get_list();
		$this->data['city'] = $city;

		//thực hiện lưu dữ liệu
		if($this->input->post()){
			$this->form_validation->set_rules('title','Chức danh','required|min_length[6]');
			$this->form_validation->set_rules('amount','Số lượng','required|numeric');
			$this->form_validation->set_rules('level_id','Cấp bậc','required');
			$this->form_validation->set_rules('type_id','Loại hình công việc','required');
			$this->form_validation->set_rules('salary_id','Mức lương tháng','required');
			$this->form_validation->set_rules('require_experience_id','Kinh nghiệm làm việc','required');
			$this->form_validation->set_rules('literacy_id','Bằng cấp','required');
			$this->form_validation->set_rules('career_id','Lĩnh vực cần tuyển','required');
			if($this->form_validation->run()){
				$title = $this->input->post('title');
				$cat_name = slug($title);
				$amount = $this->input->post('amount');
				$level_id = $this->input->post('level_id');
				$salary_id = $this->input->post('salary_id');
				$type_id = $this->input->post('type_id');
				$require_experience_id = $this->input->post('require_experience_id');
				$literacy_id = $this->input->post('literacy_id');
				$career_id = $this->input->post('career_id');
				$gender = $this->input->post('gender');
				$city_id = $this->input->post('city_id');
				$content = $this->input->post('content');
				$benefit = $this->input->post('benefit');
				$job_requirement = $this->input->post('job_requirement');
				$profile = $this->input->post('profile');
				$end_date = $this->input->post('end_date');
				$end_date = date_to_int($end_date);
				$language = $this->input->post('language');
				$company_id = $this->session->userdata('company_id_login');
				$start_date = strtotime('now');
				$data = array(
					'title' => $title,
					'cat_name' => $cat_name,
					'amount' => $amount,
					'level_id' => $level_id,
					'salary_id' => $salary_id,
					'require_experience_id' => $require_experience_id,
					'literacy_id' => $literacy_id,
					'career_id' => $career_id,
					'type_id' => $type_id,
					'gender' => $gender,
					'city_id' => $city_id,
					'content' => $content,
					'benefit' => $benefit,
					'job_requirement' => $job_requirement,
					'profile' => $profile,
					'end_date' => $end_date,
					'language' => $language,
					'company_id' => $company_id,
					'start_date' => $start_date
					);
				$this->load->model('recruitment_model');
				$this->recruitment_model->create($data);
				$this->session->set_flashdata('message', 'Đăng tin tuyển dụng thành công !');
				redirect(base_url('nha-tuyen-dung/danh-sach-tin-dang'));
			}
		}

		$this->data['temp'] = 'site/companies/postjobs';
		$this->load->view('site/layout',$this->data);
	}


	function check_password(){
		$pass = $this->_get_passinfo();
		if($pass){
			return true;
		}
		else{
			$this->form_validation->set_message(__FUNCTION__,'Mật khẩu cũ không đúng !');
			return false;
		}
	}
	private function _get_passinfo(){
		$oldpassword = $this->input->post('oldpassword');
		$oldpassword = md5($oldpassword);
		$where = array('password'=>$oldpassword);
		$pass = $this->member_company_model->get_info_rule($where);
		return $pass;
	}

	function change_pass(){
		$company_id = $this->session->userdata('company_id_login');
		$info_company = $this->member_company_model->get_info($company_id);
		if(!$info_company){
			redirect(base_ur());
		}
		if($this->input->post()){
		$this->form_validation->set_rules('oldpassword','Mật khẩu cũ','required|min_length[6]|callback_check_password');
			$this->form_validation->set_rules('password','Mật khẩu mới','required|min_length[6]');
			$this->form_validation->set_rules('repassword','Nhập lại mật khẩu mới','required|matches[password]');
			if($this->form_validation->run()){
				$oldpassword = $this->input->post('oldpassword');
				$password = $this->input->post('password');
				//$password = md5($password);
				$repassword = $this->input->post('repassword');
				$data = array(
					'password'=>md5($password)
					);
				$this->member_company_model->update($company_id,$data);
				$this->session->set_flashdata('message', 'Đổi mật khẩu thành công !');
				redirect(base_url('nha-tuyen-dung'));
			}
		}

		$this->data['temp'] = 'site/companies/change_pass';
		$this->load->view('site/layout',$this->data);
	}

	function candidate_applied(){
		$this->load->model('member_candidate_model');
		$this->load->model('map_candidate_recruitment_model');
		$this->load->model('recruitment_model');
		$this->load->library('pagination');
		$company_id = $this->session->userdata('company_id_login');
		$info_company = $this->member_company_model->get_info($company_id);
		if(!$info_company){
			redirect();
		}

		$input = array();
		$input['where'] = array('company_id'=>$company_id);

		$total_row = $this->map_candidate_recruitment_model->get_total($input);
		$this->data['total_row'] = $total_row;
		$segment = $this->uri->segment(3);
		$segment = intval($segment);

		$config = array();
		$config['base_url']    = home_url('nha-tuyen-dung/ung-vien-nop-ho-so');
		$config['total_rows']  = $total_row;
		$config['per_page']    = 10;
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '<ul class="list-unstyled flex no-column items-center">';
    	$config['full_tag_close'] = '</ul>';
    	$config['num_tag_open'] = '<li class="button linkcss">';
    	$config['num_tag_close'] = '</li>';
    	$config['first_link'] = '&laquo; First';
    	$config['first_tag_open'] = '<li class="prev page"> Last';
    	$config['first_tag_close'] = '</li>';
    	$config['cur_tag_open'] = '<li class="active button">';
    	$config['cur_tag_close'] = '</li>';
		$config['next_link']   = '<span class="button">Trang kế <i class="ion-ios-arrow-right"></i></span>';
		$config['prev_link']   = '<span class="button"><i class="ion-ios-arrow-left"></i> Quay lại</span>';
		$this->pagination->initialize($config);
		

		$input["limit"] = array($config['per_page'], $segment);

		$listapplied = $this->map_candidate_recruitment_model->get_list($input);
		$this->data['listapplied'] = $listapplied;
		$this->data['temp'] = 'site/companies/candidate_applied';
		$this->load->view('site/layout',$this->data);
	}

	function candidate_saved(){

		$this->load->model('member_candidate_model');
		$this->load->model('map_candidate_saved_model');
		$this->load->model('recruitment_model');
		$this->load->model('job_type_model');
		$this->load->model('city_model');
		$this->load->library('pagination');
		$company_id = $this->session->userdata('company_id_login');
		$info_company = $this->member_company_model->get_info($company_id);
		if(!$info_company){
			redirect();
		}

		$input = array();
		$input['where'] = array('company_id'=>$company_id);

		$total_row = $this->map_candidate_saved_model->get_total($input);
		$this->data['total_row'] = $total_row;
		$segment = $this->uri->segment(3);
		$segment = intval($segment);

		$config = array();
		$config['base_url']    = home_url('nha-tuyen-dung/ho-so-da-luu');
		$config['total_rows']  = $total_row;
		$config['per_page']    = 10;
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '<ul class="list-unstyled flex no-column items-center">';
    	$config['full_tag_close'] = '</ul>';
    	$config['num_tag_open'] = '<li class="button linkcss">';
    	$config['num_tag_close'] = '</li>';
    	$config['first_link'] = '&laquo; First';
    	$config['first_tag_open'] = '<li class="prev page"> Last';
    	$config['first_tag_close'] = '</li>';
    	$config['cur_tag_open'] = '<li class="active button">';
    	$config['cur_tag_close'] = '</li>';
		$config['next_link']   = '<span class="button">Trang kế <i class="ion-ios-arrow-right"></i></span>';
		$config['prev_link']   = '<span class="button"><i class="ion-ios-arrow-left"></i> Quay lại</span>';
		$this->pagination->initialize($config);
		

		$input["limit"] = array($config['per_page'], $segment);

		$listsaved = $this->map_candidate_saved_model->get_list($input);
		$this->data['listsaved'] = $listsaved;
		$this->data['temp'] = 'site/companies/candidate_saved';
		$this->load->view('site/layout',$this->data);
	}

	  function delsaved($id){
            $id = $this->uri->rsegment(3);
			$id = intval($id);
            $this->load->model('map_candidate_saved_model');
            $this->map_candidate_saved_model->deleteOne($id);
            redirect(base_url('nha-tuyen-dung/ho-so-da-luu'));
            $this->session->set_flashdata('message', 'Xóa dữ liệu thành công !');

      }

	function logout(){
		if($this->session->userdata('company_id_login')){
				$this->session->unset_userdata('company_id_login');
				redirect(base_url('companies/login'));
			}
	}


}//end class