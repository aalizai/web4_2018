<?php echo form_open('users/login')?>
<table>
	<tr>
		<td>User Name</td>
		<td><input type="text" name="uname" placeholder="Enter your User Name" /></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="pass" placeholder="Enter your password" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="login" value="LOGIN"  /></td>
	</tr>
</table>