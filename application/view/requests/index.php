
<div class="container dashboard">
	
	<div class="row">
      
      <div class="five columns" style="margin-top: 1%">
      	<h3>Requests</h3>
      </div><!--end of twelve columns-->    
    	
		<div class="three columns" style="float: right;>
			<label for="requestsFilter">&nbsp;Filter By</label>
				<select class="twelve columns" id="requestsFilter"  name="requestsFilter" style="margin-bottom: 6px;">
					<option value="Open">Open</option>
					<option value="Pending">Pending</option>				           
				</select>
		</div><!--end of row-->		
	</div><!--end of row-->
	
	<div class="row">		
		
        <!--Requests -->
        <div class="twelve columns right_sidebar">
        	<table class="u-full-width">
    				
            <thead class="row_header">
      				<tr>
        					<th>Request ID</th>
                  <th>Date</th>
        					<th>Name</th>
        					<th># of Items</th>
        					<th>Status</th>
                  <th>Manage Record</th>
                  <th>Delete Record</th>
      				</tr>
    				</thead>
    				
            <tbody>
              <?php foreach($this->view['requests'] as $r) : ?>
    				  <tr>
      					<td><?php echo htmlspecialchars($r->id); ?></td>
                <td><?php echo htmlspecialchars($r->date_requested); ?></td>
      					<td><?php echo htmlspecialchars($r->last_name); ?>, 
                    <?php echo htmlspecialchars($r->first_name); ?></td>
      					<td><?php echo htmlspecialchars($r->email); ?></td>
      					<td><?php echo htmlspecialchars($r->phone); ?></td>
                <td><a class="button button-primary" href="<?php echo URL ?>requests/manage/<?php echo $r->id ?>">MANAGE</b></td>
                <td><a class="button button-primary" href="<?php echo URL ?>requests/delete/<?php echo $r->id ?>">DELETE</b></td>
    				  </tr>
              <?php endforeach; ?>
            </tbody>
			  
          </table>
    	  </div>
    
   
        
        
    </div>
</div>
