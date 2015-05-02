<?php 

class Model extends Db {

	public $tableName = null;

	function __construct() {
		parent::__construct();
	}

	/**
	 * Select
	 *
	 * @param string $sql An SQL string
	 * @param array $conditions Paramters to bind
	 * @param constant $fetchMode A PDO Fetch mode
	 * @return mixed
	 */
	public function select($conditions = array(), $fetchMode = PDO::FETCH_OBJ) {

		$sql = "SELECT * FROM $this->tableName";

		if (count($conditions) != 0) {
			$i = 0;
			foreach ($conditions as $key => $value) {
				if ($i != 0) {
					$sql .= " AND $value";
				}
				else {
					$sql .= " WHERE $value "; 
				}
				$i++;
			}
		}

		$query = $this->prepare($sql);

		$query->execute();
		$results = $query->errorInfo();

		if ($results[0] == "00000") {
			return $query->fetchAll($fetchMode);
		} 
		else {
			return $results;
		}
	}

	/**
	 * Insert
	 *
	 * @param string $table A name of table to insert into
	 * @param string $data An associative array
	 */
	public function insert($table, $data) {
		ksort($data);

		$fieldNames = implode('`, `', array_keys($data));
		$fieldValues = ':' . implode(', :', array_keys($data));

		$sql = "INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)";

		$query = $this->prepare($sql);

		foreach ($data as $key => $value) {
			$query->bindValue(":$key", $value);
		}

		$query->execute();
		$lastInsertId = $this->lastInsertId();
		$result = $query->errorInfo();
		$result['last_insert_id'] = $lastInsertId;
		return $result;
	}

     /**
	 * Updates records in $table
	 *
	 * @param string $table A name of table to insert into
	 * @param string $data associative array of db_field => value
	 * @param string $where the query part after keyword 'WHERE '
	 */
	public function update($table, $data, $where)
	{
		ksort($data);

		$fieldDetails = NULL;
		foreach($data as $key=> $value) {
			$fieldDetails .= "`$key`=:$key,";
		}
		$fieldDetails = rtrim($fieldDetails, ',');

		$sql = "UPDATE $table SET $fieldDetails WHERE $where";
		$query = $this->prepare($sql);

		foreach ($data as $key => $value) {
			$query->bindValue(":$key", $value);
		}
		$query->execute();
		
		$rowCount = $query->rowCount();
		$errors = $query->errorInfo();
		
		if ($errors[0] == "00000" || is_null($errors)) {
			return $rowCount;
		} 
		else {
			return $errors;
		}

	}

	/**
	 * Delete
	 *
	 * @param string $table
	 * @param string $where
	 * @param integer $limit
	 * @return integer Affected Rows
	 */
	public function delete($table, $where, $limit = 1)
	{
		return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
	}

	/**
	 * Query
	 *
	 * @param type $sql
	 * @return type
	 */
	public function query($sql, $fetchMode = PDO::FETCH_OBJ)
	{
		$query = $this->prepare($sql);

		$query->execute();
		$results = $query->errorInfo();

		if ($results[0] == "00000") {
			return $query->fetchAll($fetchMode);
		} 
		else {
			return $results;
		}
	}
	
	

}