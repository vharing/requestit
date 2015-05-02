<?php

class FormValidation extends Db 
{
	
	private  $_first_name;
	private  $_last_name;
	private  $_username;
	private  $_email;
	private  $_role;
	private  $_password;
	private  $_verifyPassword;
	
	
	public function __construct($first_name, $last_name, $username, $email, $role, $password, $verifyPassword) 
	{
		$this->_first_name = $first_name;		
		$this->_last_name = $last_name;
		$this->_username = $username;
		$this->_email = $email;
		$this->_role = $role;
		$this->_password = $password;
		$this->_verifyPassword = $verifyPassword;
	}
		
	
	public function validateFirstName() 
	{
		$value = $this->_first_name;
		
		if ($value != '') 
		{
			$value = strtolower($value);
			$value = ucfirst($value);
			return $value;
		} 
			else 
			{
				return false;
			}
	}
	
	public function validateLastName() 
	{
		$value = $this->_last_name;
		
		if ($value != '') 
		{
			$value = strtolower($value);
			$value = ucfirst($value);
			return $value;
		} 
			else 
			{
				return false;
			}
	}
	
	public function validateUsername() 
	{
		$value = $this->_username;
		if(isset($_POST['recordID'])) {$tempValue = $_POST['recordID'];}
		if(!isset($_POST['recordID'])) {$tempValue = 1;}		
		
		//if the input is empty - return false
		if ($value == "") {return "missing";}
		
		//if the input has an invalid username - return true
		if ($value != "") {
			
			$value = strtolower($value);
			
			$object = new Model();
			
			$allUsernamesObject = $object->query("SELECT username FROM users");	
			$allUserRecordID = $object->query("SELECT id FROM users");
			
			
			
			if (null != $tempValue)
			{
				//if not null, then we're editing an existing record				
				
				//create an arary of usernames
				foreach ($allUsernamesObject as $key => $val) 
				{
					$existingUsernames[] = $val->username;
				}
			
				//create an array of ids
				foreach ($allUserRecordID as $key => $val) 
				{
					$existingUserIDs[] = $val->id;
				}
			
				//creates a multidimensional array of corresponding usernames and id
				foreach ($existingUsernames as $key => $level):
       			
					foreach ($existingUserIDs as $k =>$attribute):
					
						$combinedArray[$level] = $attribute;
						array_shift($existingUserIDs);
						break;
					
					endforeach;
			
				endforeach;
				
				
							
				if (!in_array($value, $existingUsernames)) 
				{
					return $value; // this value is unique - add to the db				
				}
				else 
				{		
					$matchingIDNumber = $combinedArray[$value];
										
					if($tempValue == $matchingIDNumber)
					{
						return $value; //you're editing an existing record
					}
					
					else 
					{
						return 'error';
					}		
					
				}//closes the else statement
				
			} //closes if statement
			else 
			{
			 return $value;	
			}
						
		} //closes second if statement
	
	}	//closes the function
				
		
		
	
	public function validateRole() 
	{
		$value = $this->_role;
		
		if ($value != '') 
		{
			return $value;
		} 
			else 
			{
				return false;
			}
	}
	
		
	public function validateEmail() 
	{
		$value = $this->_email;
		
		if($value == '') {return false;}
		
		$reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
		
		if(!preg_match($reg, $value)) 
		{
			return 'invalid';
		} 
			else 
			{
				return $value;
			}	
	}
	
	public function validatePassword() 
	{
		$valueCheck = strlen($this->_password);
		
		$value = $this->_password;
		
		if ($valueCheck == 0) 
		{
			return false;
		}
		
		if ($valueCheck > 4 && $valueCheck < 16) 
		{
			return $value;
			break;
		} 
		
		if ($valueCheck < 5 || $valueCheck > 16)
		{
			$temp = 'invalid';
			return $temp;	
		}
	}
	
	public function validateVerify() 
	{
		$tempVerify = $this->_verifyPassword;
		$tempPassword = $this->_password;
		
		if ($tempVerify == $tempPassword) 
		{
			return true;
		} 
			else 
			{
				return false;
			}
	}
}