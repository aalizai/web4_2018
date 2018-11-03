<?php

class posts extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('post_model');
		if($this->session->has_userdata('lang')){
			$this->lang->load('main',$this->session->userdata('lang'));
		} else {
			$this->lang->load('main');
		}
	}
	function _main($data){
		$this->load->view('main',$data);
	}
	function se_test(){
	$data=	$this->session->userdata();
	foreach ($data as $usr) {
		echo $usr;
	}
	}
	function get_posts(){
		$this->session->set_userdata('last_visited',current_url());
		$this->load->model('user_model');
		//$this->load->helpers('url');
		//$this->load->model('post_model');
		$ofset=$this->uri->segment(3);
		$this->load->library('pagination');
		$con['base_url']=base_url()."index.php/posts/get_posts";
		$con['total_rows']=$this->post_model->count_posts();
		$con['per_page']=3;
		$this->pagination->initialize($con);
		if($this->session->has_userdata('user_id')){
			$id=$this->session->userdata('user_id');
			$data['user']=$this->user_model->get_user($id);
		}
		
		$data['posts']=$this->post_model->get_posts($ofset,$con['per_page']);
		$data['page_title']='Show posts';
		$data['title']='Show posts';
		
		$data['page']='show_posts';
		//$this->load->view('show_posts',$data);
		$this->_main($data);
		//print_r($data);
	}
	function get_post($x){
		//$this->load->model('post_model');
		$data['post']=$this->post_model->get_post($x);
		//$this->load->view('show_dails',$data);
		$data['page_title']='Details';
		$data['title']='Details of a Post';
		
		$data['page']='show_dails';
		//$this->load->view('show_posts',$data);
		$this->_main($data);
	}
	function new_post(){
		//$this->load->helpers('form');
		$data['cats']= $this->get_p_cats();
		$this->load->view("new_post",$data);
	}
	function create_post(){
		$data['title']= $this->input->post('title');
		$data['body']=$this->input->post('body');
		$data['post_category_id']=$this->input->post('cat_id');
		//$this->load->model('post_model');
		$this->post_model->new_post($data);
		redirect('posts/get_posts');
}
	function update_post($id){
		//$this->load->model('post_model');
		$data['post']=$this->post_model->get_post($id);
		//$this->load->view('update_post',$data);
		$data['page_title']='Update';
		$data['title']='Updating a Post';
		
		$data['page']='update_post';
		//$this->load->view('show_posts',$data);
		$this->_main($data);
	}
	function update($id){
		$data['title']= $this->input->post('title');
		$data['body']=$this->input->post('body');
		//$this->load->model('post_model');
		$this->post_model->update_post($id,$data);
		redirect('posts/get_posts');
	}
	function delete_post($id){
		//$this->load->model('post_model');
		$this->post_model->delete_post($id);
		redirect('posts/get_posts');
	}
	function test(){
		echo time();
	}
	function c_post_cat(){
		$this->load->view('c_p_cat');
	}
	function new_post_cat(){
		$name= $this->input->post('c_name');
		$this->post_model->c_post_cat($name);
	}
	function get_p_cats(){
		return $this->post_model->get_post_cats();
	}
	function list_cat(){
		$data['cats']=$this->get_p_cats();
		$this->load->view('list_cats',$data);
	}
	function get_cat($id){
		return $this->post_model->get_cat($id);
	}
	function update_cat($id){
		$data['cat']=$this->get_cat($id);
		$this->load->view('update_cat',$data);
	}
	function update_post_cat($id){
		$data['post_category_name']=$this->input->post('c_name');
		$this->post_model->udate_cat($id,$data);
	}
}




