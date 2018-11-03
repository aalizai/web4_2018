<!DOCTYPE html>
<html>
	<head>
		<title>
		New User
	   </title>
	</head>
	
	<body>
		
		
		<?php echo form_open_multipart('users/create_user')?>
		<table>
			<tr>
				<td>First Name</td>
				<td> <input type="text" name="fname" value="<?php echo set_value('fname')?>"/></td>
				<td><?php echo form_error('fname')?></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td> <input type="text" name="lname" value="<?php echo set_value('lname')?>"/></td>
				<td><?php echo form_error('lname')?></td>
			</tr>
			<tr>
				<td> Date Of Birth</td>
				<td> <input type="date" name="db" /></td>
				<td><?php echo form_error('db')?></td>
			</tr>
			<tr>
				<td> Email</td>
				<td> <input type="email" name="email" value="<?php echo set_value('email')?>" /></td>
				<td><?php echo form_error('email')?></td>
			</tr>
			<tr>
				<td>Telefone</td>
				<td> <input type="tel" name="tel" value="<?php echo set_value('tel')?>" /></td>
				<td><?php echo form_error('tel')?></td>			
			</tr>
			<tr>
				<td>Image</td>
				<td> <input type="file" name="image" value="<?php echo set_value('image')?>" /></td>
			</tr>
			<tr>
				<td> User Category</td>
				<td> <select name="cat">
					<?php foreach($user_cats as $cat):?>
					<option value="<?php echo $cat->user_category_id ?>">
						<?php echo $cat->user_category_name ?></option>
						<?php endforeach?>
				</select></td>
			</tr>
			<tr>
				<td>User Name</td>
				
				<td> <input type="text" name="uname" value="<?php echo set_value('uname')?>" /></td>
			<td><?php echo form_error('uname')?></td>	
			</tr>
			<tr>
				<td>Password</td>
				<td> <input type="password" name="pass" /></td>
				<td><?php echo form_error('pass')?></td>	
			</tr>
			<tr>
				<td></td>
				<td> <input type="submit" name="sub" value="New User" /></td>
			</tr>
		</table>
		
	</body>
</html>