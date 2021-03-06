<?php
Class MY_Controller extends CI_Controller{
	//Tạo biến gửi dữ liệu sang bên view
	public $data = array();
	function __construct(){
		//kế thừa ci controller
		parent::__construct();
		date_default_timezone_set('Asia/Ho_Chi_Minh');
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
					//support hotline
					$this->load->model('support_model');
					$input['where'] = array('status'=>1);
					$supportlist = $this->support_model->get_list($input);
					$this->data['supportlist'] = $supportlist;
					//load menu trang chủ
					$this->load->model('menu_model');
					$this->load->model('catnews_model');
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

					$this->load->model('tags_model');
					$input['where'] = array('status'=>1);
					$tagscloud = $this->tags_model->get_list($input);
					$this->data['tagscloud'] = $tagscloud;
					


					//kiểm tra thành viên candidate đăng nhập
					$user_id = $this->session->userdata('candidate_id_login');
					$this->data['user_id'] = $user_id;
					//nếu đăng nhập thành công thì lấy thông tin thành viên
					if($user_id){
						$this->load->model('member_candidate_model');
						$user_info = $this->member_candidate_model->get_info($user_id);
						$this->data['user_info'] = $user_info;
					}
					//kiểm tra thành viên là nhà tuyển dụng
					$company_id = $this->session->userdata('company_id_login');
					$this->data['company_id'] = $company_id;
					if($company_id){
						$this->load->model('member_company_model');
						$company_info = $this->member_company_model->get_info($company_id);
						$this->data['company_info'] = $company_info;
					}

					//công việc mới nhất
					$this->load->model('member_company_model');
					$this->load->model('recruitment_model');
					$this->load->model('city_model');
					$this->load->model('salary_model');
					$input = array();
					$input['where'] = array('status'=>1);
					$input['limit'] = array(16,0);
					$lastestjob = $this->recruitment_model->get_list($input);
					$this->data['lastestjob'] = $lastestjob;

					//công việc nổi bật
					$input = array();
					$input['limit'] = array(5,0);
					$input['where'] = array('status'=>2);
					$hotjob = $this->recruitment_model->get_list($input);
					$this->data['hotjob'] = $hotjob;

					//tổng số ứng viên
					$this->load->model('member_candidate_model');
					$total_candidate = $this->member_candidate_model->get_total();
					$this->data['total_candidate'] = $total_candidate;
					//tổng số việc làm
					$total_recruitment = $this->recruitment_model->get_total();
					$this->data['total_recruitment'] = $total_recruitment;

					//trang tin chân trang
					$this->load->model('page_model');
					$pagefooter = $this->page_model->get_list();
					$this->data['pagefooter'] = $pagefooter;

					//nhóm tin chân trang
					$input['where'] = array('status'=>1);
					$input['limit'] = array(2,0);
					$categories_footer = $this->catnews_model->get_list($input);
					foreach($categories_footer as $row){
						$input['where'] = array('parent'=>$row->id);
						$subs = $this->catnews_model->get_list($input);
						$row->subs = $subs;
					}
					$this->data['categories_footer'] = $categories_footer;

					//load thư viện giỏ hàng tất cả các trang
					$this->load->library('cart');
					$this->data['total_items'] = $this->cart->total_items();

					//cài đặt website
					$this->load->model('setting_model');
					$settingid = 1;
					$setting = $this->setting_model->get_info($settingid);
					$this->data['setting'] = $setting;
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