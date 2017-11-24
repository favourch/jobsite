<?php
Class News extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('catnews_model');
	}

	function index(){
		$this->load->library('pagination');
		$total_row = $this->news_model->get_total();
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = admin_url('news/index');
		$config['total_rows']  = $total_row;
		$config['per_page']    = 10;
		$config['uri_segment'] = 4;
		$config['next_link']   = "Next page";
		$config['prev_link']   = "Prev page";
		$this->pagination->initialize($config);
		$segment = $this->uri->segment(4);
		$segment = intval($segment);

		$input = array();
		$input["limit"] = array($config['per_page'], $segment);
		$input['where'] = array();
		$title = $this->input->get('title');
		if($title){
			$input['like'] = array('title', $title);
		}
		$cat_id = $this->input->get('cat_id');
		$cat_id = intval($cat_id);
		if($cat_id > 0){
			$input['where']['cat_id'] = $cat_id; 
		}
		$list = $this->news_model->get_list($input);
		$this->data['list'] = $list;


		//danh mục tin
		$input = array();
		$input['where'] = array('parent'=>0);
		$category = $this->catnews_model->get_list($input);
		foreach($category as $row){
			$input['where'] = array('parent'=> $row->id);
			$subs = $this->catnews_model->get_list($input); // lấy ra danh mục con
			$row->subs = $subs; 
		}


		$this->data['category'] = $category;
		
		//thông báo dữ liệu
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = 'admin/news/index';
		$this->load->view('admin/main',$this->data);
	}

	function add(){

		if($this->input->post()){
			$this->form_validation->set_rules('title','Tiêu đề','required|min_length[6]');
			$this->form_validation->set_rules('cat_id','Danh mục tin','required');
			if($this->form_validation->run()){
				$title = $this->input->post('title');
				$cat_id = $this->input->post('cat_id');
				$news_name = $this->input->post('news_name');
				$news_name = $this->news_model->slug($title);
				$description = $this->input->post('description');
				$content = $this->input->post('content');
				$status = $this->input->post('status');
				//load thư viện uploads ảnh
				$this->load->library('upload_library');
				$upload_path = './uploads/news';
				$upload_data = $this->upload_library->upload($upload_path, 'image');
				if(isset($upload_data['file_name'])){
					$image_link = $upload_data['file_name'];
				}

				$data = array(
					'title' => $title,
					'cat_id' => $cat_id,
					'news_name' => $news_name,
					'description' => $description,
					'content' => $content,
					'created' => now(),
					'image' => $image_link,
					'status' => $status
					);

				$this->news_model->create($data);
				$this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công !');
				redirect(admin_url('news'));
			}
		}

		//lấy ra danh sách danh mục tin
		$input = array();
		$input['where'] = array('parent'=>0);
		$list = $this->catnews_model->get_list($input);
		foreach($list as $row){
			$input['where'] = array('parent' => $row->id);
			$subs = $this->catnews_model->get_list($input);
			$row->subs = $subs;
		}
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/news/add';
		$this->load->view('admin/main',$this->data);
	}

	function edit(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->news_model->get_info($id);
		$this->data['info'] = $info;

		if($this->input->post()){
			$this->form_validation->set_rules('cat_id','Danh mục tin','required');
			$this->form_validation->set_rules('title','Tiêu đề tin','required|min_length[4]');
			if($this->form_validation->run()){
				$cat_id = $this->input->post('cat_id');
				$title = $this->input->post('title');
				$news_name = $this->input->post('news_name');
				$news_name = $this->news_model->slug($title);
				$description = $this->input->post('description');
				$content = $this->input->post('content');
				$updated = now();
				$status = $this->input->post('status');
			}

			//lấy tên file ảnh, upload ảnh đại diện
				$this->load->library('upload_library');
				$upload_path = './uploads/product';
				$upload_data = $this->upload_library->upload($upload_path, 'image');
				if(isset($upload_data['file_name'])){
					$image_link = $upload_data['file_name'];
				}

				$data = array(
					'cat_id'=>$cat_id,
					'title'=>$title,
					'news_name'=>$news_name,
					'description'=>$description,
					'content'=>$content,
					'updated'=>$updated,
					'status'=>$status
					);
				if($image_link!=''){
					$data['image'] = $image_link;
				}

				$this->news_model->update($id,$data);
				$this->session->set_flashdata('message', 'Sửa dữ liệu thành công !');
				//chuyển sang trang danh sách danh mục
				redirect(admin_url('news'));
		}

		//lấy danh mục
		$input = array();
		$input['where']  = array('parent'=>0);
		$list = $this->catnews_model->get_list($input);
		foreach($list as $row){
			$input['where'] = array('parent'=>$row->id);
			$subs = $this->catnews_model->get_list($input);
			$row->subs = $subs;
		}
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/news/edit';
		$this->load->view('admin/main',$this->data);
	}

	function del(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->news_model->get_info($id);
		if(!$info){
			$this->session->set_flashdata('message','Không tồn tại tin tức này');
			redirect(admin_url('news'));
		}
		$this->news_model->deleteOne($id);
		$this->session->set_flashdata('message','Xóa dữ liệu thành công');
		redirect(admin_url('news'));
	}

	function delete_all()
    {
        $ids = $this->input->post('id[]');
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
        $this->session->set_flashdata('message','Xóa tùy chọn thành công');
        redirect(admin_url('news'));
    }
    
    /*
     *Xoa san pham
     */
    private function _del($id)
    {
        $news = $this->news_model->get_info($id);
        if(!$news)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại sản phẩm này');
            redirect(admin_url('news'));
        }
        //thuc hien xoa san pham
        $this->news_model->deleteOne($id);
    }

}//end class