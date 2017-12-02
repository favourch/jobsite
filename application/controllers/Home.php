<?php
Class Home extends MY_Controller{
	function index(){
		$this->load->model('slide_model');
		$this->load->model('news_model');
		$this->load->model('career_model');
		$this->load->model('partners_model');
		$this->load->model('recruitment_model');
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
}