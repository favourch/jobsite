<?php
Class Home extends MY_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->model('slide_model');
		$this->load->model('news_model');
		$this->load->model('career_model');
		$this->load->model('partners_model');
		$this->load->model('recruitment_model');
		$this->load->model('city_model');

		$cityinfo = $this->city_model->get_list();
		$this->data['cityinfo'] = $cityinfo;
		//slide
		$slide_list = $this->slide_model->get_list();
		$this->data['slide_list'] = $slide_list;
		// news home
		$input = array();
		$input['where'] = array('status'=>1);
		$input['limit'] = array(3 , 0);
		$newshome_list = $this->news_model->get_list($input);
		$this->data['newshome_list'] = $newshome_list;

		//product hot
		$this->load->model('product_model');
		$input = array();
		$input['where'] = array('is_hot'=>1);
		$input['limit'] = array(10,0);
		$producthome_list = $this->product_model->get_list($input);
		$this->data['producthome_list'] = $producthome_list;
		//category home
		$input = array('is_online'=>1);
		$category_home = $this->career_model->get_list($input);
		$this->data['category_home'] = $category_home;

		//partner home
		$input = array('status'=>1);
		$partners = $this->partners_model->get_list($input);
		$this->data['partners'] = $partners;


		$this->data['temp'] = 'site/home/index';
		$this->load->view('site/layout', $this->data);
	}

	function find_jobs(){
		$this->load->model('recruitment_model');
		$this->load->model('member_company_model');
		$this->load->model('city_model');
		$this->load->model('job_type_model');
		$this->load->model('salary_model');
		
		if($this->input->get()){
		$keyword = $this->input->get('keyword');
		$careerid = $this->input->get('careerid');
		$cityid = $this->input->get('cityid');
		$input = array();
		if($keyword){
			$input['like'] = array('title', $keyword);
		}
		elseif($careerid!=0){
			$input['where'] = array('career_id'=>$careerid);
		}
		elseif($cityid!=0){
			$input['where'] = array('city_id'=>$cityid);
		}
		elseif(isset($keyword) && isset($career_id) && isset($cityid)){
			$input['like'] = array('title', $keyword);
			$input['where'] = array(
				'career_id'=>$careerid,
				'city_id' => $cityid
				);
		}

		$listjobs = $this->recruitment_model->get_list($input);
		$this->data['listjobs'] = $listjobs;

		}


		$this->data['temp'] = 'site/home/find_jobs';
		$this->load->view('site/layout', $this->data);
	}

}//end class