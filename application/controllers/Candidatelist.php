<?php
Class Candidatelist extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('member_candidate_model');
	}

	function index(){

		//ứng viên năng động
		$input = array();
		$input['where'] = array('status'=>1);
		$input['limit'] = array(16,0);
		$dynamic = $this->member_candidate_model->get_list($input);
		$this->data['dynamic'] = $dynamic;
		$this->load->model('require_experience_model');
		$this->load->model('career_model');
		$careerlist = $this->career_model->get_list();
		$this->data['careerlist'] = $careerlist;
		$this->load->model('city_model');
		$citylist = $this->city_model->get_list();
		$this->data['citylist'] = $citylist;

		$title = 'Danh sách ứng viên';
		$this->data['title'] = $title;


		$this->data['temp'] = "site/candidatelist/index";
		$this->load->view("site/layout", $this->data);
	}

	function category(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$this->load->model('city_model');
		$this->load->model('career_model');
		$this->load->model('require_experience_model');
		$this->load->model('level_model');
		$this->load->model('literacy_model');
		$this->load->model('salary_model');
		$this->load->model('job_type_model');
		$listracy = $this->literacy_model->get_list();
		$this->data['listracy'] = $listracy;
		$levelist = $this->level_model->get_list();
		$this->data['levelist'] = $levelist;
		$listsalary = $this->salary_model->get_list();
		$this->data['listsalary'] = $listsalary;
		$listex = $this->require_experience_model->get_list();
		$this->data['listex'] = $listex;

		$categories = $this->career_model->get_info($id);
		if(!$categories){
			redirect();
		}
		else{
			$this->data['categories'] = $categories;
		}


		$this->load->library('pagination');

		$input = array();
		$input['where'] = array("career_id"=>$id);

		if($this->input->post()){
			$literacy_id = $this->input->post('literacy_id');
			$level_id = $this->input->post('level_id');
			$salary_id = $this->input->post('salary_id');
			$experience_id = $this->input->post('experience_id');
			if($literacy_id){
				$input['where'] = array('literacy_id'=>$literacy_id);
			}
			if($level_id){
				$input['where'] = array('level_id'=>$level_id);
			}
			if($salary_id){
				$input['where'] = array('salary_id'=>$salary_id);
			}
			if($experience_id){
				$input['where'] = array('experience_id'=>$experience_id);
			}
			if($literacy_id && $level_id){
				$input['where'] = array('level_id'=>$level_id, 'literacy_id'=>$literacy_id);
			}
			if($literacy_id && $level_id && $salary_id){
				$input['where'] = array('level_id'=>$level_id, 'literacy_id'=>$literacy_id, 'salary_id'=>$salary_id);
			}
			if($literacy_id && $level_id && $salary_id && $experience_id){
				$input['where'] = array('level_id'=>$level_id, 'literacy_id'=>$literacy_id, 'salary_id'=>$salary_id, 'experience_id'=>$experience_id);
			}

		}

		$total_row = $this->member_candidate_model->get_total($input);
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = home_url('candidatelist/category/'.$id);
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

		$input["limit"] = array($config['per_page'], $segment);
		$listcandidate = $this->member_candidate_model->get_list($input);
		$this->data['listcandidate'] = $listcandidate;

		$title = $categories->name;
		$this->data['title'] = $title;


		$this->data['temp'] = "site/candidatelist/category";
		$this->load->view("site/layout", $this->data);
	}


	function view(){

		$company_id = $this->session->userdata('company_id_login');
		$this->load->model('member_company_model');
		$company = $this->member_company_model->get_info($company_id);
		$this->data['company'] = $company;

		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$candidate = $this->member_candidate_model->get_info($id);
		$this->data['candidate'] = $candidate;

		//nhà tuyển dụng xem hồ sơ
		$this->load->model('candidate_view_model');
		$where = array('company_id'=>$company_id, 'candidate_id'=>$id);

		if($this->candidate_view_model->check_company($where)){
			$data = array(
				'candidate_id'=>$id,
				'company_id'=>$company_id,
				'created'=> now()
				);
			$this->candidate_view_model->create($data);
		}
		else{
			$data =array();
			$data['view'] = $candidate->view + 1;
			$this->member_candidate_model->update($id,$data);
		}


		$this->load->model('map_candidate_saved_model');
		$where = array('candidate_id'=>$id, 'company_id'=>$company_id);
		$mapcandidate = $this->map_candidate_saved_model->get_info_rule($where);
		$this->data['mapcandidate'] = $mapcandidate;

		$this->load->model('skill_model');
		$input['where'] = array('candidate_id'=>$id);
		$skill = $this->skill_model->get_list($input);
		$this->data['skill'] = $skill;

		$this->load->model('work_experience_model');
		$experience = $this->work_experience_model->get_list($input);
		$this->data['experience'] = $experience;

		$this->load->model('certificate_model');
		$certificare = $this->certificate_model->get_list($input);
		$this->data['certificare'] = $certificare;

		$this->load->model('literacy_model');
		$litid = $candidate->literacy_id;
		$literacy = $this->literacy_model->get_info($litid);
		$this->data['literacy'] = $literacy;

		$this->load->model('require_experience_model');
		$requireex = $this->require_experience_model->get_info($candidate->experience_id);
		$this->data['requireex'] = $requireex;

		$this->load->model('city_model');
		$city = $this->city_model->get_info($candidate->city_id);
		$this->data['city'] = $city;

		$this->load->model('career_model');
		$career = $this->career_model->get_info($candidate->career_id);
		$this->data['career'] = $career;

		$this->load->model('salary_model');
		$salary = $this->salary_model->get_info($candidate->salary_id);
		$this->data['salary'] = $salary;

		$this->load->model('level_model');
		$level = $this->level_model->get_info($candidate->level_id);
		$this->data['level'] = $level;

		$this->load->model('job_type_model');
		$jobtype = $this->job_type_model->get_info($candidate->job_type);
		$this->data['jobtype'] = $jobtype;

		//hồ sơ tương tự
		$input['where'] = array('career_id'=>$candidate->career_id);
		$input['limit'] = array(5,0);
		$semilarcandidate = $this->member_candidate_model->get_list($input);
		$this->data['semilarcandidate'] = $semilarcandidate;

		//ứng viên năng động (status=2)
		$input['where'] = array('status'=>2);
		$input['limit'] = array(5,0);
		$candidate_nd = $this->member_candidate_model->get_list($input);
		$this->data['candidate_nd'] = $candidate_nd;
		//ứng viên mới nhất
		$input['where'] = array('status'=>1);
		$input['limit'] = array(10,0);
		$lastestcandidate = $this->member_candidate_model->get_list($input);
		$this->data['lastestcandidate'] = $lastestcandidate;

		$title = 'Hồ sơ ứng viên '.$candidate->full_name.' : '.$candidate->title;
		$this->data['title'] = $title;

		$this->data['temp'] = "site/candidatelist/view";
		$this->load->view("site/layout", $this->data);
	}

	function view_full(){
		$this->load->helper('download');
		$company_id = $this->session->userdata('company_id_login');
		$this->load->model('member_company_model');
		$company = $this->member_company_model->get_info($company_id);
		$this->data['company'] = $company;
		//không tồn tại thành viên company thì redirect
		if(!$company){
			redirect();
		}
		//tồn tại thành viên nhưng điểm nhỏ hơn 0
		if($company->scores<=0){
			redirect();
		}
		$this->load->model('company_history_model');

		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$candidate = $this->member_candidate_model->get_info($id);
		$this->data['candidate'] = $candidate;

		//lấy ra lịch sử xem
		$where = array('company_id'=>$company_id, 'candidate_id'=>$id);
		$history = $this->company_history_model->get_info_rule($where);
		
		if($history){
			$hisid = $history->id;
			$oldcount = $history->count_view;
			$data = array('count_view'=>$oldcount+1);
			$this->company_history_model->update($hisid,$data);
		}
		else{
		//neu ton tai cong ty, vaf diem cong ty lon hon 1
		if($company && $company->scores>=1){
			$oldscores = $company->scores;
			$data = array(
				'scores'=> $oldscores - 1
			);
			$this->member_company_model->update($company_id,$data);
			
			//tao lich su xem tin tuyen dung co phi
			$data2 = array(
				'company_id' =>$company_id,
				'candidate_id' => $id,
				'scores' => 1,
				'date_end' => date('d'),
				'created' =>now()
				);
			$this->company_history_model->create($data2);
		}
	}
		
		//nếu click nút tải cv
		if($this->input->post('methodpost')){
			$filename = $candidate->cv_upload;
			$path = base_url('uploads/candidatecv');
			force_download($filename, $path);
		}

		//nhà tuyển dụng xem hồ sơ
		$this->load->model('candidate_view_model');
		$where = array('company_id'=>$company_id, 'candidate_id'=>$id);

		if($this->candidate_view_model->check_company($where)){
			$data = array(
				'candidate_id'=>$id,
				'company_id'=>$company_id,
				'created'=> now()
				);
			$this->candidate_view_model->create($data);
		}
		else{
			$data =array();
			$data['view'] = $candidate->view + 1;
			$this->member_candidate_model->update($id,$data);
		}


		$this->load->model('map_candidate_saved_model');
		$where = array('candidate_id'=>$id, 'company_id'=>$company_id);
		$mapcandidate = $this->map_candidate_saved_model->get_info_rule($where);
		$this->data['mapcandidate'] = $mapcandidate;

		$this->load->model('skill_model');
		$input['where'] = array('candidate_id'=>$id);
		$skill = $this->skill_model->get_list($input);
		$this->data['skill'] = $skill;

		$this->load->model('work_experience_model');
		$experience = $this->work_experience_model->get_list($input);
		$this->data['experience'] = $experience;

		$this->load->model('certificate_model');
		$certificare = $this->certificate_model->get_list($input);
		$this->data['certificare'] = $certificare;

		$this->load->model('literacy_model');
		$litid = $candidate->literacy_id;
		$literacy = $this->literacy_model->get_info($litid);
		$this->data['literacy'] = $literacy;

		$this->load->model('require_experience_model');
		$requireex = $this->require_experience_model->get_info($candidate->experience_id);
		$this->data['requireex'] = $requireex;

		$this->load->model('city_model');
		$city = $this->city_model->get_info($candidate->city_id);
		$this->data['city'] = $city;

		$this->load->model('career_model');
		$career = $this->career_model->get_info($candidate->career_id);
		$this->data['career'] = $career;

		$this->load->model('salary_model');
		$salary = $this->salary_model->get_info($candidate->salary_id);
		$this->data['salary'] = $salary;

		$this->load->model('level_model');
		$level = $this->level_model->get_info($candidate->level_id);
		$this->data['level'] = $level;

		$this->load->model('job_type_model');
		$jobtype = $this->job_type_model->get_info($candidate->job_type);
		$this->data['jobtype'] = $jobtype;

		//hồ sơ tương tự
		$input['where'] = array('career_id'=>$candidate->career_id);
		$input['limit'] = array(5,0);
		$semilarcandidate = $this->member_candidate_model->get_list($input);
		$this->data['semilarcandidate'] = $semilarcandidate;

		//ứng viên năng động (status=2)
		$input['where'] = array('status'=>2);
		$input['limit'] = array(5,0);
		$candidate_nd = $this->member_candidate_model->get_list($input);
		$this->data['candidate_nd'] = $candidate_nd;
		//ứng viên mới nhất
		$input['where'] = array('status'=>1);
		$input['limit'] = array(10,0);
		$lastestcandidate = $this->member_candidate_model->get_list($input);
		$this->data['lastestcandidate'] = $lastestcandidate;

		$this->data['temp'] = "site/candidatelist/view_full";
		$this->load->view("site/layout", $this->data);
	}

	function savecandidate(){

			$user_id = $this->session->userdata('company_id_login');
			$id = $this->input->post('cid');
			//echo $id;
			$data = array(
			'candidate_id'=>$id,
			'company_id'=>$user_id,
			'created'=> now()
			);
			$this->load->model('map_candidate_saved_model');
			$this->map_candidate_saved_model->create($data);
	}

}//end class