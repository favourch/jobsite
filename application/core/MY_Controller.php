<?php
Class MY_Controller extends CI_Controller{
	//Tạo biến gửi dữ liệu sang bên view
	public $data = array();
	function __construct(){
		//kế thừa ci controller
		parent::__construct();

		$controller = $this->uri->segment(1);

		switch ($controller) {
			case 'admin': {
				$this->load->helper('admin');
				$this->_check_login();
				$this->load->model('contact_model');
				$input = array();
				$input['where'] = array('status'=>0);
				$total_contact = count($this->contact_model->get_list($input));
				$this->data['total_contact'] = $total_contact;
				$this->load->model('admin_model');
				$id_admin = $this->session->userdata('admin_id');
				$accoutname = $this->admin_model->get_info($id_admin);
				$this->data['accoutname'] = $accoutname;
				break;
			}
			
			default:
				{
					$this->load->model('category_model');
					$input =array();
					$input['where'] = array('parent'=>0);
					$category_list = $this->category_model->get_list($input);
					//print_r($category_list);
					foreach($category_list as $row){
						$input['where'] = array('parent'=>$row->id);
						$subs = $this->category_model->get_list($input);
						$row->subs = $subs;
					}
					
					$this->data['category_list'] = $category_list;
					//load menu trang chủ
					$this->load->model('menu_model');
					$input = array();
					$input['where'] = array('parent'=>0);
					$input['order'] = array('is_order','desc');
					$menu_list = $this->menu_model->get_list($input);
					//kiểm tra tồn tại menu con
					foreach($menu_list as $row){
						$input['where'] = array('parent'=>$row->id);
						$subs = $this->menu_model->get_list($input);
						$row->subs = $subs;
					}

					$this->data['menu_list'] = $menu_list;

					//load block_right tin mới cập nhật
					$this->load->model('news_model');
					$input = array();
					$input['limit'] = array(5,0);
					$relatenews = $this->news_model->get_list($input);
					$this->data['relatenews'] = $relatenews; 
					
					//kiểm tra thành viên đăng nhập
					$user_id_login = $this->session->userdata('user_id_login');
					$this->data['user_id_login'] = $user_id_login;
					//nếu đăng nhập thành công thì lấy thông tin thành viên
					if($user_id_login){
						$this->load->model('user_model');
						$user_info = $this->user_model->get_info($user_id_login);
						$this->data['user_info'] = $user_info;
					}



					//load thư viện giỏ hàng tất cả các trang
					$this->load->library('cart');
					$this->data['total_items'] = $this->cart->total_items();
			}
		}
	}


	
	private function _check_login(){
		$controller = $this->uri->rsegment('1');
		$controller = strtolower($controller);
		$login = $this->session->userdata('login');

		//nếu không tồn tại session 'login' chuyển về trang login.php
		if(!$login && $controller!='login'){
			redirect(admin_url('login'));
		}
		//đã login rồi không được login nữa, chuyển về trang admin home
		if($login && $controller == 'login'){
			redirect(admin_url('home'));
		}
		elseif(!in_array($controller, array('home','login'))){
			//lay ra admin id dang nhap
			$admin_id = $this->session->userdata('admin_id');
			//lay ra admin_root (admin chinh ko bi phan quyen co id = 6)
			$admin_root = $this->config->item('root_admin');
			//neu admin dang nhap khac voi admin root thi kiem tra quyen, nguoc lai ko kiem tra
			if($admin_id != $admin_root){
			//kiem tra quyen
			$permission_admin = $this->session->userdata('permission');
			$controller = $this->uri->rsegment(1);
			$action = $this->uri->rsegment(2);
			$check = true;
			if(!$permission_admin->{$controller}){
				$check = false;
			}
			$permission_action = $permission_admin->{$controller};
			if(!in_array($action, $permission_action)){
				$check = false;
			}
			if(!$check){
				$this->session->set_flashdata('message', 'Bạn không có quyền truy cập, liên hệ admin !');
				redirect(base_url('admin'));
			}
			}
		}
	}

	
}