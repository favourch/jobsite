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


		$this->data['temp'] = "site/candidatelist/category";
		$this->load->view("site/layout", $this->data);
	}
}