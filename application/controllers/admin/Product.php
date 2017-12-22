<?php
Class Product extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('product_model');
		$this->load->model('category_model');
	}

	function index(){
		$this->load->helper('my_date_helper');
		//Tạo thông báo 
		$this->load->library('pagination');
		
		//lấy ra tổng tất cả các sản phẩm
		$total_row = $this->product_model->get_total();
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = admin_url('product/index');
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
		//kiểm tra xem có lọc sản phẩm không, thêm điều kiện
		$category_id = $this->input->get('category_id');
		$category_id = intval($category_id);
		$input['where'] = array();
		if($category_id > 0){
			$input['where']['category_id'] = $category_id; 
		}
		$name = $this->input->get('name');
		if($name){
			$input['like'] = array('name', $name);
		}

		//lấy danh sách sản phẩm
		$list = $this->product_model->get_list($input);
		$this->data['list'] = $list;
		
		//lấy ra danh sách danh mục sản phẩm
		$input = array();
		$input['where'] = array('parent'=>0);
		$category = $this->category_model->get_list($input);
		foreach($category as $row){
			$input['where'] = array('parent'=> $row->id);
			$subs = $this->category_model->get_list($input); // lấy ra danh mục con
			$row->subs = $subs; 
		}

		$this->data['category'] = $category;

		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = "admin/product/index";
		$this->load->view("admin/main", $this->data);
	}

	function add(){
		
		if($this->input->post()){
			$this->form_validation->set_rules('name','Tên dịch vụ','required|min_length[6]');
			$this->form_validation->set_rules('price','Giá dịch vụ','required');
			$this->form_validation->set_rules('scores','Điểm cộng','required|numeric');
				if($this->form_validation->run()){
				//tiến hành thêm vào csdl
				$name = $this->input->post('name');
				$cat_name = $this->input->post('cat_name');
				$cat_name = slug($name);
				$price = $this->input->post('price');
				$price = str_replace(',', '', $price);
				if($price==""){$price=0;}
				$discount = $this->input->post('discount');
				$scores = $this->input->post('scores');
				$intro = $this->input->post('intro');
				$status = $this->input->post('status');	

				$data = array(
					'name'=> $name,
					'cat_name' => $cat_name,
					'price' => intval($price),
					'discount' => $discount,
					'scores' => $scores,
					'intro' => $intro,
					'status' => $status,
					'created' => now()
					);
				
				if($this->product_model->create($data)){
					// tạo nội dung thông báo
					$this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công !');
				}
				else{
					$this->session->set_flashdata('message', 'Lỗi dữ liệu, không thêm được !');
				}
				//chuyển sang trang danh sách admin
				redirect(admin_url('product'));
			}

			
		}

		//lấy ra danh mục cha
			$input = array();
			$input['where'] = array('parent' => 0);
			$list = $this->category_model->get_list($input);
			
			foreach($list as $row){
			$input['where'] = array('parent'=> $row->id);
			$subs = $this->category_model->get_list($input); // lấy ra danh mục con
			$row->subs = $subs; 
			}


			$this->data['list'] = $list;


		$this->data['temp'] = "admin/product/add";
		$this->load->view("admin/main", $this->data);
	}

	function edit(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);

		$info = $this->product_model->get_info($id);
		if (!$info) {
			$this->session->set_flashdata('message','Không tồn tại sản phẩm này');
			redirect(admin_url('product'));
		}
		$this->data['info'] = $info;

		if($this->input->post()){
			$this->form_validation->set_rules('name','Tên dịch vụ','required|min_length[6]');
			$this->form_validation->set_rules('price','Giá dịch vụ','required');
			$this->form_validation->set_rules('scores','Điểm cộng','required|numeric');
				if($this->form_validation->run()){
				//tiến hành thêm vào csdl
				$name = $this->input->post('name');
				$cat_name = $this->input->post('cat_name');
				$cat_name = slug($name);
				$price = $this->input->post('price');
				$price = str_replace(',', '', $price);
				if($price==""){$price=0;}
				$discount = $this->input->post('discount');
				$scores = $this->input->post('scores');
				$intro = $this->input->post('intro');
				$status = $this->input->post('status');

				$data = array(
					'name'=> $name,
					'category_id'=> $category_id,
					'cat_name' => $cat_name,
					'price' => intval($price),
					'discount' => $discount,
					'scores' => $scores,
					'intro' => $intro,
					'status' => $status,
					);

				$this->product_model->update($id, $data);
					// tạo nội dung thông báo
				$this->session->set_flashdata('message', 'Sửa dữ liệu thành công !');
				//chuyển sang trang danh sách danh mục
				redirect(admin_url('product'));
			}

			
		}


		$this->data['temp'] = 'admin/product/edit';
		$this->load->view('admin/main', $this->data);
	}

	function del(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);

		$info = $this->product_model->get_info($id);
		if (!$info) {
			$this->session->set_flashdata('message','Không tồn tại sản phẩm này');
			redirect(admin_url('product'));
		}
		$this->data['info'] = $info;
		$this->product_model->deleteOne($id);
		//xóa ảnh sản phẩm đã upload trên hệ thống kèm sản phẩm
		$image_link = './uploads/product/'.$info->image;
		if(file_exists($image_link)){
			unlink($image_link);
		}
		//xóa các ảnh kèm theo của sp
		$image_list = json_decode($info->image_list);
		
		if(is_array($image_list)){
			foreach ($image_list as $img) {
				$image_link = './uploads/product/'.$img; 
				if(file_exists($image_link)){
					unlink($image_link);
				}
			}

		}

		$this->session->set_flashdata('message', 'Xóa dữ liệu thành công !');
		//chuyển sang trang danh sách danh mục
		redirect(admin_url('product'));
	}

	function delete_all()
    {
        $ids = $this->input->post('id[]');
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
        $this->session->set_flashdata('message','Xóa tùy chọn thành công');
        redirect(admin_url('product'));
    }
   
    /*
     *Xoa san pham
     */
    private function _del($id)
    {
        $product = $this->product_model->get_info($id);
        if(!$product)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại sản phẩm này');
            redirect(admin_url('product'));
        }
        //thuc hien xoa san pham
        $this->product_model->deleteOne($id);
    }


}//end class