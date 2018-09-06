<?php 

class Model_contacts extends CI_model{
	
	
	function contact_list(){
		//echo "this is model function ";
		$data['name']='Erfanullah';
		$data['lname']='Yousofi';
		$data['tel']='07987667677';
		$data['email']='yousufi@gmail.com';
		return $data;
	}
}
