<?php 
Class Recruitment extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('recruitment_model');
	}
	function index(){
		$this->load->library('pagination');
		$total_row = $this->recruitment_model->get_total();
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = admin_url('recruitment/index');
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

		$list = $this->recruitment_model->get_list($input);
		$this->data['list'] = $list;
		
		//thông báo dữ liệu
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = 'admin/recruitment/index';
		$this->load->view('admin/main', $this->data);
	
	}

	function add(){

		if($this->input->post()){
			$this->form_validation->set_rules('title','Tiêu đề danh  mục','required|min_length[6]');
				if($this->form_validation->run()){
				//tiến hành thêm vào csdl
				$title = $this->input->post('title');
				$is_hot = $this->input->post('is_hot');
				$cat_name = $this->input->post('cat_name');
				$cat_name = slug($title);
				$data = array(
					'title'=> $title,
					'cat_name' => $cat_name,
					'is_hot' => intval($is_hot)
					);
				if($this->recruitment_model->create($data)){
					// tạo nội dung thông báo
					$this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công !');
				}
				else{
					$this->session->set_flashdata('message', 'Lỗi dữ liệu, không thêm được !');
				}
				//chuyển sang trang danh sách admin
				redirect(admin_url('recruitment'));
			}

			
		}

		$this->data['temp'] = 'admin/recruitment/add';
		$this->load->view('admin/main', $this->data);
	}

	function edit(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->recruitment_model->get_info($id);
		if (!$info) {
			$this->session->set_flashdata('message','Không tồn tại danh mục này');
			redirect(admin_url('recruitment'));
		}
		$this->data['info'] = $info;
		if($this->input->post()){
			$this->form_validation->set_rules('title','Tiêu đề','required|min_length[6]');
				if($this->form_validation->run()){
				//tiến hành thêm vào csdl
				$title = $this->input->post('title');
				$is_hot = $this->input->post('is_hot');
				$cat_name = $this->input->post('cat_name');
				$cat_name = slug($title);
				$data = array(
					'title'=> $title,
					'cat_name' => $cat_name,
					'is_hot' => intval($is_hot)
					);
				if($this->recruitment_model->update($id, $data)){
					// tạo nội dung thông báo
					$this->session->set_flashdata('message', 'Sửa dữ liệu thành công !');
				}
				else{
					$this->session->set_flashdata('message', 'Sửa dữ liệu thành công !');
				}
				//chuyển sang trang danh sách danh mục
				redirect(admin_url('recruitment'));
			}
			
		}

		$this->data['temp'] = 'admin/recruitment/edit';
		$this->load->view('admin/main', $this->data);
	}

	function del(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);

		$info = $this->recruitment_model->get_info($id);
		if (!$info) {
			$this->session->set_flashdata('message','Không tồn tại danh mục này');
			redirect(admin_url('recruitment'));
		}
		$this->data['info'] = $info;

		//kiểm tra xem danh mục có sản phẩm không mới cho xóa
		//$this->load->model('product_model');
		//$product = $this->product_model->get_info_rule(array('carrer_id'=>$id), 'id'); //lấy ra sản phẩm có category_id 
		//if($product){
			//$this->session->set_flashdata('message','Danh mục có chứa bài viết, bạn phải xóa bài viết trước khi xóa danh mục ! ');
			//redirect(admin_url('career'));
		//}

		$this->recruitment_model->deleteOne($id);
			$this->session->set_flashdata('message','Xóa dữ liệu thành công ! ');
			redirect(admin_url('recruitment'));
	}

	function delete_all()
    {
        $ids = $this->input->post('id[]');
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
        $this->session->set_flashdata('message','Xóa tùy chọn thành công');
        redirect(admin_url('recruitment'));
    }
    
    /*
     *Xoa san pham
     */
    private function _del($id)
    {
        $category = $this->recruitment_model->get_info($id);
        if(!$category)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại dữ liệu này');
            redirect(admin_url('recruitment'));
        }
        //thuc hien xoa danh mục
        $this->recruitment_model->deleteOne($id);
    }

}//end class