<!DOCTYPE  html>

<link rel="stylesheet" href=<?php echo base_url("style/style.css")?> />
<table>
	<thead>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Telphone</td>
		<td>Email</td>
		<td>Image</td>
	</thead>
	<?php foreach($users as $user):?>
		<tr>
			<td><?php echo $user->first_name ?></td>
			<td><?php echo $user->last_name ?></td>
			<td><?php echo $user->telephone ?></td>
			<td><?php echo $user->email ?></td>
			<td> <img style="height: 50px; width: 50px" src=<?php echo base_url("pictures/$user->Image")  
				?> alt="Staff Image"  />  </td>
				
				
		</tr>
		<?php endforeach?>
</table>