<?php 

class post_model extends CI_model{
	
	function get_posts(){
	$query=	$this->db->get('posts');
	return $query->result();
	
	}
}
