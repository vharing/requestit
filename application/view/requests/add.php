
  
   <!--Php validation for patron page-->
   <?php
		if (isset($_POST['submit'])) {
			$missing = $this->view['missing'];
			$errors = $this->view['errors'];
		}
	?>

<div class="container patronPage">
    
    <div class="row">
      
      <div class="twelve columns" style="margin-top: 1%">
      	<h3> NCC Material Request</h3>
      </div><!--end of twelve columns-->
    
    </div><!--end of row-->    

    <div class="row">
      
      <div class="six columns" style="margin-top: 1%">
      	<h5> Student Information</h5>          
      </div><!--end of six columns-->
    
      <div class="six columns" style="margin-top: 1%">
     	 <h5> Materials Requested</h5>     
      </div><!--end of six columns-->     
    
    </div><!--end of row--> 
    
  <!-- Student Information-->  
  
    <div class="row">
      
      <form action="<?php echo URL; ?>requests/addRequest" method="post" id="addform">
      <div id ="patron" class="one-half column" style="margin-top: 1%">
        
        <div class="row">
          
          <div class="six columns">
            
            <p id="patronP">Enter contact information:</p>
       
            <label for="first_name">First Name</label>
            <input class="u-full-width" name="first_name" id="first_name" name="first_name" type="text" >
            <?php if(isset($this->view['missing']) && in_array('first_name', $this->view['missing'])) echo "<span class ='missing'>Field empty. Provide a first name.</span>"; ?>
			<?php if(isset($this->view['errors']) && in_array('first_name', $this->view['errors'])) echo "<span class ='errors'>First names must contain letters only.</span>"; ?>
            
            <label for="student_id">Student ID</label>
            <input class="u-full-width"  name="student_id" id="student_id" name="student_id" type="text">
            <?php if(isset($this->view['missing']) && in_array('student_id', $this->view['missing'])) echo "<span class ='missing'>Field empty. Provide a student ID.</span>"; ?>
			<?php if(isset($this->view['errors']) && in_array('student_id', $this->view['errors'])) echo "<span class ='errors'>Student ID's must contain numbers only.</span>"; ?>
            
            
            <label for="email">Email Address</label>
            <input class="u-full-width" name="email" id="email" name="email" type="email">
            <?php if(isset($this->view['missing']) && in_array('email', $this->view['missing'])) echo "<span class ='missing'>Field empty. Provide an email address.</span>"; ?>
			<?php if(isset($this->view['errors']) && in_array('email', $this->view['errors'])) echo "<span class ='errors'>Email address must follow the format of username@domain.</span>"; ?>
            
          
            <p id="patronP" style="margin-top: 12.2%; margin-bottom: 6px;" >Select a Pick-up Location</p>
          
           <label for="campus">&nbsp;Please choose a campus</label>
           <select class="twelve columns" id="campus"  name="campus" style="margin-bottom: 6px;">
				<option value="Main">Main</option>
				<option value="Monroe">Monroe</option>
				<option value="Fowler Family Southside">Fowler Family Southside</option>
				<option value="Pike & Wayne">Pike & Wayne</option>
           
            </select>
          
          </div><!--end of six columns--> 

          <div class="six columns" style="margin-top: 12.2%" >
			
            
            <label for="last_name">Last Name</label>
            <input class="u-full-width" name="last_name" id="last_name" name="last_name" type="text">
            <?php if(isset($this->view['missing']) && in_array('last_name', $this->view['missing'])) echo "<span class ='missing'>Field empty. Provide a last name.</span>"; ?>
			<?php if(isset($this->view['errors']) && in_array('last_name', $this->view['errors'])) echo "<span class ='errors'>Last names must contain letters only.</span>"; ?>
          
            <label for="phone">Phone Number</label>
            <input class="u-full-width"  name="phone" id="phone" name="phone" type="tel">
            <?php if(isset($this->view['missing']) && in_array('phone', $this->view['missing'])) echo "<span class ='missing'>Field empty. Provide a phone number.</span>"; ?>
			<?php if(isset($this->view['errors']) && in_array('phone', $this->view['errors'])) echo "<span class ='errors'>Phone numbers must contain numbers only.</span>"; ?>
          
            <label class="example-send-yourself-copy" style="margin-top: 18%">
            <input type="checkbox">
            <span class="label-body">Send a copy to yourself</span>
            </label>         
          
          </div><!--end of six columns-->
          
        </div><!--end of row-->       
           
      </div><!--end of one-half column-->
      
   <!-- Materials Requested -->   
      
      <div id ="patron" class="one-half column" style="margin-top: 1%; margin-left: 50px;">
       
        <div class="row" id="itemA">
           
            <div class="six columns">
            
            	<p id="patronP">Enter item requested:</p>
            
            <label for="title">Book Title</label>
            <input class="u-full-width"  name="title" id="title" type="text">
                     
            <label for="date_requested">Date Requested</label>
            <input class="u-full-width"  name="date_requested" id="date_requested" type="text">
            <?php if(isset($this->view['missing']) && in_array('date_requested', $this->view['missing'])) echo "<span class ='missing'>Field empty. Provide a date reuested.</span>"; ?>
			      <?php if(isset($this->view['errors']) && in_array('date_requested', $this->view['errors'])) echo "<span class ='errors'>Date requested must contain numbers only.</span>"; ?>
           
            <label for="author">Author</label>
            <input class="u-full-width"  name="author" id="author" type="text">
           
            <label for="special_instr">Special Instructions</label>
            <input class="fullwidth"  name="special_instr" id="special_instr" type="text">  
            
            </div><!--end of six columns-->
        
            
            <div class="six columns" style="margin-top: 12.2%">
            
            <label for="call_number">Call Number</label>
            <input class="u-full-width"  name="call_number" id="call_number" type="text">

            
            	
            </div><!--end of six columns-->
            
        </div><!--end of row-->

        <div class="row" id="itemB" name="itemB" style="display: none">
           
            <div class="six columns">
            
              <p id="patronP">Enter 2nd item requested:</p>
            

            <label for="title">Book Title</label>
            <input class="u-full-width"  name="title_2" id="title_2" type="text">
           
          
            <label for="date_requested">Date Requested</label>
            <input class="u-full-width"  name="date_requested_2" id="date_requested_2" type="text">
            <?php if(isset($this->view['missing']) && in_array('date_requested_2', $this->view['missing'])) echo "<span class ='missing'>Field empty. Provide a date reuested.</span>"; ?>
            <?php if(isset($this->view['errors']) && in_array('date_requested_2', $this->view['errors'])) echo "<span class ='errors'>Date requested must contain numbers only.</span>"; ?>
           
            <label for="author">Author</label>
            <input class="u-full-width"  name="author_2" id="author_2" type="text">
           
            <label for="special_instr">Special Instructions</label>
            <input class="fullwidth"  name="special_instr_2" id="special_instr_2" type="text">  

            </div><!--end of six columns-->
                   
            <div class="six columns" style="margin-top: 12.2%">

            <label for="call_number">Call Number</label>
            <input class="u-full-width"  name="call_number_2" id="call_number_2" type="text">
            <br/><br/>
            <input class="button-primary" value="Remove Item" id="B_remove" type="button" style="margin-left: 20%"/>
  
            </div><!--end of six columns-->
            
        </div><!--end of row-->

        <div class="row" id="itemC" name="itemC" style="display: none">
           
            <div class="six columns">
            
              <p id="patronP">Enter 3rd item requested:</p>
            

            <label for="title">Book Title</label>
            <input class="u-full-width"  name="title_3" id="title_3" type="text">
           
          
            <label for="date_requested">Date Requested</label>
            <input class="u-full-width"  name="date_requested_3" id="date_requested_3" type="text">
            <?php if(isset($this->view['missing']) && in_array('date_requested', $this->view['missing'])) echo "<span class ='missing'>Field empty. Provide a date reuested.</span>"; ?>
            <?php if(isset($this->view['errors']) && in_array('date_requested', $this->view['errors'])) echo "<span class ='errors'>Date requested must contain numbers only.</span>"; ?>
           
            <label for="author">Author</label>
            <input class="u-full-width"  name="author_3" id="author_3" type="text">
           
            <label for="special_instr">Special Instructions</label>
            <input class="fullwidth"  name="special_instr_3" id="special_instr_3" type="text">  

            </div><!--end of six columns-->
        
            
            <div class="six columns" style="margin-top: 12.2%">
           
            <label for="call_number">Call Number</label>
            <input class="u-full-width"  name="call_number_3" id="call_number_3" type="text">
            <br/><br/>
            <input class="button-primary" value="Remove Item" id="C_remove" type="button" style="margin-left: 20%"/>

            
              
            </div><!--end of six columns-->
            
        </div><!--end of row-->

        <div class="row">
          <div class="six columns">
            <input class="u-full-width button-primary" style="margin-top: 5%" value = "Add another item" id="addItem" type="button" >     
            <input class="button-primary" value="Submit"  style="margin-top: 5%" type="submit">
            <input class="button-primary" value="Reset" style="margin-left: 5%" type="reset">
          </div>
        </div>

        </div><!--end of one-half column-->
                    
        </form>
		
     
    
   </div><!--end of row-->

    <input type = "hidden" class = "alt_date" />
  
  </div><!--end of container-->

<!-- End Document -->