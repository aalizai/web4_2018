<?php

class posts extends CI_Controller{
	
	
	function get_posts(){
		//$this->load->helpers('url');
		$this->load->model('post_model');
		$data['posts']=$this->post_model->get_posts();
		$this->load->view('show_posts',$data);
	}
	function get_post($x){
		$this->load->model('post_model');
		$data['post']=$this->post_model->get_post($x);
		$this->load->view('show_dails',$data);
	}
	function new_post(){
		//$this->load->helpers('form');
		$this->load->view("new_post");
	}
	function create_post(){
		$data['title']= $this->input->post('title');
		$data['body']=$this->input->post('body');
		$this->load->model('post_model');
		$this->post_model->new_post($data);
		redirect('posts/get_posts');
}
	function update_post($id){
		$this->load->model('post_model');
		$data['post']=$this->post_model->get_post($id);
		$this->load->view('update_post',$data);
	}
	function update($id){
		$data['title']= $this->input->post('title');
		$data['body']=$this->input->post('body');
		$this->load->model('post_model');
		$this->post_model->update_post($id,$data);
		redirect('posts/get_posts');
	}
	function delete_post($id){
		$this->load->model('post_model');
		$this->post_model->delete_post($id);
		redirect('posts/get_posts');
	}
}




