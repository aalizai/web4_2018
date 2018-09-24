<?php 

class post_model extends CI_model{
	
	function get_posts($ofset,$limit){
	$query=	$this->db->get('posts',$limit,$ofset);
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
	function count_posts(){
	return $this->db->count_all('posts');
	}
	function c_post_cat($name){
		$data['post_category_name']=$name;
		$this->db->insert('post_category',$data);
	}
	function get_post_cats(){
		$query = $this->db->get('post_category');
		return $query->result();
	}
	function get_cat($id){
		$this->db->where('post_category_id',$id);
		$q=$this->db->get('post_category');
		return $q->row();
	}
	function udate_cat($id,$data){
		$this->db->where('post_category_id',$id);
		$this->db->update('post_category',$data);
	}
	
	
	
	
	
	
	
	
	
	
	
	
}