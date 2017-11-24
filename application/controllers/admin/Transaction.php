<?php 
Class Transaction extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('transaction_model');
	}

	function index(){
		//lấy ra tổng số đơn hàng để phân trang
		$this->load->library('pagination');
		
		//lấy ra tổng tất cả các sản phẩm
		$total_row = $this->transaction_model->get_total();
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = admin_url('transaction/index');
		$config['total_rows']  = $total_row;
		$config['per_page']    = 5;
		$config['uri_segment'] = 4;
		$config['next_link']   = "Next page";
		$config['prev_link']   = "Prev page";
		$this->pagination->initialize($config);

		$segment = $this->uri->segment(4);
		$segment = intval($segment);
		
		$input = array();
		$input["limit"] = array($config['per_page'], $segment);


		$list = $this->transaction_model->get_list($input);
		$this->data['list'] = $list;
		$this->data['temp'] = 'admin/transaction/index';
		$this->load->view('admin/main',$this->data);
	}

	function view(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->transaction_model->get_info($id);
		$this->data['info'] = $info;

		$this->data['temp'] = 'admin/transaction/view';
		$this->load->view('admin/main',$this->data);
	}
}