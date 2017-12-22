<?php 
Class Cart extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('cart_model');
		
	}
	function add(){

		//gọi tới thư viện cart
		
		//lấy ra sản phẩm muốn thêm vào giỏ
		$this->load->model('product_model');
		$id = $this->uri->rsegment(3);
		$product = $this->product_model->get_info($id);
		if(!$product){
			redirect();
		}
		//số lượng sản phẩm
		$qty = 1;
		$price = $product->price;
		if($product->discount > 0){
			$price = $product->price - $product->discount;
		}
		//thông tin sản phẩm
		$data = array();
		$data['id'] = $product->id;
		$data['qty'] = $qty;
		$data['scores'] = $product->scores;
		$data['name'] = url_title($product->name);
		$data['image'] = $product->image;
		$data['price'] = $product->price;
		$this->cart->insert($data);
		//chuyển sang trang danh sách giỏ hàng
		redirect(base_url('thong-tin-dich-vu'));
	}
	//hien thi danh sach gio hang
	function index(){
		//thong tin gio hang
		$carts = $this->cart->contents();
		//lay ra tong so san pham trong gio hang
		$total_items = $this->cart->total_items();
		$this->data['total_items'] = $total_items;
		$this->data['carts'] = $carts;

		$this->data['temp'] = 'site/cart/index';
		$this->load->view('site/layout',$this->data);
	}

	function updatecart(){
		$carts = $this->cart->contents();
		foreach($carts as $key=>$row){
			//tổng số lượng mỗi sản phẩm
			$total_qty = $this->input->post('qty_'.$row['id']);
			$data = array();
			$data['rowid'] = $key;
			$data['qty'] = $total_qty;
			$this->cart->update($data);
		}
		//chuyển sang trang danh sách giỏ hàng
		redirect(base_url('cart'));
	}

	function del(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		//trường hợp xóa 1 sản phẩm trong giỏ hàng
		if($id>0){
			$carts = $this->cart->contents();
			
			foreach($carts as $key=>$row){
				if($row['id'] == $id){
			//tổng số lượng mỗi sản phẩm
			$total_qty = $this->input->post('qty_'.$row['id']);
			$data = array();
			$data['rowid'] = $key;
			$data['qty'] = 0;
			$this->cart->update($data);
				}

			}
		}else{
			//xóa toàn bộ sản phẩm
			$this->cart->destroy();
		}
		//chuyển sang trang danh sách giỏ hàng
		redirect(base_url('thong-tin-dich-vu'));
	}



}//end class