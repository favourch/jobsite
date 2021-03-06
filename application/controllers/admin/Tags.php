<?php
Class Tags extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('tags_model');
	}

	function index(){
		//Tạo thông báo 
		$this->load->library('pagination');
		
		//lấy ra tổng tất cả các sản phẩm
		$total_row = $this->tags_model->get_total();
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = admin_url('tags/index');
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

		$name = $this->input->get('name');
		if($name){
			$input['like'] = array('name', $name);
		}

		//lấy danh sách sản phẩm
		$list = $this->tags_model->get_list($input);
		$this->data['list'] = $list;

		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = "admin/tags/index";
		$this->load->view("admin/main", $this->data);
	}

	function add(){
		
		if($this->input->post()){
			$this->form_validation->set_rules('name','Tên thẻ','required|min_length[4]');
				if($this->form_validation->run()){
				//tiến hành thêm vào csdl
				$name = $this->input->post('name');;
				$link = $this->input->post('link');
				$status = $this->input->post('status');	
	
				$data = array(
					'name'=> $name,
					'link'=> $link,
					'status' => $status
					);
				
				if($this->tags_model->create($data)){
					// tạo nội dung thông báo
					$this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công !');
				}
				else{
					$this->session->set_flashdata('message', 'Lỗi dữ liệu, không thêm được !');
				}
				//chuyển sang trang danh sách admin
				redirect(admin_url('tags'));
			}

			
		}

		$this->data['temp'] = "admin/tags/add";
		$this->load->view("admin/main", $this->data);
	}

	function edit(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);

		$info = $this->tags_model->get_info($id);
		if (!$info) {
			$this->session->set_flashdata('message','Không tồn tại thẻ này');
			redirect(admin_url('tags'));
		}
		$this->data['info'] = $info;

		if($this->input->post()){
			$this->form_validation->set_rules('name','Tên sản phẩm','required|min_length[6]');
				if($this->form_validation->run()){
				//tiến hành thêm vào csdl
				$name = $this->input->post('name');
				$link = $this->input->post('link');
				$status = $this->input->post('status');

				$data = array(
					'name'=> $name,
					'link'=> $link,
					'status' => $status
					);

				$this->tags_model->update($id, $data);
					// tạo nội dung thông báo
				$this->session->set_flashdata('message', 'Sửa dữ liệu thành công !');
				//chuyển sang trang danh sách danh mục
				redirect(admin_url('tags'));
			}

			
		}
		$this->data['temp'] = 'admin/tags/edit';
		$this->load->view('admin/main', $this->data);
	}

	function del(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);

		$info = $this->tags_model->get_info($id);
		if (!$info) {
			$this->session->set_flashdata('message','Không tồn tại thẻ này');
			redirect(admin_url('tags'));
		}
		$this->data['info'] = $info;
		$this->tags_model->deleteOne($id);
		
		$this->session->set_flashdata('message', 'Xóa dữ liệu thành công !');
		//chuyển sang trang danh sách danh mục
		redirect(admin_url('tags'));
	}

	function delete_all()
    {
        $ids = $this->input->post('id[]');
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
        $this->session->set_flashdata('message','Xóa tùy chọn thành công');
        redirect(admin_url('tags'));
    }
   
    /*
     *Xoa san pham
     */
    private function _del($id)
    {
        $tags = $this->tags_model->get_info($id);
        if(!$tags)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại thẻ này');
            redirect(admin_url('tags'));
        }
        //thuc hien xoa san pham
        $this->tags_model->deleteOne($id);
    }
}