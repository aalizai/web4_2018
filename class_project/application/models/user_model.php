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
	function user_login($uname,$pass){
		$data['user_name']=$uname;
		$data['password']=$pass;
		$this->db->where($data);
		//$this->db->select('user_id');
		$query=$this->db->get('users');
		if($query->num_rows()>0){
			return $query->first_row();
		} else {
			return false;
		}
	}
	function get_user($id){
		$this->db->where('user_id',$id);
		return $this->db->get('users')->row();
	}
	function check_uname($uname){
		$query=$this->db->where('user_name',$uname)->get('users');
		if ($query->num_rows()>0) {
			return TRUE;
			
		} else {
			return FALSE;
		}
	}
	
	
	
	
	
	
	
	
	
	
	
}
