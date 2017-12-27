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

		//việc làm gợi ý
		$input = array();
		$input['where'] = array('status'=>3);
		$input['limit'] = array(16,0);
		$recommentjobs = $this->recruitment_model->get_list($input);
		$this->data['recommentjobs'] = $recommentjobs;

		$cityinfo = $this->city_model->get_list();
		$this->data['cityinfo'] = $cityinfo;

		//slide
		$slide_list = $this->slide_model->get_list();
		$this->data['slide_list'] = $slide_list;
		// news home
	
		$input['where'] = array('status'=>1);
		$input['limit'] = array(3 , 0);
		$newshome_list = $this->news_model->get_list($input);
		$this->data['newshome_list'] = $newshome_list;

		//category home
		$input = array('is_online'=>1);
		$category_home = $this->career_model->get_list($input);
		$this->data['category_home'] = $category_home;

		//partner home
		$input = array('status'=>1);
		$partners = $this->partners_model->get_list($input);
		$this->data['partners'] = $partners;

		//quảng cáo home
		$this->load->model('adver_model');
		$input['where'] = array('status'=>1);
		$input['limit'] = array(1,0);
		$adverone = $this->adver_model->get_list($input);
		$this->data['adverone'] = $adverone;

		$input['where'] = array('status'=>2);
		$input['limit'] = array(4,0);
		$advertwo = $this->adver_model->get_list($input);
		$this->data['advertwo'] = $advertwo;

		
		$this->data['temp'] = 'site/home/index';
		$this->load->view('site/layout', $this->data);
	}

	function find_jobs(){
		$this->load->model('recruitment_model');
		$this->load->model('member_company_model');
		$this->load->model('city_model');
		$this->load->model('job_type_model');
		$this->load->model('salary_model');
		$this->load->library('pagination');
		$this->load->model('career_model');
		$this->load->model('require_experience_model');
		$this->load->model('level_model');
		$listlevel = $this->level_model->get_list();
		$this->data['listlevel'] = $listlevel;
		$listexperience = $this->require_experience_model->get_list();
		$this->data['listexperience'] = $listexperience;
		$listcity = $this->city_model->get_list();
		$this->data['listcity'] = $listcity;
		$listsalary = $this->salary_model->get_list();
		$this->data['listsalary'] = $listsalary;
		$listcareer = $this->career_model->get_list();
		$this->data['listcareer'] = $listcareer;

		$input = array();

		if($this->input->get()){
		$keyword = $this->input->get('keyword');
		$careerid = $this->input->get('careerid');
		$cityid = $this->input->get('cityid');
		$salaryid = $this->input->get('salaryid');
		$experienceid = $this->input->get('experienceid');
		$levelid = $this->input->get('levelid');
		$this->data['keyword'] = $keyword;
		$this->data['careerid'] = $careerid;
		$this->data['cityid'] = $cityid;



		if($keyword){
			$input['like'] = array('title', $keyword);
		}
		if($careerid!=0){
			$input['where'] = array('career_id'=>$careerid);
		}
		if($cityid!=0){
			$input['where'] = array('city_id'=>$cityid);
		}
		if($keyword && $careerid!=0){
			$input['like'] = array('title', $keyword);
			$input['where'] = array('career_id'=>$careerid);
		}
		if($keyword && $cityid!=0){
			$input['like'] = array('title', $keyword);
			$input['where'] = array('city_id'=>$cityid);
		}
		if($careerid!=0 && $cityid!=0){
			$input['where'] = array(
				'career_id'=>$careerid,
				'city_id' => $cityid
				);
		}
		if(!empty($keyword) && $careerid!=0 && $cityid!=0){
			$input['like'] = array('title', $keyword);
			$input['where'] = array(
				'career_id'=>$careerid,
				'city_id' => $cityid
				);
		}

		if($salaryid!=0){
			$input['where'] = array('salary_id'=>$salaryid);
		}
		if($experienceid!=0){
			$input['where'] = array('require_experience_id'=>$experienceid);
		}
		if($levelid!=0){
			$input['where'] = array('level_id'=>$levelid);
		}

		$total_row = $this->recruitment_model->get_total($input);
		$this->data['total_row'] = $total_row;
		$segment = $this->uri->segment(3);
		$segment = intval($segment);
		$config = array();
		$config['base_url']    = home_url('home/find_jobs?keyword='.$keyword.'&careerid='.$careerid.'&cityid='.$cityid);
		$config['total_rows']  = $total_row;
		$config['per_page']    = 20;
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

		$listjobs = $this->recruitment_model->get_list($input);
		$this->data['listjobs'] = $listjobs;
	}
		
		$care = $this->input->post('careid');
		if($care){
		$input['where'] = array('career_id'=>$care);
		}
		$listjobs = $this->recruitment_model->get_list($input);
		$this->data['listjobs'] = $listjobs;


		$this->data['temp'] = 'site/home/find_jobs';
		$this->load->view('site/layout', $this->data);
	}

}//end class