<?php 

class post_model extends CI_model{
	
	function get_posts(){
	$query=	$this->db->get('posts');
	return $query->result();
	
	}
	function get_post($id){
		$this->db->where('p_id',$id);
		$query= $this->db->get('posts');
		return $query->row();
	}
	function new_post($post){
		$this->db->insert('posts',$post);
	}
	function update_post($id,$data){
		$this->db->where('p_id',$id);
		$this->db->update('posts',$data);
	}
	function delete_post($id){
		$this->db->where(array('p_id'=>$id));
		$this->db->delete('posts');
	}
}
