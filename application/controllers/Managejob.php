<?php
Class Managejob extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('recruitment_model');
	}
	function index(){
		$input = array();
		$company_id = $this->session->userdata('company_id_login');
		$input['where'] = array('company_id'=>$company_id);

		$info_job = $this->recruitment_model->get_list($input);
		$this->data['info_job'] = $info_job;

		//địa điểm

		$this->data['temp'] = 'site/managejob/index';
		$this->load->view('site/layout',$this->data);
	}

	function edit(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);

		$job_info = $this->recruitment_model->get_info($id);
		$this->data['job_info'] = $job_info;

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

		$this->data['temp'] = 'site/managejob/edit';
		$this->load->view('site/layout',$this->data);
	}

}//end class