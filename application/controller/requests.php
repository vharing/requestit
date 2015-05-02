<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Requests extends Controller
{
    function __construct() {
        //if (!isset($_SESSION["login"])) {
           //$this->redirect('/'); 
        //} 
        //else {  
            //$this->loadModel();
        //}
    }
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {

        $requests = new Requests_Model();

        //$conditions = array("first_name = 'Monique'");
        //$this->view['requests'] = $requests->select($conditions);

        $this->view['requests'] = $requests->select();

        $this->render('index');
    }
	
     
	public function manage($id)
	{   
        //access materials database
        $materials = new Materials_Model();
        $where = array("request_id = $id");
        $materials = $materials->select($where);
        
        //access requests database
        $requests = new Requests_Model();
        $where = array("id = $id");
        $requests = $requests->select($where);

        $this->view["requests"] = $requests;
        $this->view["materials"] = $materials;

        $this->render('manage');

        
	}

    
    public function addRequest()
    {
            $requests = new Requests_Model();
           
			$missing[] = "";
			$errors[] = "";

            date_default_timezone_set('America/New_York');

            $date_convert = strtotime($_POST['date_requested']);
            $date_convert_2 = strtotime($_POST['date_requested_2']);
            $date_convert_3 = strtotime($_POST['date_requested_3']);
			//DO NOT DELETE NEEDED FOR VALIDATION!!!!!!!!!	

            $data = array(
                'first_name'=>$_POST["first_name"],
                'last_name'=>$_POST["last_name"],
                'email'=>$_POST["email"],
                'date_requested'=>date("Y-m-d", $date_convert),
                'student_id'=>$_POST["student_id"],
                'phone'=>$_POST["phone"],
                'special_instr'=>$_POST["special_instr"],
                'campus'=>$_POST["campus"],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
                
                );

            $data_2 = array(
                'first_name'=>$_POST["first_name"],
                'last_name'=>$_POST["last_name"],
                'email'=>$_POST["email"],
                'date_requested'=>date("Y-m-d", $date_convert_2),
                'student_id'=>$_POST["student_id"],
                'phone'=>$_POST["phone"],
                'special_instr'=>$_POST["special_instr_2"],
                'campus'=>$_POST["campus"],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
                
                );

            $data_3 = array(
                'first_name'=>$_POST["first_name"],
                'last_name'=>$_POST["last_name"],
                'email'=>$_POST["email"],
                'date_requested'=>date("Y-m-d", $date_convert_3),
                'student_id'=>$_POST["student_id"],
                'phone'=>$_POST["phone"],
                'special_instr'=>$_POST["special_instr_3"],
                'campus'=>$_POST["campus"],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
                
                );
			//DO NOT DELETE ABOVE CONTENT NEEDED FOR VALIDATION!!!!!!!!!	
			
			//determine if any values are empty, push name of field on the missing array
			foreach ($data as $key => $value) {
				if (empty($value)) {
					//var_dump($value);
				 	$missing[] = $key;
				}
			}

			//set first and last names to proper capitalization
			$data['first_name'] = ucfirst(strtolower(trim($data['first_name'])));
			$data['last_name'] = ucfirst(strtolower(trim($data['last_name'])));
			
			//checking for any errors on the form
			foreach ($data as $key => $value) {
				if ((is_numeric($data['first_name'])) || (is_numeric($data['last_name'])) ){
					$errors[] = $key;
				}
			}
			
			//save table name to variable
			$tableName = 'requests';	



			if((count($missing) == 1 ) && (count($errors) == 1)) {
				//model insert() requires the table name and an assoc. array of data
	        	$results = $requests->insert('requests',$data);

                if (!empty($date_convert_2))
                {
                  $results_2 = $requests->insert('requests',$data_2);
                }

                if (!empty($date_convert_3))
                {
                  $results_3 = $requests->insert('requests',$data_3);
                }


			
				//display all users - reflects the change
	       	 	header('location: ' . URL . 'requests/add');
			


            if  (!empty ($results["last_insert_id"])){
 
                    $materials = new Materials_Model();
           
                    $data = array(
                
                        'request_id'=>$results["last_insert_id"],
                        'title'=>$_POST["title"],
                        'author'=>$_POST["author"],
                        'call_number'=>$_POST["call_number"],
                        'created_at' => date("Y-m-d H:i:s"),
                        'updated_at' => date("Y-m-d H:i:s")
                    );

            }
                    $results = $materials->insert('materials',$data);
            
             if  (!empty ($results_2["last_insert_id"])){

                $materials = new Materials_Model();
                    $data_2 = array(
                
                        'request_id'=>$results_2["last_insert_id"],
                        'title'=>$_POST["title_2"],
                        'author'=>$_POST["author_2"],
                        'call_number'=>$_POST["call_number_2"],
                        'created_at' => date("Y-m-d H:i:s"),
                        'updated_at' => date("Y-m-d H:i:s")
                    );
            }
                    $results_2 = $materials->insert('materials',$data_2);
                        

            if  (!empty ($results_3["last_insert_id"])){

                $materials = new Materials_Model();
                    $data_3 = array(
                
                        'request_id'=>$results_3["last_insert_id"],
                        'title'=>$_POST["title_3"],
                        'author'=>$_POST["author_3"],
                        'call_number'=>$_POST["call_number_3"],
                        'created_at' => date("Y-m-d H:i:s"),
                        'updated_at' => date("Y-m-d H:i:s")
                    );
            }

                    $results_3 = $materials->insert('materials',$data_3);
            			
			}
			$this->view['missing'] = $missing;
			$this->view['errors'] = $errors;

    
            //$results = $requests->insert('requests',$data);


           //var_dump($key);


        $this->render('add');
                
    }

    public function updateRequest($id){
	   //access materials database
       $materials = new Materials_Model();
        $where = array("request_id = $id");
        $materials = $materials->select($where);
        
        //access requests database
       $requests = new Requests_Model();
        $where = array("id = $id");
        $requests = $requests->select($where);

       $this->view["requests"] = $requests;
       $this->view["materials"] = $materials;
	  
        //grab updated data from manage requests form
	   //for each?
       $data = array (
		'id' => $_POST['id'],
		'status' => $_POST['requestStatus'],
		'special_instr' => $_POST['special_instr'],
		'status' => $_POST['materialStatus']
		);
/*
       $data = arrayM (
        'id' => $_POST['id'],
        'status' => $_POST['$materials->status']
        );
*/
       $requests->update('requests', $data, "id=$id");
       $materials->update('materials', $data, "id=$id");
       
       $this->manage($id);

	}

    public function add(){

         $this->render('add');

    }



}