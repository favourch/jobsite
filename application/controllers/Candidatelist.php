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
}