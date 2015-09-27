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
		$select = "SELECT id, nazwa";
		$from = " FROM zajecia";

		$sql = $select . $from; 

		$conn = $this->db->getConn();
		$result = mysqli_query($conn, $sql);
		$this->db->disconnect();
		return $result;
	}

	/*
	 * Dodaawanie nowego uzytkownika
	 */
	public function addNewUser($imie, $haslo) {
		$this->db->connect();
		$insert = "INSERT INTO user";
		$values = " VALUES(null, '".$imie."','". $haslo."')";

		$sql = $insert . $values; 
		var_dump($sql);
		$conn = $this->db->getConn();
		$result = mysqli_query($conn, $sql);
		$this->db->disconnect();
		return $result;
	}

	/*
	 * Dodawanie nowego rodzaju zajec
	 */
	public function addNewActive($nazwa) {
		$this->db->connect();
		$insert = "INSERT INTO zajecia";
		$values = " VALUES(null, '" . $nazwa . "')";

		$sql = $insert . $values; 

		$conn = $this->db->getConn();
		$result = mysqli_query($conn, $sql);
		$this->db->disconnect();
		return $result;
	}
	
	/*
	 * Usuniecie uzytkownika z bazy
	 */
	public function delUser($id) {
		$this->db->connect();
		$delete = "DELETE";
		$from = " FROM user";
		$where = " WHERE id_user=$id";

		$sql = $delete . $from . $where;

		$conn = $this->db->getConn();
		$result = mysqli_query($conn, $sql);
		$this->db->disconnect();
		return $result;

	}
	
	/*
	 * Usuniecie rodzaju zajec z bazy
	 */
	public function delActiv($id) {
		$this->db->connect();
		$delete = "DELETE";
		$from = " FROM zajecia";
		$where = " WHERE id=$id";

		$sql = $delete . $from . $where;

		$conn = $this->db->getConn();
		$result = mysqli_query($conn, $sql);
		$this->db->disconnect();
		return $result;

	}

	// ... other methods ...
}