<?php 
class user_model extends CI_Model{
	
	function get_user_cat(){
		
		return $this->db->get('user_category')->result();
	}
	function create_user($data){
		
		$this->db->insert('users',$data);
	}
	function list_users(){
		return $this->db->get('users')->result();
	}
}
