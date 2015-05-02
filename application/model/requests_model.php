<?php

/**
*  Requests Model
*/
class Requests_Model extends Model {	
	
	function __construct() {
		parent::__construct();

		$this->tableName = "requests"; 
	}

	function getAllMonique() {
		return $this->query("SELECT * FROM requests WHERE first_name = 'Mark'");
	}

	function insertPatron() {
		return $this->query("INSERT INTO requests (first_name) values (?)");
	}

	function getManageRequest(){
		return $this->query("SELECT r.id, r.date_requested, r.first_name, r.last_name, m.id, m.title, m.author FROM requests r, materials m WHERE r.id = m.request_id");
	}

}