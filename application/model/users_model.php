<?php

/**
*  Users Model
*/
class Users_Model extends Model {	
	
	function __construct() {
		parent::__construct();

		$this->tableName = "users"; 
	}

	public function validate($postData) 
	{
				
		foreach ($postData as $key => $value) 
		{
			${$key} = trim($value);
		}
				
		$formObject = new FormValidation($first_name, $last_name, $username, $email, $role, $password, $verifyPassword);
				
		$FirstName = $formObject->validateFirstName();
		
		if ($FirstName == false) 
		{
			$missing[] = 'first_name';
		} 
			else 
			{
				$addToDB['first_name'] = $FirstName;
			}
				
		$LastName = $formObject->validateLastName();
		
		if ($LastName == false) 
		{
			$missing[] = 'last_name';
		} 
			else 
			{
				$addToDB['last_name'] = $LastName;
			}
		
		$Username = $formObject->validateUsername();
		
		//var_dump($Username);
				
		switch($Username) {
			case "missing":
				$missing[] = 'username';
				break;
			case "error":
				$errors[] = 'username';
				break;
			default:
				$addToDB['username'] = $Username;
				break;
		}
		
		$Email = $formObject->validateEmail();
		
		switch ($Email) {
			case false:
				$missing[] = 'email';
				break;
			case $Email: 
				$addToDB['email'] = $Email;
				break;
			case 'invalid':
				$errors[] = 'email';
				break;	
		}
		
		$Role = $formObject->validateRole();
		
		if ($Role == false) 
		{
			$missing[] = 'role';
		} 
		else 
		{
			$addToDB['role'] = $Role;
		}
		
		$Password = $formObject->validatePassword();
		
		switch ($Password) 
		{
			case false:
				$missing[] = 'password';
				break;				
			case "invalid":
				$errors[] = 'password';
				break;
			default:
				$addToDB['password'] = sha1($Password);
				break;
		}
		
		$Verify = $formObject->validateVerify();

		if ($Verify === false) 
		{
			$errors[] = 'verifyPassword';
		}
		
		if(isset($missing)) $multidimensional['missing'] = $missing;
			
		if(isset($errors)) $multidimensional['errors'] = $errors;
			
		if(isset($addToDB)) $multidimensional['addToDB'] =  $addToDB;
		
		return $multidimensional;	
	}
	
}