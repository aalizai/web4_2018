

<?php echo anchor('posts/new_post/',"<button>".$this->lang->line('new_post')."</button>")?>
<?php if($this->session->has_userdata('login')){
echo anchor('users/logout',"<button>logout</button>");
 echo $user->user_name;
?>
<img alt="Staff Image" src=<?php echo base_url('pictures/'.$user->Image)?>  />
<?php }else{echo anchor('users/u_login',"<button>LOG IN</button>");}?>
<hr />
<?php foreach($posts as $post):?>
<h2><?php echo $post->title?></h2>
<p><?php echo substr($post->body, 0,100)."..."?></p>
<?php echo anchor('posts/get_post/'.$post->p_id,"<button>readmore</button>");?>
<?php echo anchor('posts/update_post/'.$post->p_id,"<button>Update</button>")?>
<?php echo anchor('posts/delete_post/'.$post->p_id,"<button>Delete</button>",
array('onclick'=>"return confirm('are you sure !!!!!')"))?>
<hr />
<?php endforeach?>
<?php echo $this->pagination->create_links()?>