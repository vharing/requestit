<!--
#This file includes the display for users
# 
#
-->

<div class="container">
	
	<h3>Current Users</h3> <a href="/users/add"><button id="addUser-btn" class="u-full-width button-primary" type="submit" value="addUser">Add User</button></a>

	<div>The current users are listed below. </div>
	
		<table class='u-full-width'>
			
			<thead class="row_header">

				<th>User ID</th><th>Username</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Role</th><th colspan="2">Modify User Records</th>
		  	
		  	</thead>

			<tbody>
				
				<?php foreach($this->view['users'] as $r) : ?>
				
				<tr>
				<td><?php echo htmlspecialchars($r->id); ?></td>
				<td><?php echo htmlspecialchars($r->username); ?></td>
	            <td><?php echo htmlspecialchars($r->first_name); ?></td>
				<td><?php echo htmlspecialchars($r->last_name); ?></td>
				<td><?php echo htmlspecialchars($r->email); ?></td>
				<td><?php echo htmlspecialchars($r->role); ?></td>
	            <td><a href="<?php echo URL; ?>/users/displayUser/<?php echo $r->id; ?>"><button class="button-primary">UPDATE</button></a></td>
	            <td><a href="delete.php?id=$id"><button class="button-primary">DELETE</button></a></td>
	            </tr>

	            <?php endforeach; ?>
			
			</tbody>

		</table>
    
</div>

