

<?php if (isset($_POST['submit'])) ?>

<?php $request = ""; ?>
<?php foreach($this->view['requests'] as $r) : ?>
	<?php $request = $r; ?>
<?php endforeach; ?>

<!-- *********************************************************************************************** -->

<div class="container manage">
  <!-- method="get" action=""> -->
  <form>
  <!--action="<?php //echo URL; ?>requests/updateRequest" method="post" id="updateform"-->
	<div class="row">
		<div class="one-half column">
			
			<h3>Manage Requests</h3>			
			
			<!--$_POST to requests.status?; loop to display current value?-->
			<div class="row">
				<div class="six columns">
					<label>Date: </label>
					<input class="u-full-width" type="text" id="requestDate" value="<?php echo htmlspecialchars($request->date_requested); ?>" disabled>
				</div>

				<div class="six columns">
					<label for id="selectStatus">Status of Request</label>
					<select name="requestStatus">
						<option value="Availability" <?php if($request->status == NULL) echo "selected='selected'"; ?>>Please select:</option>
						<option value="Open" <?php if($request->status == "Open") echo "selected='selected'"; ?>>Open</option>
						<option value="Pending" <?php if($request->status == "Pending") echo "selected='selected'"; ?>>Pending</option>
						<option value="Closed" <?php if($request->status == "Closed") echo "selected='selected'"; ?>>Closed</option>
					</select>
				</div>						
			</div><!--end of row-->
			
			<div class="row">					
				<label>Request #: </label>
				<input class="u-full-width" type="text" id="staffID" value="<?php echo htmlspecialchars($request->id); ?>" disabled>

				<label>Requestor's Name: </label>
				<input class="u-full-width" type="text" id="requestID" value="<?php echo htmlspecialchars($request->first_name." ".$r->last_name); ?>" disabled>
						
				<label for="addInfo">Additional Information:</label><!-- requests.special_instr ?-->
				<textarea class="u-full-width" id="addInfo" max-length="255" cols="50" rows="5" value="<?php echo htmlspecialchars($request->special_instr); ?>"></textarea>						
			</div><!--end of row-->		

		</div><!--end of one-half column-->		
	</div><!--end of row-->
	
	
	<div class="row">	  		
		<div class="one-half column">			
			
<!--RESOURCES-->
			<?php $counter = 0; ?>
			<?php foreach($this->view['materials'] as $m) : ?>
			<?php $counter++; ?>

			<input type="hidden" name="material-<?php echo $m->$counter; ?>"></input>

			<div class="row">	
				<div class="twelve columns">
					<label for "resourceTitle">Resource:</label>
					<input  class="u-full-width" type="text" id="resource" value="<?php echo $counter;  echo ". "; echo htmlspecialchars($m->title); ?>" disabled>					
				</div>

			</div>
			<div class="row">

				<div class="eight columns">
					<label for "resourceAuthor">Author:</label>
					<input  class="u-full-width" type="text" id="by" value="<?php echo htmlspecialchars($m->author); ?>" disabled>					
				</div>

				<div class="four columns">
					<label for="available">Availability</label>
					<!--$_POST to materials.status?; loop to display current value?-->
					<select class="u-full-width" name="materialStatus">
						<option value="Availability" <?php if($m->status == NULL) echo "selected='selected'"; ?>>Please Select:</option>
						<option value="Available" <?php if($m->status == "Available") echo "selected='selected'"; ?>>Available</option>
						<option value="Not Available" <?php if($m->status == "Not Available") echo "selected='selected'"; ?>>Not Available</option>
						<option value="Please contact" <?php if($m->status == "Please contact") echo "selected='selected'"; ?>>Please contact</option>
					</select>
				</div>

				</br>	
			</div><!--end of row-->	
			
			<?php endforeach; ?>
			
			</br>

<!--BUTTONS-->	

			<div class="row" id="buttons">
		
				<a href="<?php echo URL; ?>requests/updateRequest/<?php $r->id; ?>"><button class="button-primary" value="Save" type="submit">Save</button></a>
				<!-- Saves the file to a database. -->
				
			  	<a class="button button-primary" href="#">Notify</a>
			  	<!-- Email pdf to Patron -->

				<a class="button button-primary" href="#">Print Request</a>
				<!-- Print pdf -->
		
			</div><!--end of buttons row-->	
			
		</div><!--end of twelve columns-->
	</div><!--end of notify row-->		

	
  </form>

</div> 

</div><!--end of container-->


