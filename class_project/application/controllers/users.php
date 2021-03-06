<?php 

class users extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		
	}
	
	function get_user_cat(){
		return $this->user_model->get_user_cat();
	}
	
	function new_user(){
		$data['user_cats']=$this->get_user_cat();
		$this->load->view('new_user',$data);
	}
	function check_uname($username){
		if($this->user_model->check_uname($username)){
			$this->form_validation->set_message('check_uname',
			$username."Already Exist provide valid user name");
			return FALSE;
		} else {
			return TRUE;
		}
	}
	
	function create_user(){
		$this->load->library('form_validation');
		$validation= array(
			array(
			'field'=>'fname',
			'label'=>'First Nmae',
			'rules'=>'required'
			),
			array(
			'field'=>'lname',
			'label'=>'Last Name',
			'rules'=>'required'
			),
		array(
			'field'=>'db',
			'label'=>'Date of Birth',
			'rules'=>'required'
			),
		array(
			'field'=>'email',
			'label'=>'Email',
			'rules'=>'required'
			),
		array(
			'field'=>'tel',
			'label'=>'Telephone',
			'rules'=>'required'
			),
			array(
			'field'=>'uname',
			'label'=>'User Name',
			'rules'=>'required|callback_check_uname'
			),
			array(
			'field'=>'pass',
			'label'=>'password',
			'rules'=>'required|min_length[4]|max_length[10]|regex_match[/^[A-Z]+\W+\w+$/]'
			)
		
		);
		
		
		$this->form_validation->set_rules($validation);
		if($this->form_validation->run()==FALSE){
			$this->new_user();
		}else{
		$config['upload_path']          = './pictures/';
        $config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']           = time();
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
       	$config['max_height']           = 768;
			//print_r($user);
			$this->load->library('upload', $config);
			if($this->upload->do_upload('image')){
				$user['first_name']=$this->input->post('fname');
				$user['last_name']=$this->input->post('lname');
				$user['db']=$this->input->post('db');
				$user['telephone']=$this->input->post('tel');
				$user['email']=$this->input->post('email');
				$user['user_category_id']=$this->input->post('cat');
				$user['user_name']=$this->input->post('uname');
				$user['image']= $this->upload->data('file_name');
				$user['password']=$this->input->post('pass');
				$this->user_model->create_user($user);
		} else {
			$this->new_user();
		}
		}
		
	}
	
	function list_users(){
		$data['users']=$this->user_model->list_users();
		$this->load->view('list_users',$data);
	}
	
	function session_test(){
		$data['name']='Mohammad Noor';
		$data['username']='mnoor';
		$data['email']='mnoor@gmail.com';
		$this->session->set_userdata($data);
		echo $this->session->userdata('email');
	}

	function u_login(){
		$this->load->view('login');
	}
	
	function login(){
		$uname = $this->input->post('uname');
		$pass= $this->input->post('pass');
		$user= $this->user_model->user_login($uname,$pass);
		if(!$user){
			redirect('users/u_login');
		}else{
			//$this->session->sess_destroy();
			$this->session->set_userdata('login',true);
			$this->session->set_userdata('user_id',$user->user_id);
			//print_r($this->session->userdata());
			redirect('posts/get_posts');
			
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('users/u_login');
	}
	function ses_test(){
		echo $this->session->userdata('user');
	}
	function lang_test(){
		$this->lang->load('main','pushto');
		echo $this->lang->line('par_about');
	}
	function lang($lang){
		//$this->lang->load('main',$lang);
		$this->session->set_userdata('lang',$lang);
		//$this->load->view('lang_test');
		redirect($this->session->userdata('last_visited'));
	}
	
}
