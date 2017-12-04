<?php
Class Page extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('page_model');
	}

	function view(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$infor = $this->page_model->get_info($id);
		$this->data['infor'] = $infor;

		$this->data['temp'] = 'site/page/view';
		$this->load->view('site/layout', $this->data);
	}

}//end class