<h2><?php echo $post->title?></h2>
<p><?php echo $post->body?></p>
<?php echo anchor('posts/get_posts',"<button>Back</button>")?>
<?php echo anchor('posts/update_post/'.$post->p_id,"<button>Update</button>")?>
<?php echo anchor('posts/delete_post/'.$post->p_id,"<button>Delete</button>")?>