<?php

require_once $conf->root_path . '/app/db/Connector.php';

/**
 * 	Wykorzystuje klase Connector
 * 	przechowuje zapytania
 */
class AdminQueryDB {

	private $db;

	public function __construct() {
		$this->db = new Connector();
	}

	// ... main methods ....

	/*
	 * Pobiera pelna liste 
	 * uzytkoniwkow
	 */
	public function getListUsers() {
		$this->db->connect();
		$select = "SELECT user.id_user, user.imie";
		$from = " FROM user";

		$sql = $select . $from; 

		$conn = $this->db->getConn();
		$result = mysqli_query($conn, $sql);
		$this->db->disconnect();
		return $result;
	}
	
	/*
	 * Pobiera pelna liste zajec
	 */
	public function getListActivs() {
		$this->db->connect();
		$select = "SELECT zajecia.id, zajecia.nazwa";
		$from = " FROM zajecia";

		$sql = $select . $from; 

		$conn = $this->db->getConn();
		$result = mysqli_query($conn, $sql);
		$this->db->disconnect();
		return $result;
	}

	// ... other methods ...
}