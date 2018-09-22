<?php echo form_open("posts/update/$post->p_id")?>
<label>Title</label>
<input type="text" name="title" value="<?php echo $post->title ?>" /><br />

<label>Body</label>
<textarea name="body"><?php echo $post->body ?></textarea><br />

<input type="submit" value="Update Post" />