<?php 
Class News extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('catnews_model');
	}

	function catnews(){
				//lấy ra id của danh mục
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$category = $this->catnews_model->get_info($id);
		if(!$category){
			redirect();
		}
		$this->data['category'] = $category;
		$input = array();
		//kiểm tra tồn tại danh mục cha
		if($category->parent==0){
			$input_category= array();
			$input_category['where'] = array('parent'=>$id);
			$category_subs = $this->catnews_model->get_list($input_category);
			if(!empty($category_subs)){ // nếu danh mục hiện tại có danh mục con
				$category_subs_id = array();
				foreach($category_subs as $sub){
					$category_subs_id[] = $sub->id;
				}
				$this->db->where_in('cat_id', $category_subs_id); //lấy tất cả tin của danh mục con
				//print_r($category_subs_id);
			}else{
				$input['where'] = array('cat_id'=>$id);
			}
		}else{
			$input['where'] = array('cat_id'=>$id);
		}
		
		//lấy ra danh sách sản phẩm trong danh mục
		$this->load->library('pagination');
		//lấy ra tổng tất cả các sản phẩm
		$total_row = $this->news_model->get_total($input);
		$this->data['total_row'] = $total_row;
		$config = array();
		$config['base_url']    = base_url($category->cat_name.'-c'.$category->id);
		$config['total_rows']  = $total_row;
		$config['per_page']    = 9;
		$config['uri_segment'] = 2;
		$config['full_tag_open'] = '<ul class="list-unstyled flex no-column items-center">';
    	$config['full_tag_close'] = '</ul>';
    	$config['num_tag_open'] = '<li class="button linkcss">';
    	$config['num_tag_close'] = '</li>';
    	$config['first_link'] = '&laquo; First';
    	$config['first_tag_open'] = '<li class="prev page">';
    	$config['first_tag_close'] = '</li>';
    	$config['cur_tag_open'] = '<li class="active button">';
    	$config['cur_tag_close'] = '</li>';
		$config['next_link']   = '<span class="button">Trang kế <i class="ion-ios-arrow-right"></i></span>';
		$config['prev_link']   = '<span class="button"><i class="ion-ios-arrow-left"></i> Quay lại</span>';
		$this->pagination->initialize($config);
		$segment = $this->uri->segment(2);
		$segment = intval($segment);
		
		$input["limit"] = array($config['per_page'], $segment);
		
		//lấy danh sách sản phẩm
		if(isset($category_subs_id)){
			$this->db->where_in('cat_id', $category_subs_id);
		}
		$list = $this->news_model->get_list($input);
		$this->data['list'] = $list;

		$this->data['temp'] = 'site/news/catnews';
		$this->load->view('site/layout',$this->data);

	}

	function detail(){
		 $id = $this->uri->rsegment(3);
		 $id =  intval($id);
		 $info = $this->news_model->get_info($id);
		 if(!$info){
		 	redirect();
		 }
		 $this->data['info'] = $info;
		 $catid = $info->cat_id;
		 $catnewsname = $this->catnews_model->get_info($catid);
		 $this->data['catnewsname'] = $catnewsname;
		 //tin tức liên quan
		 $input = array();
		 $input['where'] = array('cat_id'=>$catid);
		 $likecatnews = $this->news_model->get_list($input);
		 $this->data["likecatnews"] = $likecatnews;
		 $data =array();
		 $data['view'] = $info->view + 1;
		 $this->news_model->update($id,$data);

		 //việc làm trang tin
		 $this->load->model('recruitment_model');
		 $input['where'] = array('status'=>3);
		 $newsjobs = $this->recruitment_model->get_list($input);
		 $this->data['newsjobs'] = $newsjobs;

		 $this->data['temp'] = 'site/news/detail';
		 $this->load->view('site/layout',$this->data);
	}

}//end class