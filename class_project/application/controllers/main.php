<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller{
	
	function index(){
		
		echo "hello this is my firsty codeigniter program";
	}
	 function print_something(){
		echo "this function will print some thing";
	}
	function print_var($name){
		echo "Your name is :".$name;
	}
	function print_dvar($name,$lname="No last name"){
		echo "your name is ".$name."and your last Name is:".$lname;
	}
	function main_method(){
		$this->load->view('welcome_message');
	}
	function main1(){
		
		$this->load->view('main');
	}
	function main2(){
		$dis= array(
		'name'=>'hadesa',
		'lname'=>'amiri'
		);
		
		$discriptions['name']="Kamal Hussain";
		$discriptions['lname']="Alizada";
		$this->load->view("main1",$dis);
	}
	function head(){
		$this->load->view("includes/header");
	}
	function contact_list(){
		$this->load->model('model_contacts');
	  	$data['contacts']=	$this->model_contacts->contact_list();
		$this->load->view('listof_contacts',$data);
	
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
}
