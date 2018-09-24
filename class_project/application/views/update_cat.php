<?php echo form_open("posts/update_post_cat/".$cat->post_category_id)?>
<label>Category Name</label> 
<input type="text" name="c_name" 
value="<?php echo $cat->post_category_name?>"/><br /><br />

<input type="submit" value="Update post Category" />