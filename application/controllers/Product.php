<?php
Class Product extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('product_model');
	}

	function category(){
		//lấy ra id của danh mục
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$this->load->model('category_model');
		$category = $this->category_model->get_info($id);
		if(!$category){
			redirect();
		}
		$this->data['category'] = $category;
		$input = array();
		//kiểm tra tồn tại danh mục cha
		if($category->parent==0){
			$input_category= array();
			$input_category['where'] = array('parent'=>$id);
			$category_subs = $this->category_model->get_list($input_category);
			if(!empty($category_subs)){ // nếu danh mục hiện tại có danh mục con
				$category_subs_id = array();
				foreach($category_subs as $sub){
					$category_subs_id[] = $sub->id;
				}
				$this->db->where_in('category_id', $category_subs_id); //lấy tất cả sản phẩm của danh mục con
				//print_r($category_subs_id);
			}else{
				$input['where'] = array('category_id'=>$id);
			}
		}else{
			$input['where'] = array('category_id'=>$id);
		}
		
		//lấy ra danh sách sản phẩm trong danh mục
		$this->load->library('pagination');
		//lấy ra tổng tất cả các sản phẩm
		$total_row = $this->product_model->get_total($input);
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = base_url('product/category/'.$id);
		$config['total_rows']  = $total_row;
		$config['per_page']    = 5;
		$config['uri_segment'] = 4;
		$config['next_link']   = "Next page";
		$config['prev_link']   = "Prev page";
		$this->pagination->initialize($config);

		$segment = $this->uri->segment(4);
		$segment = intval($segment);
		
		
		$input["limit"] = array($config['per_page'], $segment);
		
		//lấy danh sách sản phẩm
		if(isset($category_subs_id)){
			$this->db->where_in('category_id', $category_subs_id);
		}
		$list = $this->product_model->get_list($input);
		$this->data['list'] = $list;

		//hiển thị ra view
		$this->data['temp'] = "site/product/category";
		$this->load->view('site/layout',$this->data);
	}

	function detail(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->product_model->get_info($id);
		$this->data['info'] = $info;

		$image_list = @json_decode($info->image_list);
		$this->data['image_list'] = $image_list;
		//cập nhật lượt xem sản phẩm
		$data = array();
		$data['view'] = $info->view + 1;
		$this->product_model->update($info->id,$data);

		$this->data['temp'] = "site/product/detail";
		$this->load->view("site/layout", $this->data);
	}
	//tìm kiếm theo tên sản phẩm
	function search(){
		$key = $this->input->get('key');
		$this->data['key'] = trim($key);
		$input = array();
		$input['like'] = array('name',$key);
		$list = $this->product_model->get_list($input);
		$this->data['list'] = $list;

		//load view
		$this->data['temp'] = "site/product/search";
		$this->load->view("site/layout", $this->data);
	}
}