<?php
Class Career extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('career_model');
		$this->load->model('recruitment_model');
	}

	function index(){
		$canidateid = $this->session->userdata('candidate_id_login');
		$this->data['canidateid'] = $canidateid;
		//lấy ra id của danh mục
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$this->load->model('map_recruitment_model');
		$this->load->model('city_model');
		$this->load->model('member_company_model');
		$this->load->model('salary_model');
		$category = $this->career_model->get_info($id);
		if(!$category){
			redirect();
		}
		$this->data['category'] = $category;
		$input = array();
		$input["where"] = array('career_id'=>$id);
		//lấy ra danh sách việc làm trong danh mục
		$this->load->library('pagination');
		//lấy ra tổng tất cả các sản phẩm
		$total_row = $this->recruitment_model->get_total($input);
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = home_url('career/index/'.$id);
		//$config['base_url'] = home_url('viec-lam/'.$category->cat_name.'-d'.$id);
		$config['total_rows']  = $total_row;
		$config['per_page']    = 10;
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<ul class="list-unstyled flex no-column items-center">';
    	$config['full_tag_close'] = '</ul>';
    	$config['num_tag_open'] = '<li class="button linkcss">';
    	$config['num_tag_close'] = '</li>';
    	$config['first_link'] = '&laquo; First';
    	$config['first_tag_open'] = '<li class="prev page">';
    	$config['first_tag_close'] = '</li>';
    	$config['cur_tag_open'] = '<li class="active button">';
    	$config['cur_tag_close'] = '</li>';
		$config['next_link']   = '<span class="button">Trang kế <i class="ion-ios-arrow-right"></i></span>';
		$config['prev_link']   = '<span class="button"><i class="ion-ios-arrow-left"></i> Quay lại</span>';
		$this->pagination->initialize($config);

		$segment = $this->uri->segment(4);
		$segment = intval($segment);

		
		if($this->input->post()){
		$categoryid = $this->input->post('categoryid');
		$input['where'] = array('career_id'=>$categoryid);
		}
		

			$select = $this->input->post('orderlist');
			if($select==1){
				$input['order'] = array('salary_id','desc');
			}
			if($select==2){
				$input['order'] = array('salary_id','asc');
			}
			if($select==3){
				$input['order'] = array('id','asc');
			}
		

		$input["limit"] = array($config['per_page'], $segment);
		
		$list = $this->recruitment_model->get_list($input);
		$this->data['list'] = $list;

		//danh mục việc làm
		$careerlist = $this->career_model->get_list();
		$this->data['careerlist'] = $careerlist;
		$this->load->model('job_type_model');
		$jobtype = $this->job_type_model->get_list();
		$this->data['jobtype'] = $jobtype;

		//hiển thị ra view
		$this->data['temp'] = "site/career/index";
		$this->load->view('site/layout',$this->data);
	}

	function view(){
		$this->load->model('map_recruitment_model');
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->recruitment_model->get_info($id);
		$this->data['info'] = $info;
		$canid = $this->session->userdata('candidate_id_login');
		$where = array('recruitment_id'=>$info->id, 'candidate_id'=>$canid);
		
		$maprecruitment = $this->map_recruitment_model->get_info_rule($where);
		$this->data['maprecruitment'] = $maprecruitment;

		$image_list = @json_decode($info->image_list);
		$this->data['image_list'] = $image_list;
		$this->load->model('member_company_model');
		$company = $this->member_company_model->get_info($info->company_id);
		$this->data['company'] = $company;

		$this->load->model('city_model');
		$city = $this->city_model->get_info($info->city_id);
		$this->data['city'] = $city;

		$this->load->model('salary_model');
		$salary = $this->salary_model->get_info($info->salary_id);
		$this->data['salary'] = $salary;

		$this->load->model('level_model');
		$level = $this->level_model->get_info($info->level_id);
		$this->data['level'] = $level;

		$this->load->model('career_model');
		$career = $this->career_model->get_info($info->career_id);
		$this->data['career'] = $career;

		//cập nhật lượt xem việc làm
		$data = array();
		$data['view'] = $info->view + 1;
		$this->recruitment_model->update($info->id,$data);

		//việc làm cùng công ty
		$input = array();
		$input['where'] = array('company_id'=>$info->company_id);
		$similarjob = $this->recruitment_model->get_list($input);
		$this->data['similarjob'] = $similarjob;

		$this->data['temp'] = "site/career/view";
		$this->load->view("site/layout", $this->data);
	}

	function submitjob(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$this->load->model('member_company_model');
		$jobname = $this->recruitment_model->get_info($id);
		$this->data['jobname'] = $jobname;

		$company = $this->member_company_model->get_info($jobname->company_id);
		$this->data['company'] = $company;
		$companyid = $company->id;
		
		$user_id = $this->session->userdata('candidate_id_login');
		$this->load->model('member_candidate_model');
		$candidate = $this->member_candidate_model->get_info($user_id);
		$this->data['candidate'] = $candidate;
		$oldcv = $candidate->cv_upload;

		if($this->input->post()){
			$this->form_validation->set_rules('phone','Số điện thoại','required|min_length[6]');
			if($this->form_validation->run()){
				$phone = $this->input->post('phone');
				$uploadcv = $this->input->post('cv_upload');
				if($uploadcv==1){
					$uploadcv = $oldcv;
				}

				$this->load->library('upload_library');
				$upload_path = './uploads/candidatecv';
				$upload_data = $this->upload_library->upload($upload_path, 'cvupload');
				if(isset($upload_data['file_name'])){
					$image_link = $upload_data['file_name'];
				}
				if($uploadcv==2){
					$uploadcv = $image_link;
				}

				$data = array(
					'recruitment_id'=> $id,
					'candidate_id'=> $user_id,
					'company_id' => $companyid,
					'phone' => $phone,
					'cv_upload' => $uploadcv,
					'apply_date' => now()
					);
			$this->load->model('map_candidate_recruitment_model');
			$this->map_candidate_recruitment_model->create($data);
			$this->session->set_flashdata('message', 'Nộp hồ sơ thành công !');
			redirect(base_url('ung-vien'));
			}
		}

		$this->data['temp'] = "site/career/submitjob";
		$this->load->view("site/layout", $this->data);
	}	

	//tìm kiếm theo tên sản phẩm
	function search(){
		$key = $this->input->get('key');
		$this->data['key'] = trim($key);
		$input = array();
		$input['like'] = array('name',$key);
		$list = $this->product_model->get_list($input);
		$this->data['list'] = $list;

		//load view
		$this->data['temp'] = "site/product/search";
		$this->load->view("site/layout", $this->data);
	}
}