<?php foreach ($cats as $cat):?>
<h2><?php echo $cat->post_category_name?></h2>
<?php echo anchor('posts/update_cat/'.$cat->post_category_id,
"<button>Update</button>")?>

<?php endforeach?>