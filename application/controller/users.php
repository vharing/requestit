<?php

class Users extends Controller
{
	
    public function index()
    {
        // load views
		// default is a display users view
        $users = new Users_Model();

        $this->view['users'] = $users->select();
        $this->render('index');
    }

    public function login() {
    	$this->render('login');
    }

    public function loginUser() {
    	$_SESSION["login"] = "true";

    	$this->redirect('/requests');
    }    

    public function logout() {
    	unset($_SESSION["login"]);

    	$this->redirect('/home');
    }
	
	public function add()
	{
		//displays the form for a user to be added to the users table
		$this->render('add');
	}

	public function addUser()
	{			
		$users = new Users_Model();
		
		$multidimensional = $users->validate($_POST);
				
		if(empty($multidimensional['missing']) && empty($multidimensional['errors'])) 
		{
			$users = new Users_Model();
			$tableName = 'users';			
			$data = $multidimensional['addToDB'];						
			$users->insert($tableName, $data);
			$this->displayAllRequests();
		} 
			else 
			{							
				if (isset($multidimensional['missing'])) 
				{
					$missing = $multidimensional['missing'];
				} 
					else 
					{
						$missing[] = '';
					}
			
				if (isset($multidimensional['errors'])) 
				{
					$errors = $multidimensional['errors'];
				} 
					else 
					{
						$errors[] = '';
					}
			
				if (isset($multidimensional['addToDB'])) 
				{
					$data = $multidimensional['addToDB'];
				} 
					else 
					{
						$data[] = '';
					}
			
				$this->view['missing'] = $missing;
				$this->view['errors'] = $errors;
			
						
			if (isset($data['first_name'])) 
			{
				$this->view['first_name'] = $data['first_name'];
			} 
			
			if (isset($data['last_name'])) 
			{
				$this->view['last_name'] = $data['last_name'];
			} 
			
			if (isset($data['username'])) 
			{
				$this->view['username'] = $data['username'];
			}
			
			if (isset($data['email'])) 
			{
				$this->view['email'] = $data['email'];
			}
			
			if (isset($data['role'])) 
			{
				$this->view['role'] = $data['role'];
			}
			
			$this->render('add');
		}
	}

    public function displayUser($id)
    {
		$users = new Users_Model();
	  
		$query = "SELECT * FROM users WHERE id=$id";
		$conditions = array("id=$id");
    	$this->view['users'] = $users->select($conditions);
    	$this->render('update');
    }
	
	
	public function updateUser($id)
	{

		$users = new Users_Model();
		
		$multidimensional = $users->validate($_POST);

		
		if(empty($multidimensional['missing']) && empty($multidimensional['errors'])) 
		{
			$users = new Users_Model();
			$tableName = 'users';		
			$data = $multidimensional['addToDB'];						
			$users->update($tableName, $data, "id=$id");
			$this->displayAllRequests();
		} 
		
			
		else 
			{							
				if (isset($multidimensional['missing'])) 
				{
					$missing = $multidimensional['missing'];
				} 
					else 
					{
						$missing[] = '';
					}
			
				if (isset($multidimensional['errors'])) 
				{
					$errors = $multidimensional['errors'];
				} 
					else 
					{
						$errors[] = '';
					}
			
				if (isset($multidimensional['addToDB'])) 
				{
					$data = $multidimensional['addToDB'];
				} 
					else 
					{
						$data[] = '';
					}
			
				$this->view['missing'] = $missing;
				$this->view['errors'] = $errors;
			
						
			if (isset($data['first_name'])) 
			{
				$this->view['first_name'] = $data['first_name'];
			} 
			
			if (isset($data['last_name'])) 
			{
				$this->view['last_name'] = $data['last_name'];
			} 
			
			if (isset($data['username'])) 
			{
				$this->view['username'] = $data['username'];
			}
			
			if (isset($data['email'])) 
			{
				$this->view['email'] = $data['email'];
			}
			
			if (isset($data['role'])) 
			{
				$this->view['role'] = $data['role'];
			}
			
			if (isset($data['id'])) {
				$this->view['id'] = $data['id'];
			}

			$this->displayUser($id);	
			
		}
	}
}	
		
		



