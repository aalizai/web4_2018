<?php

class posts extends CI_Controller{
	
	
	function get_posts(){
		$this->load->model('post_model');
		$data['posts']=$this->post_model->get_posts();
		$this->load->view('show_posts',$data);
	}
}
