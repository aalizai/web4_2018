

<?php echo anchor('posts/new_post/',"<button>New Post</button>")?>
<?php foreach($posts as $post):?>
<h2><?php echo $post->title?></h2>
<p><?php echo substr($post->body, 0,100)."..."?></p>
<?php echo anchor('posts/get_post/'.$post->p_id,"<button>readmore</button>");?>
<?php echo anchor('posts/update_post/'.$post->p_id,"<button>Update</button>")?>
<?php echo anchor('posts/delete_post/'.$post->p_id,"<button>Delete</button>",
array('onclick'=>"return confirm('are you sure !!!!!')"))?>
<?php endforeach?>
