<?php
if (isset($_POST['submit'])) {
		$missing = $this->view['missing'];
		$errors = $this->view['errors'];
		
		if (isset($this->view['first_name'])) {
			$first_name = $this->view['first_name'];
		}
		
		if (isset($this->view['last_name'])) {
			$last_name = $this->view['last_name'];
		}
		
		if (isset($this->view['username'])) {
			$username = $this->view['username'];
		}
		
		if (isset($this->view['email'])) {
			$email = $this->view['email'];
		}
		
		if (isset($this->view['role'])) {
			$role = $this->view['role'];
		}
	}
?>

<div class="container">
	
<h3>Add User Account Form</h3>

<form action="<?php echo URL; ?>users/addUser" method="POST">
	
	<div class="row">  
    	<div class="six columns">
      	<label for="first_name">First Name</label>
      	<input class="u-full-width" type="text" placeholder="Enter first name" name="first_name" value='<?php if(isset($first_name)) echo $first_name; ?>'>
		<?php if(isset($missing) && in_array('first_name', $missing)) echo "<span class ='missing'>Field empty. Provide a first name.</span>"; ?>
		<?php if(isset($errors) && in_array('first_name', $errors)) echo "<span class ='errors'>First names must contain letters only.</span>"; ?>
    	</div>
		
	  
    	<div class="six columns">
      	<label for="last_name">Last Name</label>
      	<input class="u-full-width" type="text" placeholder="Enter last name" name="last_name" value='<?php if(isset($last_name)) echo $last_name; ?>'>
		<?php if(isset($missing) && in_array('last_name', $missing)) echo "<span class ='missing'>Field empty. Provide a last name.</span>"; ?>
		<?php if(isset($errors) && in_array('last_name', $errors)) echo "<span class ='errors'>Last names must contain letters only.</span>"; ?>
    	</div>
	</div>
	

	<div class="row">    	
		<div class="six columns">
			<label for="email">Email Address</label>
			<input class="u-full-width" type="email" placeholder="staff@northampton.com" name="email" value='<?php if(isset($email)) echo $email; ?>'>
			<?php if(isset($missing) && in_array('email', $missing)) echo "<span class ='missing'>Field empty. Provide an email address.</span>"; ?>
			<?php if(isset($errors) && in_array('email', $errors)) echo "<span class ='errors'>Email address must follow the format of username@domain.</span>"; ?>
		</div>
		
		<div class="six columns">
      	<label for="username">Username</label>
      	<input class="u-full-width" type="text" placeholder="Enter username" name="username" value='<?php if(isset($username)) echo $username; ?>'>
		<?php if(isset($missing) && in_array('username', $missing)) echo "<span class ='missing'>Field empty. Provide a username.</span>"; ?>
		<?php if(isset($errors) && in_array('username', $errors)) echo "<span class ='errors'>Usernames must be unique.</span>"; ?>
    	</div>
	</div>

	<div id="row">

    	<div class="six columns">
      	<label for="password">Password</label>
      	<input class="u-full-width" type="password" placeholder="Enter password" name="password">
		<?php if(isset($missing) && in_array('password', $missing)) echo "<span class ='missing'>Field empty. Provide a password.</span>"; ?>
		<?php if(isset($errors) && in_array('password', $errors)) echo "<span class ='errors'>Passwords must contain at least 5 characters and no more than 15 characters.</span>"; ?>
    	</div>
		
		<div class="six columns">
      	<label for="verifyPassword">Verify Password</label>
      	<input class="u-full-width" type="password" placeholder="Enter password" name="verifyPassword">
		<?php if(isset($missing) && in_array('verifyPassword', $missing)) echo "<span class ='missing'>Field empty. Provide password verification.</span>"; ?>
		<?php if(isset($errors) && in_array('verifyPassword', $errors)) echo "<span class ='missing'>The passwords do not match.</span>"; ?>
    	</div>

	</div>
	
	<div id="row">
	    <div class="six columns">
	      <label for="role">Select Role</label>
	      <select class="u-full-width" name="role">
	        <option value="staff" <?php if(isset($role)) echo "selected='selected'"; ?>>Staff User</option>
	        <option value="admin" <?php if(isset($role)) echo "selected='selected'"; ?>>Administrator</option>
		</select>
		<?php if(isset($missing) && in_array('role', $missing)) echo "<span class ='missing'>Field empty. Provide a role for the user.</span>"; ?>
	    </div>
		
	</div>
	
  
	<div id="row">
		<div class="twelve columns">
			<input id="userAdd-btn" class="u-full-width button-primary" type="submit" name="submit" value="Add User">	
			&nbsp;
			<input id="userReset-btn" class=" u-full-width button-primary" type="reset" value="Reset Form">
		</div>
	</div>
</form>

</div>