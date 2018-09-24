
<?php echo form_open("posts/create_post")?>
<label>Title</label>
<input type="text" name="title" /><br /><br />

<label>Body</label>
<textarea name="body" rows="10" cols="40"></textarea><br />
<select name='cat_id'>
	<?php foreach ($cats as $cat): ?>
		
	
	<option value="<?php echo $cat->post_category_id?>">
		<?php  echo $cat->post_category_name?>
	</option>
	<?php endforeach?>
</select>

<input type="submit" value="New Post" />