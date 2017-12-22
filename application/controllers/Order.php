<?php
Class Order extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('cart');
	}

	function checkout(){
		$carts = $this->cart->contents();
		$total_items = $this->cart->total_items();
		if($total_items <= 0){
			redirect();
		}
		//print_r($carts);
		//tổng số tiền đơn hàng
		$total_amount = 0;
		foreach($carts as $row){
		$total_amount = $total_amount + $row['subtotal'];
		}
		$this->data['total_amount'] = $total_amount;
		//nếu thành viên đăng nhập thì lấy thông tin thành viên
		$this->load->model('user_model');
		
		
		$user = '';
		if($user_id = $this->session->userdata('company_id_login')) {
			$user_id = $this->session->userdata('company_id_login');
			$user = $this->member_company_model->get_info($user_id);
		}else{
			$user_id = 0;
		}
		$this->data['user'] = $user;

		
		if($this->input->post()){
			$this->form_validation->set_rules('company_name','Họ tên','required|min_length[2]');
			$this->form_validation->set_rules('company_address','Địa chỉ công ty','required|min_length[6]');
			$this->form_validation->set_rules('company_contact','Tên người liên hệ','required');
			$this->form_validation->set_rules('contact_email','Email người liên hệ','required|valid_email');
			$this->form_validation->set_rules('contact_phone','Số điện thoại','required|numeric');
			$this->form_validation->set_rules('payment','Phương thức thanh toán','required');
			if($this->form_validation->run()){
				$company_name = $this->input->post('company_name');
				$company_address = $this->input->post('company_address');
				$company_contact = $this->input->post('company_contact');
				$contact_email = $this->input->post('contact_email');
				$contact_phone = $this->input->post('contact_phone');
				$message = $this->input->post('message');
				$payment = $this->input->post('payment');
				$data = array(
					'status'=>0, //trạng thái thanh toán
					'company_id'=>$user_id, //id thành viên
					'company_name'=>$company_name,
					'company_address'=>$company_address,
					'company_contact'=>$company_contact,
					'contact_email'=>$contact_email,
					'contact_phone'=>$contact_phone,
					'message'=>$message,
					'amount'=>$total_amount,
					'payment'=>$payment, //phương thức thanh toán
					'created' =>now()
					);
			//thêm dữ liệu vào bảng transaction'
			$this->load->model('transaction_model');
			$this->transaction_model->create($data);
			$transaction_id = $this->db->insert_id(); // lấy ra id của giao dịch vừa thêm vào
			//thêm dữ liệu vào bảng order_list
			$this->load->model('order_model');
			foreach($carts as $row){
				$data = array(
					'transaction_id' => $transaction_id,
					'company_id' => $user_id,
					'product_id' => $row['id'],
					'qty' => $row['qty'],
					'amount' => $row['subtotal'],
					'scores' => $row['scores'],
					'status' => 0
					);
				$this->order_model->create($data);
			}
			
			//xóa thông tin đơn hàng trong giỏ hàng
			$this->cart->destroy();
			//nếu thanh toán trực tiếp thì đặt hàng luôn
			if($payment=='tructiep' || $payment=='chuyenkhoan'){
				redirect(base_url('order/order_success'));
			}
			//nếu chọn cổng thanh toán
			elseif(in_array($payment, array('nganluong','baokim'))){
				//load thư viện thanh toán
				$this->load->library('payment/'.$payment.'_payment');
				//chuyển sang trang cổng thanh toán
				$this->{$payment.'_payment'}->payment($transaction_id,$total_amount);
			}

			}

		}
		
		$this->data['temp'] = 'site/order/checkout';
		$this->load->view('site/layout',$this->data);

	}

	function order_success(){

		$this->data['temp'] = 'site/order/order_success';
		$this->load->view('site/layout',$this->data);
	}

	//nhận kết quả trả về từ cổng thanh toán

	function result(){
		$this->load->library('payment/baokim_payment');
		$this->load->model('transaction_model');
		$transaction_id = $this->input->post('order_id'); 
		//lấy thông tin giao dịch
		$transaction = $this->transaction_model->get_info($transaction_id);
		if(!$transaction){
			redirect();
		}
		//gọi tới hàm kiểm tra trạng thái thanh toán
		$status = $this->baokim_payment->result($transaction_id,$transaction->amount);
		if($status == TRUE){
			//cập nhật lại trạng thái đơn hàng là đã thanh toán
			$data = array();
			$data = array(
				'status' => 1
				);
			$this->transaction_model->update($transaction_id,$data);
		}elseif($status==false){ //thanh toán thất bại
			$data = array();
			$data = array(
				'status' => 2
				);
			$this->transaction_model->update($transaction_id,$data);
		}
	}

}//end class