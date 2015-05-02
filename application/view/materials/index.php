<!--
#This file includes the display for materials
# 
#
-->

<div class="container">
	
	<h1>Materials List</h1>

	<div>The current materials are listed below. </div>
	
		<table class='u-full-width'>
			
			<thead class="row_header">

				<th>ID</th><th>Title</th><th>Author</th><th>Call#</th><th>Status</th><th>Request#</th><th>Updated</th><th>Created</th>
		  	
		  	</thead>

			<tbody>
				
				<?php foreach($this->view['materials'] as $r) : ?>
				
				<tr>
				<td><?php echo htmlspecialchars($r->id); ?></td>
				<td><?php echo htmlspecialchars($r->title); ?></td>
	            <td><?php echo htmlspecialchars($r->author); ?></td>
				<td><?php echo htmlspecialchars($r->call_number); ?></td>
				<td><?php echo htmlspecialchars($r->status); ?></td>
				<td><?php echo htmlspecialchars($r->request_id); ?></td>
				<td><?php echo htmlspecialchars($r->updated_at); ?></td>
				<td><?php echo htmlspecialchars($r->created_at); ?></td>
	            <td><a href='update.php?id=$id'><button class="button-primary">UPDATE</button></a></td>
	            <td><a href='delete.php?id=$id'><button class="button-primary">DELETE</button></a></td>
	            </tr>

	            <?php endforeach; ?>
			
			</tbody>

		</table>
    